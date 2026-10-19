# Designskisser 2026-10-19 – Besiktningsmännen

Två fristående skisser för en ny startsida med budskapet "få offert från upp till 3 besiktningsmän".
Samma bilder i båda. Skisserna ingår inte i release-paketet (mappen saknar `index.php`).

- `design-a-vit.html` – vit bakgrund, blå logga, grön CTA. Rubriker Schibsted Grotesk, brödtext Source Sans 3.
- `design-b-salvia.html` – ljus salviagrön bas, mörkgrön logga, gul/orange CTA. Rubriker Archivo, brödtext Public Sans.

Gemensamt: formulär i 3 steg ovanför vecket (tjänst → ort/bostad/tid → kontakt), fältnamn som i
`partials/lead-form.php` (`service`, `location`, `name`, `phone`, `email`, `message`, honeypot `website`).
Skisserna skickar inget (submit stoppas i JS). Fälten `property` och `when` finns inte i `enviar.php` än.

Påståenden att bekräfta innan lansering: "kostnadsfritt", "utan förpliktelse", "upp till 3", att förfrågan delas med högst 3.

## Bilder (Higgsfield, Nano Banana 2.1, thinking high, 2k) – AI-genererade och märkta som sådana

| Fil | Används till | Job-id |
|---|---|---|
| hero-person.webp | Hjälte (besiktningsman vid villa) | c07f6ceb-e163-40bd-ba26-922dbf967b21 |
| hero.webp | Villa med protokoll och fuktmätare | add84af0-9439-4bff-8abe-a524d8cc5f0d |
| villa.webp | Överlåtelsebesiktning | d32ab1b6-1951-4079-b170-1568d1095ba2 |
| lagenhet.webp | Lägenhetsbesiktning | 02db1e1c-45ab-4715-8d6f-742358e43bbb |
| badrum-person.webp | Badrumsbesiktning | 99f2e64c-c225-4403-a50e-c5396ac626c3 |
| badrum.webp | Fuktmätning | 5705fca9-43ce-496b-ae18-0647916c85b4 |
| fukt.webp | Fuktutredning (krypgrund) | b7d26f5d-0ef1-402a-993b-91b63e4d418c |
| tak.webp | Takbesiktning | 1b3c816f-2c2d-4fb8-9e85-dbf6550b8c56 |
| vind.webp | Statusbesiktning (vind) | 42253139-f204-4235-ad1a-e14e2ee5a84a |
| nybygge.webp | Entreprenad, slutbesiktning & BRF | b82ab401-6aef-4b3a-956f-7a906b051241 |

Originalen (PNG, 2k) ligger kvar hos Higgsfield under respektive job-id.
