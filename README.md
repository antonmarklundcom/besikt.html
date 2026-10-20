# besiktningsmannen.se

Swedish inspection enquiry site, plain PHP/static assets, intended for Hostinger PHP 8.2/Apache. No production database or Node runtime is required.

**10 October 2026:** the completed SEO/content build is integrated with `main`: 14 services, 13 guides, 35 indexable pages and 13 relevant legacy redirects. Anton handles Hostinger deployment. See the [main release and current package](docs/MAIN-RELEASE-2026-10-10.md) and the [20 completed improvements](docs/SEO-RELEASE-2026-10-10.md).

**20 October 2026:** brand is **Besiktningsmännen** (domain unchanged) and the site uses design "Vit": white header and light page heroes, green action colour, Schibsted Grotesk + Source Sans 3 (self-hosted), realistic AI photos labelled as AI, and a three-step quote form on the homepage (`partials/lead-steps.php`, `assets/js/lead-steps.js`). All 35 indexable URLs are unchanged. See [design and SEO notes](docs/DESIGN-VIT-2026-10-20.md).

Phone: **+46 73 633 38 75**. Public contact is phone/form; no company contact email is displayed. Visitor email is optional. Pixels/GTM are not connected. Enquiries save privately when the optional CRM is unconfigured; Anton will supply the Swedish CRM later.

## Source and content

Reuse `C:/dev/besikt.html`; consult `C:/operation manuals/besikt.html/README.md` and the live storage register before creating copies. New non-secret media/QA/packages go to `E:/ai work/Artifacts/besikt.html/<date>`. No clone or dependency installation was needed.

Edit `content/services.php`, `content/guias.php`, `content/legacy-guides.php`, `content/pages.php`, `content/ui.php`. Each service also needs a route and `content/lead-values.php` record. Navigation/sitemap derive from content. Business facts belong in `content/site.php`; private settings belong in ignored server-only `config.php`.

Do not invent qualifications, cases, reviews, prices, deadlines or coverage. AI illustrations are labelled. Overlapping keyword variants share useful pages. [KWP evidence](docs/kwp/2026-10-10.json) and [decision rationale](docs/KWP-SEO-PLAN.md) are reference research, not a traffic forecast.

## Verify on this PC

```powershell
$env:PATH = 'C:\dev\php;C:\Program Files\Git\usr\bin;' + $env:PATH
$env:TMPDIR = 'E:/ai work/Temp'
$env:TMP = 'E:/ai work/Temp'
$env:TEMP = 'E:/ai work/Temp'
$env:PHP_BINARY = 'C:\dev\php\php.exe'
$env:BESIKT_TEST_TEMP = 'E:/ai work/Temp'
& 'C:\Program Files\Git\usr\bin\bash.exe' verify.sh
& 'C:\Program Files\nodejs\node.exe' tests/lead-foundation.mjs
& 'C:\dev\php\php.exe' tests/lead-ledger.php
& 'C:\Program Files\nodejs\node.exe' tests/seo-release.mjs
```

Tests isolate configuration/data and use synthetic contacts. Browser QA reuses installed Chrome/existing test dependencies. On another machine, use lockfile-declared dependencies and `CHROME_BINARY` as needed; do not copy `node_modules`. Local PHP 8.3.33 is tested; production PHP 8.2/Apache acceptance is unverified.

Preview: `php -S 127.0.0.1:8080 -t . router.php`. For synthetic submissions set `SITE_VERIFY_DIR` to a new disposable directory with fake `settings.php`; only CLI/CLI-server honors it.

## Package and operate

```powershell
& 'C:\Program Files\nodejs\node.exe' deploy/build-release.mjs
```

The Windows builder creates a fresh E: package and SHA256 manifest, minifies CSS and excludes secrets/customer logs/tests/dependencies/admin scripts. Validate using `verify.sh --root '<stage>'` and `BESIKT_SITE_ROOT='<stage>'` for browser QA.

See [deployment](docs/DEPLOY.md), [lead operations/later CRM migration](docs/LEADS-RUNBOOK.md), [external facts/access](docs/OPEN-QUESTIONS.md) and [historical checks](docs/FOUNDATION-STATUS.md). CLI export/cleanup tools do not ship publicly; run them from a trusted admin checkout.
