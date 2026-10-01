# Fas S1 — Tjänstesidor. Sonnet. Lane 2.

Läs `prompts/_sonnet-common.md` och följ den.

Owns: `content/services.php` (texterna i alla 9 poster), `content/lead-values.php` (bara
`services`-posternas `nextStep`/`whatsappText`), tjänsternas route-kataloger, `docs/log/S1.md`.

Uppgift: skriv full text för de 9 tjänsterna enligt sökordsplanen §2 (kluster 1, 4–7, 9, 12, 13, 15,
16, 17-tak som avsnitt i statusbesiktning, 19). Per tjänst:
- behåll `path`, `keyword`, `seoTitle`, `hero.h1` om de inte bryter mot sökordsplanen;
- `sections`: 3–5 H2-avsnitt (≈ 500–900 ord totalt) som besvarar sökintentionen och täcker
  varianterna; `benefits` 3 st; `faq` 4–6 frågor (varianter som frågor, t.ex. "Kan man köpa hus utan
  besiktning?", "Vad kostar en överlåtelsebesiktning?" → hänvisa till /priser/ utan belopp);
- `includes`/`excludes`/`weNeed` korrekta för tjänsten; `related` 2–3 slugs.
- Underhållsplan BRF: täck krav (vad bostadsrättslagen och föreningens stadgar säger – skriv
  försiktigt och lista varje lagpåstående i `docs/facts-to-verify.md`), innehåll, mall, exempel,
  kostnad (utan belopp).
- Lämna `guides`, `toolLinks` tomma — länkpassningen (S5) fyller dem.

Exit: 9 tjänstesidor med full text, FAQ JSON-LD på varje, verify grön, PR mergad.
