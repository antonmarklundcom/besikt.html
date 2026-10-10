# Lead operations — 9 October 2026

## Contract and private data

Forms POST to `enviar.php`. Name, phone and municipality are validated server-side; email is optional. A known service determines its need/tier on the server. JSON success is for the enhanced form; plain forms redirect 303 to `/kontakt/?enviado=1&s=<service>`. Thank-you URLs are noindex and do not themselves prove CRM delivery.

CRM: POST `<VENDERCRM_URL>/api/v1/leads`, JSON, `X-Api-Key`. Phone is the contact identity, source is `web`. Preserve `page_url`, campaign fields and the existing structured field keys: `ort`, `formulario`, `servicio`, `necesita`, `valor`, `etiqueta` and optional legacy fields. No pipeline/stage/owner/top-level tags are sent. The submitted value tier never controls routing.

Each form gets a random 32-character key. Retry retains it; JavaScript rotates it after success. Requests without a usable key get a fresh random server key. Separate enquiries from the same phone remain separate; the same request key allows CRM replay.

`logs/leads.log` stores private newline-delimited enquiry payloads, time and outcome. `logs/rate/` has IP-hash counters (five valid submissions per ten minutes). Do not commit/copy these customer records into manuals or general artifact folders. Existing HTTP-denial rules protect logs; verify actual Apache denial on staging/production. Proxy/IP-header trust requires provider verification.

## Outcomes

| CRM status | Visitor result | Operator action |
| --- | --- | --- |
| 201 / 200 | Delivered, accepted | New lead or valid idempotency replay |
| 401 | Saved locally if writable | Check private base URL/key validity |
| 403 | Saved locally if writable | Check CRM site/key permissions |
| 422 | Saved locally if writable | Inspect the private payload/contract; fix before replay |
| 429 | Saved locally if writable | Wait for CRM rate window; replay original key |
| Unreachable / other status | Saved locally if writable | Restore connectivity/configuration, inspect saved enquiries |
| Missing CRM config / cURL | Saved locally if writable | Configuration/acceptance is required before release |
| Fallback unwritable | Error, browser fields retained | Restore space/permissions and retry; no false success |

Diagnostics record HTTP status without raw response bodies, API keys or payloads. The private lead log intentionally retains enquiry details. Review degraded records promptly. No automatic replay or retention job exists. Replay approved records through the server-side contract with the original key; duplicate fallback rows do not automatically mean duplicate CRM leads.

## Configuration and notifications

`config.php` is server-only, git-ignored and excluded from archives. This pass did not create it or read private values. Setting names are in `config.example.php`: privately validate `VENDERCRM_URL`, `VENDERCRM_API_KEY`, canonical `SITE_URL` and intended CRM routing. Use a CRM base URL, not an appended endpoint.

Operator email uses the existing `LEAD_NOTIFY_TO`/`LEAD_FROM` plus Resend or Cloudflare sender credentials when configured. A notification failure does not undo an accepted/saved lead. Visitor confirmation emails are not implemented; external senders were not tested.

GA4 is disabled with no ID. `lead_submit` means CRM accepted; `lead_saved` means fallback stored. Do not configure them as equivalent conversions without an explicit measurement decision. Tier values are optimization weights. Configure analytics and consent/disclosure before enabling tags. Real phone/WhatsApp links only appear when configured.

## Safe verification

`verify.sh` creates disposable synthetic state, never loads real `config.php` and no longer deletes real lead logs. It warns if local configuration is absent. `SITE_VERIFY_DIR` is honored only by CLI/CLI-server PHP; production web SAPIs ignore it. Its temporary `settings.php` is a fake fixture.

`node tests/lead-foundation.mjs` starts two loopback servers with synthetic contacts/fake API key, covers success/failure contracts and removes only its checked temporary directory. Use `PHP_BINARY=C:/dev/php/php.exe` and process-only `BESIKT_TEST_TEMP=E:/ai work/Temp` on this PC. No external CRM request occurs.

Before release, privately check settings/storage, authorize a clearly identified disposable acceptance enquiry and verify one CRM lead/intended notification. Validate no-JS and failure paths on staging. Do not use real customer records as tests.

## Recovery

No database or migration exists for this site. Keep private configuration and lead recovery exports outside Git/manuals. Confirm an actual protected backup/retention procedure; the inherited policy's 12-month statement needs an operational deletion process. Retain prior served files/private config for rollback; a source rollback alone cannot restore lost logs. Do not replace/delete production files from this draft.
