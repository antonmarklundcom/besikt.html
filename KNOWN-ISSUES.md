# Aktuell driftstatus — 10 oktober 2026

SEO-, innehålls- och bildarbetet är färdigt. Integrationen med tidigare `main` bevarar sex äldre guideadresser, ger totalt 14 tjänster och 13 guider och skyddar privata sökvägar. Publicering till Hostinger och kontroll i produktionsmiljön återstår; Anton hanterar publiceringen.

- Telefonnummer: **+46 73 633 38 75**. Ingen offentlig kontaktmejl. Kontaktformuläret fungerar med och utan JavaScript; besökarens mejl är valfri.
- Alla 14 illustrationer finns som optimerade AVIF/WebP-filer i Git. Bilderna är märkta som illustrationer.
- SBR/KIWA-certifieringen är bekräftad av Anton i tidigare main. Aktuellt certifikat, uppdragets behörighet, försäkring och faktisk tillgänglighet behöver kontrolleras för respektive uppdrag.
- Inga obekräftade numeriska priser används. Den äldre kalkylatorn omdirigeras permanent till offert- och prissidan.
- Utan CRM-konfiguration sparas förfrågningar i den skyddade lokala leadloggen. Kontrollera skrivbehörighet och HTTP-skydd på Hostinger och läs [drifthandboken](docs/LEADS-RUNBOOK.md). Senare svensk CRM ansluts med faktiska mottagare och uppgifter.
- Retentionsrensning finns vid skrivning och som CLI-verktyg. Ingen schemalagd drift eller oberoende backup av kunddata har installerats.
- Lokal verifiering använder PHP 8.3.33. Hostinger PHP 8.2/Apache, HTTPS, privata sökvägar och en märkt testförfrågan ska verifieras efter publicering.
- GTM/pixlar är inte anslutna. Search Console, verklig URL-historik, godkända priser och styrkta referenser kan kompletteras senare.

[Publicering](docs/DEPLOY.md), [aktuella externa uppgifter](docs/OPEN-QUESTIONS.md) och [historisk faktalista](docs/facts-to-verify.md). Äldre fasloggar beskriver tidigare versioner och ska inte användas som aktuell driftstatus.
