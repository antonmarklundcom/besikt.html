# Fas S2 — Priser och priskalkylator. Sonnet. Lane 2.

Läs `prompts/_sonnet-common.md` och följ den.

Owns: `content/precios.php`, `content/tools.php`, `priser/**`, `assets/js/tools/**`,
`content/lead-values.php` (bara `tools.priskalkylator`), posten `'/priser/'` i `content/pages.php`,
`docs/log/S2.md`.

Uppgift (sökordskluster 2, 1 900 sök/mån: "besiktning hus pris", "vad kostar besiktning av hus"):
- `/priser/`: H1 "Pris på besiktning av hus", prislista med de preliminära "från"-priserna i
  `plan.md` §3.3 (inkl. moms, privatperson), vad som påverkar priset, resekostnad utanför länet,
  FAQ 4–6 (vem betalar, ingår moms, ROT gäller inte besiktning, betalning). Sätt `stub => false`.
  Formatera belopp med `fmt_money()` (`9 900 kr`). Märk varje pris `'preliminary' => true` och lista
  dem i `docs/facts-to-verify.md`. Visa texten "Priserna är riktpriser – fast pris i offerten."
- Priskalkylator `priskalkylator` på `/priser/kalkylator/` (template `templates/tool.php`,
  `content/tools.php`, JS i `assets/js/tools/priskalkylator.js` via `window.Market`): tjänst
  (överlåtelse, bostadsrätt, badrum, fukt, status, slutbesiktning) × boyta-intervall × tillval
  (fuktmätning, extra badrum, utanför länet = "enligt offert"). Visar alltid ett intervall, aldrig
  ett exakt pris. "Använd resultatet i offertförfrågan" fyller `tool_result`.
- Bädda in en kort version eller tydlig länk till kalkylatorn högst upp på `/priser/`.

Exit: `/priser/` och `/priser/kalkylator/` renderar, kalkylatorn fungerar utan konsolfel (spara ett
interaktionsskript i `tests/`), verify grön, PR mergad.
