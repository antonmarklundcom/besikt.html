# Gemensamma regler för alla Sonnet-faser (S1–S5)

- Läs först: `plan.md` §1 (beslut, diskuteras inte om), §4 (autonomiprotokoll), §6 (fasen), §9 (logg),
  `docs/SEO-SOKORDSPLAN.md` (§1 sidtabell, §2 kluster → huvudord + varianter, §3 interna länkar) och
  `docs/log/T1.md`. Läs inte resten.
- Sökorden: använd klustrets huvudord i title/H1 där det redan står, varianterna naturligt i
  H2/brödtext/FAQ. Ingen keyword stuffing. Sökvolymer och CPC finns i `docs/sokord-fastighet.csv`.
- Svenska, du-tilltal, sakligt, inga superlativer. **Inga påhittade fakta:** inga antal uppdrag, år i
  branschen, recensioner, certifikatnummer, adress eller telefonnummer. Utföraren (vännens bolag)
  namnges aldrig. Juridiska belopp/lagkrav som du är osäker på → skriv försiktigt och lista dem i
  `docs/facts-to-verify.md`.
- Varje sida har en CTA till offertformuläret. Rör inte formulärets fält.
- Låsta filer (ändra aldrig): `lib/**`, `partials/**`, `templates/**`, `enviar.php`, `router.php`,
  `.htaccess`, `verify.sh`, `deploy/**`, `index.php`, CSS-tokenblocket. Ny CSS bara i ett eget
  `/* == <fas> == */`-block sist i `assets/css/site.css`, därefter `node deploy/minify-css.mjs`.
- Innehållsfilernas nyckelformer är ett kontrakt (se filhuvudet): fyll i, lägg till valfria nycklar,
  byt aldrig namn och ta aldrig bort en nyckel.
- Titlar: `<seoTitle> | Besiktningsmannen` ≤ 60 **bytes** (å/ä/ö = 2, – = 3); meta 120–155 tecken,
  unik på hela sajten. `./verify.sh` kontrollerar.
- Branch `phase/<id>` från senaste `main`. WIP-commit minst var 30:e minut. PR mot `main`, merge när CI
  är grön (squash). En PR per fas. Skärmdumpar committas aldrig (CI-artefakt).
- Samma sorts enheter (≥ 4 sidor/guider): bygg en exempelenhet själv, låt sedan parallella
  Sonnet-subagenter skriva resten mot den, en verify, en PR. **Aldrig Fable-modeller.**
- Fastnar du på något som bara Anton kan avgöra: skriv frågan i `docs/decisions-needed.md`, fortsätt
  med resten. Vänta aldrig i sessionen.
- Klar = PR mergad grön + `docs/log/<id>.md` (≤ 12 rader Byggt, ≤ 8 Beslut, ≤ 8 Kända problem,
  1 rad Verifiering) + en rad i `plan.md` §9.
