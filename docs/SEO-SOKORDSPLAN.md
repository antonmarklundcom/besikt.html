# SEO-sökordsplan – besiktningsmannen.se

Status: **Steg 1 (plan), uppdaterad efter Antons svar. Byggplanen finns i `plan.md`. Ingen kod före godkännande.**
Källa: Google Keyword Planner, Sverige, svenska, exporterad 2026-10-01
(`besiktningsmannen.se-keywords-for-ai.md`, 641 unika sökningar, 38 310 sök/mån deduplicerat).
Detta dokument ersätter de "ej verifierade" sökordslistorna. Nu finns riktig data.

Filer:
- `docs/sokord-fastighet.csv`: de 417 fastighetssökningar som används, med kluster, volym och CPC.
- `docs/sokord-borttagna.csv`: de 224 sökningar som tagits bort, med orsak.

---

## 0. Rensning av data

| | Sökningar | Sök/mån |
| --- | ---: | ---: |
| Totalt i filen (del 3) | 641 | 38 310 |
| Borttaget: fordon (bilbesiktning, Transportstyrelsen, besiktningsprotokoll för bil, besiktningsstationer som Högdalen, Vinsta och Ekerö, MC, släp, efterbesiktning av bil) | 181 | 19 820 |
| Borttaget: varumärken, konkurrenter och personnamn (Anticimex, Dekra, Opus, Carspect, Polygon, Folksam, Trygg-Hansa, HSB, SBC, Garbo, Eminenta, OBM, Ocab, Humidus, enskilda besiktningsmän, "besiktningsman se") | 43 | 1 100 |
| **Kvar: fastighetsbesiktning** | **417** | **17 390** |

Över hälften av volymen i filen gäller fordon. Därför finns bara cirka 22 meningsfulla
fastighetskluster och inte 40. Verktygets 39 grupper var blandade (exempelvis innehöll
gruppen "bilprovningen gärdet" även "entreprenadbesiktning"). Därför har grupperna sorterats om på frasnivå.

Viktiga observationer:
- **"besiktningsprotokoll" (2 400) är bilsökningar.** Folk söker sin bils protokoll. Ingen sida byggs för det.
- **"besiktning i stockholm" (390) är blandad.** Google slår ihop den med "byggbesiktning stockholm",
  men de flesta som söker vill besikta bilen. Ordet används på startsidan men får ingen egen sida.
- **"efterbesiktning" (260) handlar om bil.** Efterbesiktning inom bygg tas upp som ett avsnitt på sidan om slutbesiktning.
- **Orter:** Bara Stockholm har verklig volym (cirka 1 000 sök/mån för fastighet). Uppsala har 30.
  Danderyd, Nacka, Täby, Lidingö med flera har högst 10 vardera. **Inga ortssidor byggs.** Stockholm hanteras
  på startsidan och i title. Orterna nämns i ett avsnitt om vilka områden ni täcker och i schema `areaServed`.
- **CPC ger en fingervisning om köpintention.** Badrumsbesiktning har 29–85 kr per klick, slutbesiktning
  21–60 kr, besiktningsman 16–59 kr och underhållsplan brf 26–147 kr. Mögel (1–8 kr) och
  fuktmätare (1–18 kr) är mest informationssökningar.

---

## 1. Sajtens sidor (alla är NYA, sajten finns inte än)

Sajten byggs från `php-site-template` med Sverige-modulen. Det finns inga befintliga sidor, så det
finns heller inga snabba vinster i form av title- eller H1-fixar. Prioriteten nedan avgör i stället byggordningen.

| Prio | URL | Title (≤60 tecken) | H1 |
| --- | --- | --- | --- |
| 1 | `/` | Besiktningsman i Stockholm – SBR/KIWA-certifierad | Besiktningsman i Stockholm |
| 1 | `/overlatelsebesiktning/` | Överlåtelsebesiktning – besiktning av hus vid köp | Besiktning av hus inför köp (överlåtelsebesiktning) |
| 1 | `/priser/` | Vad kostar besiktning av hus? Priser & kalkylator | Pris på besiktning av hus |
| 1 | `/fuktutredning/` | Fuktskada? Fuktutredning & skadeutredning | Fuktskada i huset – fuktutredning och skadeutredning |
| 1 | `/badrumsbesiktning/` | Badrumsbesiktning – besiktning av badrum & våtrum | Badrumsbesiktning |
| 1 | `/slutbesiktning/` | Slutbesiktning av hus, renovering & nybygge | Slutbesiktning |
| 2 | `/entreprenadbesiktning/` | Entreprenadbesiktning enligt AB 04, ABT 06, ABS 18 | Entreprenadbesiktning och förbesiktning |
| 2 | `/garantibesiktning/` | Garantibesiktning – 2-års & 5-årsbesiktning | Garantibesiktning |
| 2 | `/brf/` | Besiktning för BRF & bostadsrätt | Besiktning av bostadsrätt och BRF |
| 2 | `/guider/mogel-i-hus/` | Mögel i hus – symptom, tecken och vad du gör | Mögel i hus: symptom och tecken |
| 2 | `/guider/fuktskada-badrum/` | Fuktskada i badrum – tecken och fuktmätning | Fuktskada i badrum |
| 2 | `/om-oss/` | Certifierad & oberoende besiktningsman (SBR/KIWA) | Certifierad och oberoende besiktningsman |
| 3* | `/brf/underhallsplan/` | Underhållsplan för BRF – krav, innehåll & pris | Underhållsplan för BRF |
| 3 | `/guider/fuktmatning-betong/` | Fuktmätning i betong och betongplatta | Fuktmätning i betongplatta |
| 3 | `/guider/fuktskada-parkett/` | Fuktskada i parkett och trägolv | Fuktskada i parkett |
| 3 | `/statusbesiktning/` | Statusbesiktning av hus, lägenhet & tak | Statusbesiktning |
| 3* | `/besiktning-tak/` | Besiktning av tak – oberoende besiktningsman | Besiktning av tak |
| 3 | `/guider/fuktskada-kallare/` | Fuktskada i källare – orsaker och utredning | Fuktskada i källare |
| 3 | `/guider/tvist-med-hantverkare/` | Tvist med hantverkare – reklamation & besiktning | Tvist med hantverkare |
| – | `/offert/` | Begär offert – besiktningsman Stockholm | Begär offert |
| – | `/kontakt/`, `/integritetspolicy/` | – | – |

\* = byggs bara om tjänsten erbjuds (se frågorna i slutet).

Slug-regel: inga å, ä eller ö i URL:er (överlåtelse → `overlatelse`, källare → `kallare`). Rubriker och text
använder å, ä och ö som vanligt.

---

## 2. Kluster → sida (fastighetskluster sorterade efter sök/mån)

| # | Kluster | Sök/mån | Sida | Huvudord | Varianter på samma sida | Ändringar |
| ---: | --- | ---: | --- | --- | --- | --- |
| 1 | Besiktning hus / överlåtelse | 3 280 | NY `/overlatelsebesiktning/` | besiktning hus (720) | överlåtelsebesiktning (720), husbesiktning (590), besiktningsman hus (260), besikta hus innan köp (210), besiktning av hus vid försäljning (70) | Title och H1 enligt sidtabellen. H2: Vad ingår, Köpare eller säljare, Undersökningsplikt, Efter besiktningen. FAQ: köpa hus utan besiktning? Före eller efter kontrakt (klausul)? Länkar till /priser/, /fuktutredning/, /badrumsbesiktning/, /guider/mogel-i-hus/ |
| 2 | Pris / kostnad | 1 790 | NY `/priser/` + kalkylator | besiktning hus pris (590) | vad kostar besiktning av hus (390), överlåtelsebesiktning pris (140), besiktningsman pris (50), besiktning bostadsrätt pris (40), fuktmätning pris (30) | Kalkylator: bostadstyp × boyta × tillval (badrum, fuktmätning). Prisintervall i formatet `X XXX kr`. FAQ: vem betalar, RUT/ROT (gäller inte besiktning, förklara). Länkar till varje tjänstesida och /offert/ |
| 3 | Mögel i hus | 1 500 | NY guide `/guider/mogel-i-hus/` | mögel i hus symptom (260) | mögel i hus (210), mäta mögel i hus (110), mögellukt i hus (70), mögeltest hus (70), tecken på mögel i huset (50) | H2: Symptom, Tecken och lukt, Mäta själv eller anlita, Svartmögel/vitmögel. Ingen medicinsk rådgivning. Ange källa (Folkhälsomyndigheten). CTA och länk till /fuktutredning/ |
| 4 | Besiktningsman (allmänt) | 1 240 | NY `/` | besiktningsman (880) | besiktningsman villa (70), anlita besiktningsman (30), besiktningsmannen (30), besiktningsförrättare (20), hitta besiktningsman (20) | Startsida: tjänstekort, avsnitt om var ni arbetar (Stockholms län och kommuner), USP:er för SBR/KIWA, CTA. Länkar till alla tjänster |
| 5 | Stockholm | 1 010 | NY `/` (samma sida) | besiktningsman stockholm (110) | husbesiktning stockholm (390), besiktning i stockholm (390, blandad med bil), överlåtelsebesiktning stockholm (70), bästa besiktningsman stockholm | "Stockholm" i title, H1 och meta. LocalBusiness-schema med `areaServed`. Ingen separat Stockholmssida (den skulle konkurrera med startsidan) |
| 6 | Fuktskada / skadeutredning | 1 140 | NY `/fuktutredning/` | fuktskada (480) | fuktskada i vägg (140), fuktutredning (90), fuktskador hus (50), besiktning fuktskada (20), skadeutredning (20) | H2: Tecken, Så går utredningen till, Fuktmätning, Försäkring och ansvar, Rapport. FAQ: täcker hemförsäkringen? Länkar till guiderna om mögel, badrum, parkett och källare |
| 7 | Underhållsplan BRF | 1 140 | NY* `/brf/underhallsplan/` | underhållsplan brf (590) | brf underhållsplan (110), underhållsplan brf lag (70), mall (70), krav (50), liten brf (50), kostnad (30) | Bara om ni gör underhållsplaner. Högst CPC i datan (upp till 147 kr). H2: Krav och lag, Innehåll, Mall (ladda ner, inte i v1), Kostnad. Länk till /brf/ |
| 8 | Fuktmätning | 800 | NY guide `/guider/fuktmatning-betong/` + avsnitt på /fuktutredning/ | fuktmätning (210) | fuktmätare betongplatta (390), fuktmätning betong (70), fuktmätning hus (30), fuktmätning krypgrund (30), RBK (10) | Mycket av volymen gäller köp av mätare. Skriv en guide om när en egen mätare räcker och när en RBK-mätning behövs. Länk till /fuktutredning/ |
| 9 | Badrumsbesiktning | 780 | NY `/badrumsbesiktning/` | badrumsbesiktning (170) | besiktning badrum (140), våtrumsbesiktning (70), besiktningsman badrum (70), besiktning badrum bostadsrätt (40), slutbesiktning badrum (30) | Högst CPC bland tjänsterna (29–85 kr). H2: Före köp, Efter renovering (branschregler, tätskikt), Bostadsrätt och BRF-krav, Fuktmätning, Pris. Länkar till /guider/fuktskada-badrum/, /slutbesiktning/, /brf/ |
| 10 | Certifiering / oberoende | 730 | NY `/om-oss/` + startsidan | certifierad besiktningsman (90) | besiktningsman sbr (210), oberoende besiktningsman (110), sbr godkänd besiktningsman (40), rise certifierad besiktningsman (20), auktoriserad besiktningsman (20) | Förklara SBR, KIWA och RISE och vad oberoende innebär. Visa certifikatnummer. "SBR" finns med i startsidans title |
| 11 | Fuktskada badrum | 620 | NY guide `/guider/fuktskada-badrum/` | fuktskada badrum (210) | fuktskada badrum tecken (90), fuktmätning badrum (90), fuktigt badrum (70), fuktskada tak badrum (30) | Lista med tecken och vad man gör. Länkar till /badrumsbesiktning/ och /fuktutredning/ |
| 12 | Entreprenad / förbesiktning | 570 | NY `/entreprenadbesiktning/` | entreprenadbesiktning (170) | förbesiktning (170), entreprenadbesiktningsman (70), förbesiktning entreprenad (30), särskild besiktning ABT 06 (20), provhåltagning (10) | För BRF och beställare. H2: AB 04, ABT 06, ABS 18, Förbesiktning, Slutbesiktning, Särskild besiktning. Länkar till /slutbesiktning/ och /garantibesiktning/ |
| 13 | Slutbesiktning | 510 | NY `/slutbesiktning/` | slutbesiktning (210) | slutbesiktning av hus (90), slutbesiktning lägenhet (40), fortsatt/kompletterande slutbesiktning (30), checklista slutbesiktning villa (10), nybyggt hus (10) | H2: Nybygge, Renovering och tillbyggnad, Efterbesiktning, Checklista. FAQ: vad händer om något inte godkänns? Länkar till /entreprenadbesiktning/, /garantibesiktning/, /badrumsbesiktning/ |
| 14 | Fuktskada parkett | 450 | NY guide `/guider/fuktskada-parkett/` | fuktskada parkett (170) | fuktskada på parkettgolv (90), fuktskadat laminatgolv (50), fuktskada trägolv (40) | Länk till /fuktutredning/ |
| 15 | Garantibesiktning | 330 | NY `/garantibesiktning/` | garantibesiktning (110) | garantibesiktning 5 år (40), 2 år (30), 5 års besiktning brf (20), ABT 06/AB 04 | Tidslinje för 2 och 5 år. Länkar till /brf/ och /entreprenadbesiktning/ |
| 16 | BRF / bostadsrätt | 320 | NY `/brf/` | besiktningsman bostadsrätt (50) | besiktningsman lägenhet (50), besikta lägenhet innan köp (40), besikta bostadsrätt innan köp (30), överlåtelsebesiktning bostadsrätt (20), fuktskada bostadsrätt ansvar (10) | Två målgrupper på samma sida: (a) köpare och medlemmar, (b) styrelser (stambyte, garanti, underhållsplan). Länkar till /badrumsbesiktning/, /garantibesiktning/, /brf/underhallsplan/ |
| 17 | Tak | 260 | NY* `/besiktning-tak/` (annars ett avsnitt i /statusbesiktning/) | besiktning av tak (70) | oberoende besiktningsman tak (70), besikta tak (40), slutbesiktning tak (20), besiktning av takrenovering (10) | Bara om ni gör takbesiktning |
| 18 | Fuktskada källare | 220 | NY guide `/guider/fuktskada-kallare/` | fuktskada källare (30) | fuktsanering källare (90), fuktskador källare (30), fuktskada källarvägg (20) | Ni sanerar inte. Skriv om utredningen och länka till /fuktutredning/ |
| 19 | Statusbesiktning | 100 | NY `/statusbesiktning/` | statusbesiktning (70) | statusbesiktning fastighet (20), statusbesiktning hus (10), statusbesiktning lägenhet, statusbesiktning tak | Låg volym men en av era kärntjänster. Länkar till /overlatelsebesiktning/ och /brf/ |
| 20 | Tvist / reklamation | 70 | NY guide `/guider/tvist-med-hantverkare/` | reklamation hantverkare (40) | tvist hantverkare (20), tvist med hantverkare om faktura (10), fel efter renovering, konsumenttjänstlagen | Låg volym men hög CPC (upp till 139 kr) och tydlig köpintention. Länkar till /fuktutredning/ och /slutbesiktning/ |

**Utesluts tills vidare (tjänster som troligen inte erbjuds):** kontrollansvarig (150), OVK (120),
fuktskydd som produkt (230), varumärken och bil (se avsnitt 0).

---

## 3. Interna länkar (kärnan)

```
/  ──► alla tjänstesidor + /priser/ + /om-oss/
/overlatelsebesiktning/ ◄──► /priser/ ◄──► /badrumsbesiktning/
/fuktutredning/ ◄── guider: mogel-i-hus, fuktskada-badrum, fuktskada-parkett, fuktskada-kallare, fuktmatning-betong
/badrumsbesiktning/ ◄──► /guider/fuktskada-badrum/
/slutbesiktning/ ◄──► /entreprenadbesiktning/ ◄──► /garantibesiktning/ ◄──► /brf/
/brf/ ──► /brf/underhallsplan/, /badrumsbesiktning/, /garantibesiktning/
Varje sida: CTA till /offert/ + klickbart telefonnummer
```

Varje tjänstesida har 2–4 kontextuella länkar i texten (med naturlig ankartext, inte exakt huvudord varje gång)
plus en ruta med relaterade tjänster. Guiderna länkar alltid till sin tjänstesida.

---

## 4. Teknisk SEO (sammanfattning, detaljer i PLAN.md)

- Schema: `LocalBusiness` (HomeAndConstructionBusiness) på `/`, `Service` på tjänstesidor,
  `FAQPage` där det finns FAQ, `BreadcrumbList` överallt, `Article` på guider.
- `sitemap.php`, `robots.php` och canonical med absolut URL `https://besiktningsmannen.se/...`.
- Alias `besiktningsmännen.se` = `xn--besiktningsmnnen-6nb.se` (punycode) 301 → `https://besiktningsmannen.se` med bibehållen sökväg.
- Allt innehåll på svenska och mobilanpassat. Offertformulär → VenderCRM `/api/v1/leads`.

---

## 5. Beslut (2026-10-01)

Se `plan.md` §1. Kortfattat: varumärket är Besiktningsmannen (utföraren nämns inte), fokus på Stockholms län
(Stockholm + Nynäshamn, övriga Sverige efter överenskommelse), "från"-priser som är preliminära, formuläret först.
Underhållsplan BRF och takbesiktning är parkerade tills det är bekräftat att tjänsterna erbjuds. Påståenden om SBR/KIWA i title kräver
utförarens certifikat. Annars blir startsidans title "Besiktningsman i Stockholm – certifierad & oberoende".
