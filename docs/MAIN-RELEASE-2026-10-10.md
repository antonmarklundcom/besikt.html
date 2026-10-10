# Main release — 10 October 2026

The completed Swedish SEO/content/lead site is merged and pushed to GitHub `main`. Runtime revision: [`5628d3c`](https://github.com/antonmarklundcom/besikt.html/commit/5628d3cc68296a6e570723ba1c5438e1e833ff15). A normal push advanced main from `8fee124`; both histories are preserved. GitHub remote HEAD was checked after pushing. **Hostinger is not deployed; Anton will deploy it.**

## Integration decisions

- Preserved the complete tested lead-generation build, all 14 optimized illustrations, 14 services and seven new guides.
- Retained six guide URLs from previous main: `/guider/mogel-i-hus/`, `/guider/fuktskada-badrum/`, `/guider/fuktskada-parkett/`, `/guider/fuktskada-kallare/`, `/guider/fuktmatning-betong/` and `/guider/tvist-med-hantverkare/`. Reworked them into the current guide/form templates with primary references and scoped advice.
- Total: **13 guides, 35 indexable pages, 13 query-preserving redirects**. The unconfirmed numeric price calculator permanently redirects to `/priser/`; its obsolete scripts/tests are removed.
- Preserved previous main's dotfile protection, allowing `.well-known` for certificate validation. Restored the owner-confirmed SBR/KIWA partner statement with assignment-specific certificate checks, without inventing a certificate number or KA qualification.
- No conflict markers or unresolved index entries remain. Existing untracked owner research `docs/live-site-comparison.md` was preserved and excluded.
- Updated current known issues and operational docs; previous phase logs and pre-merge release evidence remain historical. No PR or force-push was used.

## Verified package

Archive: `E:/ai work/Artifacts/besikt.html/2026-10-10/releases/besiktningsmannen-2026-10-10T14-01-40-468Z.zip`

Manifest: same path plus `.manifest.json`. Runtime revision: `5628d3cc68296a6e570723ba1c5438e1e833ff15`. **164 files, 2,613,764 bytes.**

SHA256: `c211a67d1c988b05f3bb8dd7bd311b8f5b2241cc035d80cfdcb9cbd54df7c1f4`.

The ZIP includes images, PHP routes, minified CSS, protected empty logs and `config.example.php`. It excludes private configuration, real enquiries, Git, docs/tests/dependencies and CLI admin tools. Earlier candidates remain preserved; use this newer main candidate. Documentation-only commits after the runtime revision do not change packaged files.

PASS:

- Source and final package `verify.sh`: 58 URL/status checks, 35 unique title/description pages, PHP parsing/clean rendering, claim guard, content integrity, synthetic fallback/native form and service routing.
- Final package `tests/seo-release.mjs`: 35-page crawl, 54 internal paths, metadata/canonical/schema/sitemap, 13 query-preserving redirects, five widths (320/390/768/1024/1440), no horizontal overflow, mobile navigation/focus, service prefill and native success. No-JS navigation at 320/390/1280.
- Integrated source `tests/lead-foundation.mjs` and `tests/lead-ledger.php`: synthetic validation, CRM success/error/unavailability and storage failure; retry/outcome deduplication, conflict rejection, retention and spreadsheet-safe export.
- Actual ZIP extraction and all 164 per-file sizes/SHA256 hashes; CSS minification and Git whitespace/conflict checks.

Browser evidence: `E:/ai work/Artifacts/besikt.html/2026-10-10/qa-main/qa-result.json`. Local PHP 8.3.33/installed Chrome; production PHP 8.2/Apache acceptance remains unverified. The workflow is PR-triggered; no remote CI run is claimed.

## Anton's deployment

Use [deployment procedure](DEPLOY.md). Preserve existing private configuration and customer records; do not replace production logs with the package's empty logs. Verify HTTPS, Apache private-path denial, writable protected storage, redirects and one labelled synthetic enquiry after deployment. The supplied phone is **+46 73 633 38 75**; there is no public contact email. CRM may remain unconfigured while protected enquiries are collected for Anton's later Swedish CRM.

GitHub contains committed source and optimized images. Original media, private configuration and customer recovery are separate from Git recovery. No production files, DNS, hosting configuration or subscriptions were changed.
