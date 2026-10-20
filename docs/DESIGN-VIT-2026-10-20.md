# Design "Vit" and next SEO steps — 20 October 2026

Anton chose design A ("Besiktningsmännen Vit") from `designs/2026-10-19/`. It is now built into the real PHP site.

## What changed

- **Brand:** `site.name` is "Besiktningsmännen". The title suffix, logo, footer, schema, about page, privacy policy and terms use it. The domain stays besiktningsmannen.se.
- **Pitch:** a request goes to up to three inspectors, and the visitor compares the quotes. The privacy policy, terms and form note say the same. See `docs/OPEN-QUESTIONS.md` items 9–11 for what must be true before launch.
- **Theme:** the token block in `assets/css/site.css` has a new palette: ink `#0F2233`, green action colour `#12814D` with white text, brand blue `#1C4E86`. A section headed "Vit (2026-10-20)" at the end of the file makes the header, heroes and mobile menu light. The footer stays dark.
- **Fonts:** Schibsted Grotesk (display) and Source Sans 3 (body) are self-hosted and subset with `deploy/subset-fonts.sh`. Bricolage and Onest are removed.
- **Homepage:** `index.php` has these sections:
  - A three-step form in the hero (`partials/lead-steps.php` and `assets/js/lead-steps.js`). It posts to `enviar.php` with the same fields as before, plus `property_type` and a new `timing` field. Without JavaScript it works as one long form.
  - A strip with three promises.
  - Eight photo cards linking to the service pages, followed by links to the other six services.
  - Process, the "Fem saker att jämföra" checklist, area and prices, guides, FAQ and the CTA band.
- **Images:** the realistic Higgsfield (Nano Banana 2.1) photos replace these service slots: villa, apartment, bathroom, moisture, measurement, roof, attic, brf and home. The new `inspector` slot is the homepage hero, and `og-default.png` uses the same photo. The images are labelled "AI-genererad bild" or "Illustrationsbild, skapad med AI". Sources are listed in `designs/2026-10-19/README.md`.
- **Schema:** the homepage now emits a `WebSite` block with `name` (the brand) and `alternateName` (the domain).
- **Tests:**
  - `verify.sh` now counts title length in characters instead of bytes. Before, å, ä, ö and the dash counted double.
  - `tests/seo-release.mjs` steps through the homepage form before it checks the focus behaviour.

## Checks run

- `verify.sh` passes, both on the repository and on the release stage built by `deploy/build-release.mjs`. Only the Windows `tar.exe` zip step cannot run on Linux.
- `tests/seo-release.mjs` passes: 35 indexable pages, 56 internal paths, metadata, schema, sitemap, redirects, 5 viewport widths, the mobile menu, prefill and the no-JS form.
- `tests/lead-foundation.mjs` and `tests/lead-ledger.php` pass.
- The same 35 sitemap URLs exist before and after the change. Canonicals, H1s and internal links are unchanged, except for:
  - the homepage H1 and title;
  - the "Om oss" H1;
  - the brand in every title suffix.

## SEO: next steps (ranked)

1. **Retitle the pages for the biggest search terms.** Titles have about 40 characters before the " | Besiktningsmännen" suffix (60 in total).
   - `/overlatelsebesiktning/`: also target "husbesiktning" (590) and "besiktning hus" (720), e.g. "Husbesiktning & överlåtelsebesiktning".
   - `/lagenhetsbesiktning/`: add "bostadsrätt" (480 + 210).
   - `/fuktutredning/`: add "fuktskada" (480).
   - `/byggprojektledning/`: add "byggkonsult" (590) and "byggledare" (210).
2. **Set up Search Console.** It is the biggest data source still missing.
3. **Put real prices on `/priser/`** once they are approved. About 1,800 searches a month are price questions.
4. **Write a trust page.** Explain how inspectors are chosen (certification, insurance), add the org. number, and name a reviewer on each guide. This targets "besiktningsman sbr" (210) and "certifierad / oberoende besiktningsman" (90 + 110). Use only verified facts.
5. **Add municipality coverage.** List the municipalities in `areaServed` and in a visible area section. Build local pages only for municipalities where the Stockholm KWP run or Search Console shows demand.
6. **Add `lastmod` to the sitemap** for services and guides (`sitemap.php`), using `lastReviewed`.
7. **Article schema:** use each guide's own image and add `datePublished`.

## Keyword Planner data we have and what is missing

We have `docs/kwp/2026-10-10.json`:

- 1,012 phrases for **all of Sweden**, Swedish language.
- Only average monthly searches and top-of-page bids.

We are missing:

- **Stockholms län** volumes.
- Competition data.
- 3-month and year-on-year trends.
- The monthly breakdown (seasonality).
- Searches about comparing quotes and municipality-level searches.

The seed list for the next run is in `docs/kwp/SEEDS-2026-10-20.txt`.
