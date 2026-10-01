# Fas S4 — Om oss, kontakt, juridik, 404. Sonnet. Lane 2.

Läs `prompts/_sonnet-common.md` och följ den.

Owns: posterna `'/om-oss/'`, `'/kontakt/'`, `'/integritetspolicy/'`, `'/404'`, `'/tjanster/'`,
`'/guider/'` i `content/pages.php`, `om-oss/**`, `docs/facts-to-verify.md`, `docs/log/S4.md`.

Uppgift:
- `/om-oss/` (sökordskluster 10: certifierad besiktningsman, besiktningsman SBR, oberoende
  besiktningsman, auktoriserad/RISE): vad certifiering betyder (SBR, KIWA, RISE — förklara utan att
  hitta på nummer), vad oberoende innebär, arbetssätt, område (Stockholm + Nynäshamn, hela länet),
  FAQ 4–5. Sätt `stub => false`.
- Granska integritetspolicyn mot plan §1 och formulärets fält (ort, bostadstyp, datum). Org.nr för
  Marklund Sales & Marketing AB saknas → lägg till i `docs/facts-to-verify.md`, inte på sidan.
- Läs igenom `/kontakt/`, `/tjanster/`, `/guider/` och `/404` (meta och H1) mot sökordsplanen.
- Skriv `docs/facts-to-verify.md` (allt som måste bekräftas före lansering: priser, certifiering,
  org.nr, telefon, e-post, VenderCRM, Cloudflare).

Exit: sidorna renderar utan stub, verify grön, PR mergad.
