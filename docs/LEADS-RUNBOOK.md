# Lead operations — 10 October 2026

## Intake and current state

Phone: +46 73 633 38 75. No company contact email is displayed. Forms collect service, municipality, name, phone, optional visitor email and message. The server validates fields and derives need/tier; lead weights are not consumer prices. Swedish leading-zero phones normalize to +46; international 00 becomes +.

Enhanced forms receive JSON; native forms redirect 303 to `/kontakt/?enviado=1&s=<service>` and replace the form with confirmation. Thank-you URLs are noindex. Success means CRM acceptance or private storage, not a booking/deadline/email promise. The Swedish CRM is not connected; with no credentials, accepted enquiries save privately. No external CRM/sender/analytics configuration was created or tested.

## Private ledger and retention

`logs/leads.log` contains newline-delimited JSON: `at`, `outcome`, submission key and payload. `logs/leads.lock` coordinates atomic replacement. Retries with the same key/payload update one outcome. Conflicting content with the same key is rejected. A new key permits a separate job from the same phone; do not deduplicate jobs solely by telephone.

Valid dated records older than 12 months are removed during ledger writes. A CLI cleanup is implemented:

```bash
php deploy/purge-leads.php /private/path/to/site/logs
```

No scheduler is connected. Run cleanup periodically on quiet sites; write-time cleanup does not establish a scheduled retention process. Malformed/undated legacy records are preserved for private review. Do not run this deletion command as a casual test against real records.

`logs/rate/` stores IP-hash counters (five valid submissions/ten minutes). Apache rules deny HTTP access to private config/logs; the development router also denies them. Actual host denial, writable permissions and proxy/IP-header trust require production verification. No customer data belongs in Git, manuals or general artifacts.

## Optional existing CRM protocol

The retained adapter POSTs JSON to `<VENDERCRM_URL>/api/v1/leads`, `X-Api-Key`. Phone is contact identity, source `web`. Structured keys: `ort`, `formulario`, `servicio`, `necesita`, `valor`, `etiqueta`; origin/campaign fields are retained. No pipeline/stage/owner/top-level tags are sent. Compatibility with the future Swedish CRM is not assumed.

| Result | Visitor outcome | Operator action |
| --- | --- | --- |
| CRM 201 / 200 | Accepted; private copy attempted | Delivered or valid replay |
| 401 / 403 | Saved if ledger writable | Check private key/site permissions |
| 422 | Saved if ledger writable | Check schema before replay |
| 429 | Saved if ledger writable | Wait, replay original key |
| Unreachable / missing configuration | Saved if ledger writable | Use protected records until connected |
| CRM unavailable and ledger unwritable | Error; fields retained | Restore storage and retry |

Accepted CRM responses remain success if the redundant local copy fails. Neither destination accepting/saving yields an error. Diagnostics omit raw response bodies, credentials and customer payloads. Review degraded outcomes promptly. No automatic replay is implemented.

## Export and future CRM

Use a trusted admin checkout; these tools are excluded from the public package:

```bash
php deploy/leads-to-csv.php /private/path/to/leads.log > /protected/export/leads.csv
php deploy/leads-to-csv.php /private/path/to/leads.log --tier=A > /protected/export/tier-a.csv
```

CSV has a UTF-8 BOM, flattened fields and one row/key. Formula-leading values (`=`, `+`, `-`, `@`) receive an apostrophe for spreadsheet safety; + telephone numbers therefore export as text. Map this explicit prefix for CRM import, or use the original protected JSON with a proper adapter. Keep exports outside the public root/Git/manuals/general artifact folders.

When Anton supplies the CRM, map name, normalized phone, optional email/message, municipality, service, origin/campaign and original key. Treat `valor` as a weight. Verify a labelled synthetic enquiry and replay/import semantics before migrating records; preserve separate jobs and disclosure facts.

## Configuration and checks

Ignored, excluded server-only `config.php` uses `SITE_URL` and optional `VENDERCRM_URL` / `VENDERCRM_API_KEY`. Existing optional notification settings include `LEAD_NOTIFY_TO`, `LEAD_FROM` and Resend/Cloudflare credentials. No visitor email confirmation is implemented. Sender failure does not undo an accepted/saved enquiry. No credential values were read/created/documented.

GA4/Ads stay inactive without IDs; no Meta/GTM connection was added. Existing `lead_submit` and `lead_saved` distinguish CRM acceptance from fallback storage. Consent/disclosure and measurement decisions precede enabling tags.

PASS synthetic checks: `verify.sh`, `tests/lead-foundation.mjs`, `tests/lead-ledger.php`, `tests/seo-release.mjs`. These cover validation, origin/rate/honeypot, CRM errors, failed storage, retries, retention, CSV safety, prefill, native success and responsive navigation. They do not verify the future CRM or production Apache/PHP 8.2.

## Recovery

No database/migration exists. Protect server settings and lead exports separately from source. Preserve prior served files/private settings for production rollback while retaining enquiries; source rollback cannot restore lost records. No independent private-data backup, scheduler or restore test was implemented. Consult the owner backup/storage register before recovery operations.
