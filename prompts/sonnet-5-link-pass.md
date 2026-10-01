# Fas S5 — Länkpassning och slutrapport. Sonnet. Körs sist, efter S1–S4.

Läs `prompts/_sonnet-common.md` och följ den. Läs också `docs/log/S1.md` … `S4.md`.

Owns: alla tvärgående länkar — `guides`, `related`, `toolLinks` i `content/services.php`,
`nextLink` i `content/lead-values.php`, `content/nav.php`, `KNOWN-ISSUES.md`, `docs/log/S5.md`.

Uppgift:
- Interna länkar enligt `docs/SEO-SOKORDSPLAN.md` §3: varje tjänst länkar till sina guider och till
  `/priser/kalkylator/` där det passar; varje guide har `relatedService`; `nextLink` på tjänster
  som har en guide eller kalkylatorn. Naturliga ankartexter.
- Lägg till ett strikt test i `verify.sh`? NEJ (låst) — kontrollera i stället själv att varje tjänst
  har ≥ 1 guide eller kalkylatorlänk och skriv resultatet i loggen.
- `sitemap.xml` innehåller alla sidor utom stubbar; inga stubbar kvar.
- `./deploy/make-zip.sh` + `./verify.sh --root dist/<…>` gröna.
- `KNOWN-ISSUES.md` med öppna punkter. Slutrapport i loggen: alla PR:er, vad som återstår för
  Anton (se `docs/DEPLOY.md` och `docs/facts-to-verify.md`).

Exit: verify grön på repo och zip, PR mergad, slutrapport skriven.
