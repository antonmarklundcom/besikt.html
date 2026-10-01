# Fas S3 — Guider. Sonnet. Lane 2.

Läs `prompts/_sonnet-common.md` och följ den.

Owns: `content/guias.php`, `guider/<slug>/**`, `docs/log/S3.md`. (Hubben `guider/index.php` finns.)

Uppgift: 6 guider enligt sökordsplanen §1 och §2 (kluster 3, 8, 11, 14, 18, 20), formen i
`content/guias.php`-huvudet (`steps` blir HowTo JSON-LD, `faq` blir FAQPage):
| slug | huvudord | relatedService |
| mogel-i-hus | mögel i hus symptom | fuktutredning |
| fuktskada-badrum | fuktskada badrum | badrumsbesiktning |
| fuktskada-parkett | fuktskada parkett | fuktutredning |
| fuktskada-kallare | fuktskada källare | fuktutredning |
| fuktmatning-betong | fuktmätning (fuktmätare betongplatta) | fuktutredning |
| tvist-med-hantverkare | reklamation hantverkare | slutbesiktning |
Path `/guider/<slug>/`. 800–1 300 ord per guide, 4–7 steg, 4–6 FAQ, `related` 2–3 andra guider.
Mögel: ingen medicinsk rådgivning — hänvisa till vården/Folkhälsomyndigheten. Tvist: hänvisa till
konsumenttjänstlagen och Allmänna reklamationsnämnden (ARN) utan att ge juridisk rådgivning.
Inga varumärken/konkurrenter (Anticimex, Polygon, Folksam …). `lastReviewed` = dagens datum.
Bygg mogel-i-hus själv, låt subagenter skriva de fem andra mot den.

Exit: 6 guider renderar med HowTo + FAQ JSON-LD, hubben listar dem, verify grön, PR mergad.
