# Kända problem och öppna punkter

Se även `docs/facts-to-verify.md` (allt som måste bekräftas före lansering).

## Innehåll
- Alla priser och kalkylatorns faktorer är preliminära riktvärden (`content/precios.php`, `content/tools.php`).
- "Certifierad besiktningsman (SBR/KIWA)" förekommer på startsidan, i metabeskrivningar och på /om-oss/ och kräver att utförarens certifikat bekräftas.
- Lag- och regelpåståenden i tjänstetexter (BRF, underhållsplan, garanti) och guider (RBK, konsumenttjänstlagen, ARN) är försiktigt formulerade men inte juridiskt granskade.
- Telefonnummer, org.nr och certifikatnummer saknas medvetet (`null` i `content/site.php`).
- Inga bilder (fas I1 startas bara när Anton skriver "Generate image").

## Tekniskt
- Cloudflare Email Sending är i beta: fältnamnen ska verifieras med en testlead (`docs/DEPLOY.md` §4).
- Kalkylatorsidan visar "uppdaterade 2026-09-04" från `market_last_reviewed()` i `lib/market/se.php` (låst fil, mallens datum).
- `.site-header__actions` är en pixel bred vid 390 px (ärvt från mallen, klipps).
- `tests/priskalkylator.mjs` körs inte i CI; kör den lokalt mot `php -S`.
- CI-jobbet `screenshots` är en artefakt för PR-förhandsvisning och blockerar inte merge.
