import assert from 'node:assert/strict';
import { spawn } from 'node:child_process';
import { mkdtemp, writeFile, readFile, unlink, mkdir, rm } from 'node:fs/promises';
import { tmpdir } from 'node:os';
import { dirname, join, resolve, basename } from 'node:path';
import { fileURLToPath } from 'node:url';
import { request } from 'node:http';

// A small loopback HTTP client avoids the installed Node 24 fetch parser bug.
function fetch(url, options = {}) {
  return new Promise((resolveResponse, reject) => {
    const body = options.body ? options.body.toString() : '';
    const req = request(url, { method: options.method || 'GET', headers: {
      Connection: 'close', ...(body ? { 'Content-Type': 'application/x-www-form-urlencoded', 'Content-Length': Buffer.byteLength(body) } : {}), ...options.headers,
    } }, res => {
      const chunks = [];
      res.on('data', b => chunks.push(b));
      res.on('end', () => {
        const text = Buffer.concat(chunks).toString();
        resolveResponse({ status: res.statusCode, headers: { get: key => res.headers[key.toLowerCase()] }, text: async () => text, json: async () => JSON.parse(text) });
      });
      res.on('error', reject);
    });
    req.on('error', reject); req.end(body);
  });
}

const root = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const parent = resolve(process.env.BESIKT_TEST_TEMP || tmpdir());
const state = await mkdtemp(join(parent, 'besikt-leads-'));
const port = 20000 + Math.floor(Math.random() * 20000);
const base = `http://127.0.0.1:${port}`;
const crm = `http://127.0.0.1:${port + 1}`;
const children = [];
let ip = 1;
const settings = async (url = '') => writeFile(join(state, 'settings.php'),
  `<?php return ['SITE_URL'=>'${base}', 'VENDERCRM_URL'=>'${url}', 'VENDERCRM_API_KEY'=>'${url ? 'test-key-not-a-secret' : ''}'];`);
const start = (port, router) => {
  const p = spawn(process.env.PHP_BINARY || 'php', ['-S', `127.0.0.1:${port}`, '-t', root, router], {
    cwd: root, env: { ...process.env, SITE_VERIFY_DIR: state }, stdio: ['ignore', 'ignore', 'pipe'], windowsHide: true,
  });
  let diagnostics = '';
  p.stderr.on('data', b => { diagnostics += b.toString(); });
  p.diagnostics = () => diagnostics;
  children.push(p);
  return p;
};
const ready = async url => {
  for (let n = 0; n < 60; n++) {
    try { await fetch(url); return; } catch { await new Promise(r => setTimeout(r, 100)); }
  }
  throw Error('Local test server did not start.');
};
const fixture = { name: 'Synthetic test', location: 'Stockholm', phone: '0700000000', service: 'overlatelsebesiktning', source_page: '/overlatelsebesiktning/', form_id: 'test' };
const post = async (fields = {}, headers = {}) => {
  const response = await fetch(`${base}/enviar.php`, {
    method: 'POST', headers: { Accept: 'application/json', Origin: base, 'X-Real-IP': `127.1.0.${ip++}`, ...headers },
    body: new URLSearchParams({ ...fixture, ...fields }),
  });
  return { status: response.status, data: await response.json() };
};
const requests = async () => (await readFile(join(state, 'requests.ndjson'), 'utf8')).trim().split('\n').map(JSON.parse);

try {
  await settings();
  await writeFile(join(state, 'status'), '201');
  const site = start(port, join(root, 'router.php'));
  start(port + 1, join(root, 'tests/mock-crm.php'));
  await ready(base);
  await ready(crm);
  assert.equal((await fetch(`${base}/enviar.php`)).status, 405);
  for (const [fields, error] of [[{phone: 'x'}, 'phone'], [{name: ''}, 'name'], [{location: ''}, 'location'], [{email: 'invalid'}, 'email'], [{service: 'unknown'}, 'service']]) {
    const r = await post(fields);
    assert.equal(r.data.ok, false); assert.equal(r.data.error, error);
  }
  assert.equal((await post({}, { Origin: 'https://example.org' })).data.error, 'origin');
  assert.equal((await post({}, { Origin: 'malformed-origin' })).data.error, 'origin');
  assert.equal((await post({ website: 'bot' })).data.ok, true);
  const fallback = await post();
  assert.equal(fallback.data.ok, true); assert.equal(fallback.data.degraded, true);
  const first = JSON.parse((await readFile(join(state, 'leads.log'), 'utf8')).trim());
  assert.equal(first.source, 'web'); assert.match(first.idempotency_key, /^[a-f0-9]{32}$/);
  await post();
  const lines = (await readFile(join(state, 'leads.log'), 'utf8')).trim().split('\n').map(JSON.parse);
  assert.notEqual(lines[0].idempotency_key, lines[1].idempotency_key, 'New enquiries from one phone need different keys');

  await settings(crm);
  for (const status of [201, 200, 401, 403, 422, 429]) {
    await writeFile(join(state, 'status'), String(status));
    const r = await post({ idempotency_key: 'same-submission-key-' + status, value_tier: 'C', utm_source: 'synthetic' });
    assert.equal(r.data.ok, true);
    assert.equal(r.data.degraded, ![200, 201].includes(status));
    assert.equal(r.data.value_tier, 'A', 'Posted tier must not override server routing');
    const sent = (await requests()).at(-1);
    assert.equal(sent.method, 'POST'); assert.equal(sent.key, 'test-key-not-a-secret');
    assert.equal(sent.payload.source, 'web'); assert.equal(sent.payload.phone, '+46700000000');
    assert.equal(sent.payload.idempotency_key, 'same-submission-key-' + status);
    assert.equal(sent.payload.fields.ort, fixture.location); assert.equal(sent.payload.fields.valor, 'A');
    assert.equal(sent.payload.fields.necesita, 'Köpa eller sälja');
    assert.equal(sent.payload.utm_source, 'synthetic');
    for (const forbidden of ['pipeline', 'stage', 'owner', 'tags']) assert.equal(sent.payload[forbidden], undefined);
  }
  await writeFile(join(state, 'status'), '201');
  const fullMessage = 'Åäö – full message\nSecond line. '.repeat(25).trim();
  const duplicateFields = { idempotency_key: 'verified-duplicate-key', message: fullMessage };
  const successful = await post(duplicateFields);
  assert.equal(successful.data.degraded, false);
  const requestCount = (await requests()).length;
  assert.equal((await post(duplicateFields)).data.degraded, false);
  assert.equal((await requests()).length, requestCount, 'A confirmed duplicate must not be submitted again');
  assert.equal((await requests()).at(-1).payload.message, fullMessage, 'Keep the complete Unicode message and newlines');
  assert.equal((await post({ ...duplicateFields, message: 'Changed enquiry under the same identity' })).data.ok, false);
  for (const [index, body] of ['<html>Login page</html>', '{"contactId":"missing-submission"}', 'not-json'].entries()) {
    await writeFile(join(state, 'response'), body);
    const malformed = await post({ idempotency_key: 'malformed-receipt-' + index, message: fullMessage });
    assert.equal(malformed.data.degraded, true, 'A 201 without a valid saved receipt stays pending');
  }
  await unlink(join(state, 'response'));
  await settings('http://127.0.0.1:1');
  assert.equal((await post()).data.degraded, true, 'Unreachable CRM must preserve the lead');
  await settings();
  const plain = await fetch(`${base}/enviar.php`, { method: 'POST', redirect: 'manual', body: new URLSearchParams(fixture), headers: { Origin: base, 'X-Real-IP': '127.2.0.1' } });
  assert.equal(plain.status, 303); assert.equal(plain.headers.get('location'), '/kontakt/?enviado=1&s=overlatelsebesiktning');
  for (let i = 0; i < 5; i++) assert.equal((await post({}, {'X-Real-IP':'127.3.0.1'})).data.ok, true);
  assert.equal((await post({}, {'X-Real-IP':'127.3.0.1'})).data.error, 'rate');

  for (const path of ['/kontakt/?enviado=1', '/for-besiktningsforetag/']) {
    const html = await (await fetch(base + path)).text();
    assert.match(html, /name="robots" content="noindex/);
  }
  const serviceHtml = await (await fetch(base + '/overlatelsebesiktning/')).text();
  assert.match(serviceHtml, /"@type": "Service"/); assert.match(serviceHtml, /"broker"/);
  assert.equal((serviceHtml.match(/<form /g) || []).length, 1);
  const sitemap = await (await fetch(base + '/sitemap.xml')).text();
  assert.doesNotMatch(sitemap, /for-besiktningsforetag|<lastmod>/);
  for (const path of ['/priser/', '/om-oss/']) assert.match(sitemap, new RegExp(path));
  assert.doesNotMatch(serviceHtml, /aggregateRating|SBR|KIWA/);
  assert.doesNotMatch(site.diagnostics(), /PHP (Warning|Notice|Fatal error|Deprecated)/);

  await unlink(join(state, 'leads.log')); await mkdir(join(state, 'leads.log'));
  await rm(join(state, 'outbox'), { recursive: true, force: true });
  await writeFile(join(state, 'outbox'), 'Queue directory unavailable');
  const unavailable = await post();
  assert.equal(unavailable.data.ok, false); assert.equal(unavailable.data.error, 'storage', 'A lost lead must never return success');
  console.log('PASS: validation, verified CRM receipts, complete Unicode messages, durable outbox, duplicate-safe delivery, failures, no-JS and rate limits.');
} finally {
  for (const child of children) child.kill();
  await Promise.all(children.map(child => child.exitCode !== null ? Promise.resolve() : new Promise(r => child.once('exit', r))));
  if (dirname(state) !== parent || !basename(state).startsWith('besikt-leads-')) throw Error('Refusing cleanup outside isolated test state.');
  await rm(state, { recursive: true, force: true });
}
