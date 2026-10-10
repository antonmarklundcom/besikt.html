import assert from 'node:assert/strict';
import { spawn, execFileSync } from 'node:child_process';
import { mkdtemp, mkdir, writeFile, readFile, rm } from 'node:fs/promises';
import { resolve, join, dirname } from 'node:path';
import { tmpdir } from 'node:os';
import { fileURLToPath } from 'node:url';
import { request } from 'node:http';
import { chromium } from 'playwright';

const root = resolve(process.env.BESIKT_SITE_ROOT || join(dirname(fileURLToPath(import.meta.url)), '..'));
const php = process.env.PHP_BINARY || 'php';
const state = await mkdtemp(join(process.env.BESIKT_TEST_TEMP || tmpdir(), 'besikt-release-'));
const port = 42000 + Math.floor(Math.random() * 10000);
const base = `http://127.0.0.1:${port}`;
const env = { ...process.env, SITE_VERIFY_DIR: state };
await writeFile(join(state, 'settings.php'), `<?php return ['SITE_URL'=>'${base}'];`);
const server = spawn(php, ['-S', `127.0.0.1:${port}`, '-t', root, join(root, 'router.php')], { cwd: root, env, windowsHide: true, stdio: ['ignore', 'ignore', 'pipe'] });
let diagnostics = '';
server.stderr.on('data', b => diagnostics += b);
let browser;
let browserServer;
const get = path => new Promise((ok, no) => {
  request(base + path, { headers: { Connection: 'close' } }, r => {
    let body = ''; r.on('data', b => body += b); r.on('end', () => ok({status:r.statusCode, body, headers:r.headers})); r.on('error', no);
  }).on('error', no).end();
});
try {
  let ready = false;
  for (let i=0;i<60;i++) { try { await get('/'); ready=true; break; } catch { await new Promise(r=>setTimeout(r,100)); } }
  assert.ok(ready, diagnostics);
  const model = JSON.parse(execFileSync(php, ['-r', 'require $argv[1]."/lib/bootstrap.php"; echo json_encode(["pages"=>content("pages"),"services"=>services(),"guides"=>content("guias"),"redirects"=>content("redirects")]);', root], { env, encoding:'utf8' }));
  const paths = [...Object.entries(model.pages).filter(([p,m])=>p!='/404'&&!m.noindex).map(([p])=>p), ...Object.values(model.services).map(m=>m.path), ...Object.values(model.guides).map(m=>m.path)];
  browserServer = await chromium.launchServer({ executablePath: process.env.CHROME_BINARY || (process.platform === 'win32' ? 'C:/Program Files/Google/Chrome/Application/chrome.exe' : chromium.executablePath()), headless:true });
  browser = await chromium.connect(browserServer.wsEndpoint());
  const page = await browser.newPage({viewport:{width:1440,height:1000}});
  const errors = [];
  page.on('pageerror', e=>errors.push(e.message));
  const links = new Set(); const titles = new Set(); const descriptions = new Set();
  for (const path of paths) {
    const response = await page.goto(base+path); assert.equal(response.status(),200,path);
    const data = await page.evaluate(() => ({
      title:document.title, description:document.querySelector('meta[name="description"]')?.content,
      canonical:document.querySelector('link[rel="canonical"]')?.href,
      h1:document.querySelectorAll('h1').length, lang:document.documentElement.lang,
      links:Array.from(document.querySelectorAll('a[href],img[src],script[src],link[rel="stylesheet"]')).map(a=>a.href||a.src),
      jsonld:Array.from(document.querySelectorAll('script[type="application/ld+json"]')).map(s=>JSON.parse(s.textContent)),
      emailLinks:document.querySelectorAll('a[href^="mailto:"]').length,
      phoneLinks:document.querySelectorAll('a[href="tel:+46736333875"]').length,
      quote:document.querySelector('.site-header__actions .btn--primary')?.getAttribute('href'),
      ids:Array.from(document.querySelectorAll('[id]')).map(a=>a.id)
    }));
    assert.equal(data.h1,1,path); assert.match(data.lang,/^sv/);
    assert.ok(data.title.length<=60, `${path}: long title`);
    assert.ok(data.description.length>=120&&data.description.length<=155,`${path}: description ${data.description.length}`);
    assert.ok(!titles.has(data.title),path); titles.add(data.title);
    assert.ok(!descriptions.has(data.description),path); descriptions.add(data.description);
    assert.equal(data.canonical,base+path,path); assert.equal(data.emailLinks,0,path); assert.ok(data.phoneLinks>0,path);
    assert.ok(data.jsonld.some(x=>Array.isArray(x['@type']) ? x['@type'].includes('Organization') : x['@type']==='Organization'),path);
    assert.equal(new Set(data.ids).size,data.ids.length,`${path}: duplicate IDs`);
    if(data.quote?.startsWith('#'))assert.ok(data.ids.includes(data.quote.slice(1)),`${path}: broken quote target`);
    for (const href of data.links) if(href?.startsWith(base)) links.add(new URL(href).pathname);
  }
  for (const path of links) { const r=await get(path); assert.ok([200,301].includes(r.status),`${path}: ${r.status}`); }
  for (const [old,target] of Object.entries(model.redirects)) {
    const r=await get(old+'?utm_source=synthetic'); assert.equal(r.status,301);assert.equal(r.headers.location,target+'?utm_source=synthetic');
  }
  const sitemap=await get('/sitemap.xml');for(const path of paths)assert.ok(sitemap.body.includes(base+path),`sitemap missing ${path}`);
  assert.ok(!sitemap.body.includes('/for-besiktningsforetag/'));
  const csv=(await readFile(join(root,'assets/downloads/underhallsplan-brf-mall.csv'),'utf8')).replace(/^\uFEFF/,'').trimEnd().split(/\r?\n/);
  assert.ok(csv.every(row=>row.split(';').length===18),'maintenance CSV columns');
  const out=process.env.BESIKT_QA_OUTPUT;
  if(out) await mkdir(out,{recursive:true});
  const layouts=[];
  for(const width of [320,390,768,1024,1440]) {
    await page.setViewportSize({width,height:900});
    for(const path of ['/','/overlatelsebesiktning/','/lagenhetsbesiktning/','/brf/underhallsplan/','/guider/underhallsplan-checklista/','/priser/','/kontakt/']) {
      await page.goto(base+path);
      const layout=await page.evaluate(()=>({overflow:document.documentElement.scrollWidth>innerWidth,formTop:document.querySelector('.lead-form')?.getBoundingClientRect().top}));
      assert.equal(layout.overflow,false,`${width}px ${path}: overflow`); layouts.push({width,path,...layout});
      if(width===390&&['/','/overlatelsebesiktning/','/kontakt/'].includes(path))assert.ok(layout.formTop<650,`${path}: form too low ${layout.formTop}`);
      if(out&&((width===390&&['/','/overlatelsebesiktning/','/guider/underhallsplan-checklista/'].includes(path))||(width===1440&&path==='/')))await page.screenshot({path:join(out,`${width}-${path==='/'?'home':path.replaceAll('/','-')}.png`),fullPage:false});
    }
  }
  await page.setViewportSize({width:390,height:900});await page.goto(base+'/');
  await page.locator('[data-nav-toggle]').click();assert.equal(await page.locator('[data-nav-toggle]').getAttribute('aria-expanded'),'true');
  await page.locator('.nav-drawer-cta .btn--primary').click();assert.equal(await page.locator('[data-nav-toggle]').getAttribute('aria-expanded'),'false');
  await page.locator('[name="name"]').focus();assert.ok(await page.locator('body').evaluate(b=>b.classList.contains('form-focus')));
  await page.goto(base+'/kontakt/?tjanst=takbesiktning');assert.equal(await page.locator('input[name="service"]').inputValue(),'takbesiktning');
  const nojs=await browser.newContext({javaScriptEnabled:false});const p=await nojs.newPage();await p.goto(base+'/kontakt/');
  await p.locator('[name="name"]').fill('Synthetic browser QA');await p.locator('[name="phone"]').fill('0700000011');await p.locator('[name="location"]').fill('Stockholm');await p.locator('select[name="service"]').selectOption('takbesiktning');
  await Promise.all([p.waitForURL('**/kontakt/?enviado=1&s=takbesiktning'),p.locator('.lead-form button[type="submit"]').click()]);
  assert.ok((await p.locator('meta[name="robots"]').getAttribute('content')).includes('noindex'));await nojs.close();
  assert.equal(errors.length,0,errors.join('\n'));
  assert.ok(!/PHP (Warning|Notice|Fatal error|Deprecated)/.test(diagnostics),diagnostics);
  const result={date:'2026-10-10',pages:paths.length,internalPaths:links.size,redirects:Object.keys(model.redirects).length,viewports:[320,390,768,1024,1440],layouts,status:'PASS'};
  if(out)await writeFile(join(out,'qa-result.json'),JSON.stringify(result,null,2));
  console.log(`PASS: ${paths.length} indexable pages, ${links.size} internal paths, metadata/schema/sitemap, redirects, 5 viewport widths, mobile menu, prefill and no-JS form.`);
} finally {
  if(browserServer)await browserServer.kill();
  server.kill();await new Promise(r=>setTimeout(r,200));
  assert.ok(dirname(state)===resolve(process.env.BESIKT_TEST_TEMP||tmpdir())&&state.includes('besikt-release-'));
  await rm(state,{recursive:true,force:true});
}
