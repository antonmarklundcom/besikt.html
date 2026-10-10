# Deployment — 10 October 2026

The authorized build is integrated with `main`. **Not deployed to Hostinger; Anton will deploy it.** See the [current main package and verification](MAIN-RELEASE-2026-10-10.md). No hosting/DNS/subscription/credential/live-file changes occurred. Target: Hostinger PHP 8.2/Apache; local tests: PHP 8.3.33.

## Package and validate

```powershell
& 'C:\Program Files\nodejs\node.exe' deploy/build-release.mjs
```

Run from canonical `C:/dev/besikt.html`. A fresh dated package goes to `E:/ai work/Artifacts/besikt.html/2026-10-10/releases`, with SHA256 manifest. The current main ZIP includes 164 runtime files, minified CSS, protected empty logs and config.example.php. Secrets/customer logs/Git/tests/docs/dependencies/CLI admin tools are excluded; candidates are not overwritten/deleted.

Use the README's process-only PATH/temp settings:

```powershell
& 'C:\Program Files\Git\usr\bin\bash.exe' verify.sh --root '<packaged-root>' --port 8739
$env:BESIKT_SITE_ROOT = '<packaged-root>'
$env:BESIKT_QA_OUTPUT = 'E:/ai work/Artifacts/besikt.html/<date>/qa-release'
& 'C:\Program Files\nodejs\node.exe' tests/seo-release.mjs
```

The final main candidate passed both; extracted archive files were compared against the per-file manifest. Exact evidence/package: [main release report](MAIN-RELEASE-2026-10-10.md).

## Publish when hosting is accessible

1. Resolve the existing document root/account. Inspect current served files/settings/live URLs; reuse hosting rather than create subscriptions/domains from historical assumptions.
2. Preserve prior served files/private settings using protected provider backup/export facilities. Preserve real enquiries separately; package empty logs must never replace customer records.
3. Stage runtime files, retaining private configuration/logs. Keep ZIP/manifest/admin scripts outside public access. Verify writable logs and HTTP denial of private paths/config/dotfiles.
4. Use canonical `SITE_URL=https://besiktningsmannen.se`. Verify HTTPS/Apache/PHP behavior. Optional CRM settings can stay empty until Anton supplies the Swedish CRM; no public contact email is needed.
5. Check routes/live redirects/canonical host/query preservation/sitemap/image headers, and a labelled synthetic enquiry with JavaScript and native submission. Confirm protected storage before publishing without CRM.
6. Publish staged files after checks; verify the actually served version. Queued upload success is not proof of a live release. Submit sitemap when Search Console access is available; pixels/GTM are not prerequisites.

No alias/domain/SSL/email setup is prescribed without actual account inspection. The supplied phone is already present; do not add dummy credentials/public email.

## Administration and rollback

Run source checkout `deploy/leads-to-csv.php` and `deploy/purge-leads.php` as CLI-only tools against protected data, per [lead operations](LEADS-RUNBOOK.md). They do not ship publicly. No automatic replay/cleanup/production backup job is connected.

Rollback restores the previous served version and compatible private settings while retaining enquiries. Source/ZIP recovery is distinct from private-data recovery; no production restore test was performed.
