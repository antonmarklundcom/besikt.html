# Completed SEO and lead release — 10 October 2026

**Historical pre-merge report:** the [main integration report](MAIN-RELEASE-2026-10-10.md) supersedes the branch/publication status, page counts and package below. It preserves all 20 improvements and adds six retained guide URLs. Use the newer main ZIP for deployment.

Anton authorized finishing the entire site while asleep, including imagery with an 80-credit cap. Earlier content approval gates are superseded. Runtime source: `ee94679` on `codex/lead-gen-pass`; later commits document the release. **Finished/tested locally, not deployed.** Hostinger MCP reads did not return hosting-account details; production acceptance remains unverified.

## Top 20 improvements completed

1. **Focused homepage:** clear inspection positioning, eight priority service choices, short quote form and useful guide links.
2. **House inspection:** buyer/seller preparation, scope, report/risk observations and villa/radhus/fritidshus intent on one relevant page.
3. **Apartment/bostadsrätt page:** purchase/renovation intent, documents and boundaries between the flat and association building.
4. **BRF board hub:** paths to condition surveys, maintenance, renovation/guarantee inspections and project support.
5. **Maintenance-plan page:** inventory, condition, measures, timing, cost assumptions, handover and updates.
6. **Bathroom content:** documents, accessible checks, defects/limits and links to moisture investigation; no unsupported approval guarantee.
7. **Moisture investigation:** cause/extent, documentation/access and when targeted measurement is insufficient.
8. **Moisture measurement:** distinct page covering methods, limits and escalation, excluding equipment-shopping intent.
9. **Roof inspections:** condition/completed-work scope, safe access, reports and boundaries.
10. **Condition/contract inspections:** specific commissioning situations, required documents, scope and related services.
11. **Final inspections:** preparation, recorded defects and follow-up, plus a matching practical guide.
12. **Guarantee inspections:** commissioning/timing/documentation without invented universal warranty deadlines.
13. **Control officer (KA):** role, documents and appointment scope, Boverket reference and no invented certifications.
14. **Construction project management:** brief, quote comparison, coordination, progress and handover for owners/BRFs.
15. **Seven practical guides and template:** house preparation, maintenance, moisture signs, final inspection, bathroom records, complaints and comparing quotes; consistent 18-column maintenance CSV with blank planning examples.
16. **Price/quote copy:** factors, inclusions, VAT/travel/testing questions and comparing scopes, without invented numerical prices/calculator.
17. **Phone/form journey:** +46 73 633 38 75 everywhere, no public company email, service prefill, early contact form, mobile Ring/Begär offert, keyboard navigation and native success confirmation.
18. **On-page SEO:** unique metadata, one H1, canonicals, breadcrumbs and relevant Organization/Service/Article/HowTo data. A permanent verification guard rejects unsupported Reco branding/aggregate rating schema without matching record/recovery words. No rich-result promise.
19. **Internal links and redirects:** content-derived navigation/sitemap, related links and 12 query-preserving relevant legacy 301s. No city/service doorway grid or unrelated redirect for unknown OVK/energy scope.
20. **Performance and protected leads:** responsive AVIF/WebP, dimensions/lazy loading, local fonts, minified CSS, phone/origin/rate validation, atomic private ledger, retry deduplication, retention cleanup and spreadsheet-safe export for the later CRM.

## Evidence

**14 services, seven guides, 29 indexable pages.** KWP [evidence](kwp/2026-10-10.json): 1,012 phrases, 941 reported distinct searches, 909 printed numeric rows; the export omits 32 searches. Sweden-wide volumes include irrelevant categories and do not predict traffic/rankings/leads.

Higgsfield MCP: Nano Banana 2.1, high thinking, 2k, 16:9. Six new images cost 12 credits; eight earlier images cost 16: **28/80 total**, 52 unused. Originals/manifest are on E:; [versioned provenance](IMAGERY-2026-10-10.json). Images are labelled illustrations, not customer cases.

PASS final package checks:

- `verify.sh --root ...`: PHP parsing, market contract, 51 URL/status checks, 29 unique metadata pages, clean rendering, synthetic fallback/native POST, routing and content references.
- `tests/seo-release.mjs`: 29-page crawl, 48 internal resource/route paths, metadata/canonical/schema/sitemap, 12 redirects preserving query strings, five widths (320/390/768/1024/1440), no overflow, early enquiry forms, mobile menu/focus, prefill and native success. No-JS navigation checked at 320/390/1280.
- `tests/lead-foundation.mjs`: synthetic validation/origin/honeypot/rate, CRM 200/201/401/403/422/429, unavailable CRM/storage, normalized phone, source/key/routing and separate enquiries; run after backend changes.
- `tests/lead-ledger.php`: synthetic retention, retry/outcome deduplication, conflicts, separate jobs and formula-safe CSV; run after backend changes.
- Actual ZIP extraction/per-file SHA256 comparison, plus CSS minification/Git whitespace. CSS about 37KB, 38% smaller. Browser screenshots visually reviewed.

Final archive: `E:/ai work/Artifacts/besikt.html/2026-10-10/releases/besiktningsmannen-2026-10-10T06-22-49-058Z.zip`. Manifest: same path plus `.manifest.json`. **156 files, 2,602,443 bytes.** Browser evidence/screenshots: `E:/ai work/Artifacts/besikt.html/2026-10-10/qa-release/`. Older candidates are retained; use this tested candidate.

Archive SHA256: `6f1d6e4b9015b25c25c0300017c7ceb850337ac972b98a95498f38d7cb4e9585`.

Tests used PHP 8.3.33/installed Chrome. Production PHP 8.2/Apache, public-host performance and actual sender/CRM behavior remain unverified. No PR/push/merge/deployment/trackers/production credentials/data migration/backup job were created. Future Swedish CRM is unconnected; private storage/export are ready.

## External inputs

Hosting/live URL evidence, actual provider coverage/qualifications, prices/reviews/cases, protected production storage/periodic cleanup and the future CRM's schema/credentials require access or facts. See [external inputs](OPEN-QUESTIONS.md), [publication](DEPLOY.md) and [lead operations](LEADS-RUNBOOK.md). These are not another approval round.

Owner manual: `C:/operation manuals/besikt.html/README.md`. Canonical checkout remains C: per the live map; new media/QA/packages are E:. No OneDrive outputs, new checkout or dependency installation.
