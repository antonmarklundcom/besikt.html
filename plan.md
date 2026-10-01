# plan.md – besiktningsmannen.se

Leadsajt för fastighetsbesiktning i Stockholms län. HTML + PHP från `antonmarklundcom/php-site-template`
(Sverige-modulen), Hostinger shared hosting, ingen databas. Leads → VenderCRM.
Sökorden kommer från `docs/SEO-SOKORDSPLAN.md` (Keyword Planner 2026-10-01). Den filen styr title, H1 och innehåll per sida.

Status: **Godkänd 2026-10-01. Opus-fasen (O1 + T0/T1) är klar. Resten körs med `prompts/sonnet-run-all.md`.**

---

## 1. Beslut som är fattade (diskuteras inte om i byggfaserna)

1. **Varumärke:** "Besiktningsmannen" på besiktningsmannen.se. Utföraren (vännens bolag) **nämns inte** på
   sajten. Sajten säljer leads till en certifierad besiktningsman som samarbetspartner.
2. **Alias:** besiktningsmännen.se = `xn--besiktningsmnnen-6nb.se`. Det gör en 301 till `https://besiktningsmannen.se` med sökvägen
   kvar. Samma sak för `www.` på båda domänerna.
3. **Geografi:** Fokus på Stockholms län, med utgångspunkt i Stockholm och Nynäshamn. "Uppdrag i övriga Sverige efter
   överenskommelse" står på en rad på startsidan och i FAQ. Inga ortssidor (bara Stockholm har sökvolym).
4. **Tjänster i v1:** överlåtelsebesiktning/besiktning av hus, statusbesiktning, badrumsbesiktning,
   fuktutredning/skadeutredning, slutbesiktning, entreprenadbesiktning, garantibesiktning, BRF/bostadsrätt.
   **Ingår också:** underhållsplan för BRF (`/brf/underhallsplan/`), bekräftad av Anton.
   **Ingår inte:** kontrollansvarig, OVK, fuktsanering. Takbesiktning blir ett avsnitt i statusbesiktningen.
5. **Priser:** Vi visar "från"-priser inklusive moms för privatpersoner. Siffrorna är **preliminära**
   (`'preliminary' => true` i `content/precios.php`, listade i `docs/facts-to-verify.md`) tills vännen bekräftar dem.
   Startvärden finns i §3.3.
6. **Formuläret är viktigast.** Varje sida har en CTA till offertformuläret. Formuläret ligger direkt i hjältesektionen på startsidan
   och på varje tjänstesida. Telefonnumret är `null` tills det finns, och då döljs partialen.
7. **E-post:** `kontakt@besiktningsmannen.se` är den enda publika adressen. Den visas bara på `/kontakt/` och
   `/integritetspolicy/`, renderas med JS (finns inte i HTML-källan) och står aldrig i sidfoten. Formulärnotiser
   går till en opublicerad adress (`leads@`), och avsändare är `no-reply@`. Allt går via Cloudflare
   Email Routing/Sending, som Anton sätter upp senare (§7). Fram till dess går leads till VenderCRM, med
   loggfil som reserv.
8. **Skydd mot spam** (i mallen): honeypot, en gräns per IP (5 per 10 min) och validering på servern. Cloudflare
   Turnstile läggs bara till om spam faktiskt dyker upp (Backlog).
9. **Bilder:** inga AI-bilder på personer. Riktiga foton av besiktningsmannen tas om möjligt in. Higgsfield används bara för
   detaljbilder utan personer (fuktmätare mot kakel, vindsbjälklag, takfot) och **bara när Anton skriver
   "Generate image"**. Bildplatserna definieras i T1 och fylls i fas I1 (§6).
10. **URL:er:** svenska, utan å, ä och ö. Tjänster ligger på rotnivå (`/overlatelsebesiktning/`). Hubbar heter
    `/tjanster/`, `/guider/`, `/priser/`, `/kontakt/`, `/om-oss/`, `/integritetspolicy/`. Ingen blogg i v1
    (guiderna fångar informationssökningarna).
11. **Copy:** svenska, du-tilltal, sakligt, inga superlativer, inga påhittade fakta (certifikatnummer, recensioner,
    år i branschen och adress är `null` tills de bekräftats).
12. **Personuppgiftsansvarig:** Marklund Sales & Marketing AB (org.nr ska bekräftas).
13. **Ingen Google Business Profile** och inga riktiga foton i v1.

## 2. Innehållsmodell

Mallens innehållsfiler och nyckelformer gäller oförändrade (se mallens README → Content model).
Sidor, title och H1 enligt `docs/SEO-SOKORDSPLAN.md` §1–2.

| Fil | Innehåll |
| --- | --- |
| `content/site.php` | name "Besiktningsmannen", domain, `market => 'se'`, `servicesHub => '/tjanster/'`, `schemaType => ['HomeAndConstructionBusiness']`, `areaServed` = Stockholms län + kommuner, kontaktuppgifter `null` |
| `content/services.php` | 8 tjänster (§1.4), alla med `faq`, `related` och `guides` |
| `content/guias.php` | 6 guider: mogel-i-hus, fuktskada-badrum, fuktskada-parkett, fuktskada-kallare, fuktmatning-betong, tvist-med-hantverkare |
| `content/precios.php` | "från"-priser per tjänst (§3.3), `preliminary` |
| `content/tools.php` | 1 verktyg: priskalkylatorn, inbäddad på `/priser/` |
| `content/lead-values.php` | en post per tjänst och för kalkylatorn. Alla skapas som stubbar i T0 så att lane 2 bara fyller i sina egna |
| `content/pages.php` | `/`, `/tjanster/`, `/guider/`, `/priser/`, `/om-oss/`, `/kontakt/`, `/integritetspolicy/`, `/404` |

## 3. Funktioner

### 3.1 Offertformulär (kärnan)
Fält: tjänst (knappar som går att trycka på), kommun/ort, bostadstyp (villa/radhus, bostadsrätt, fritidshus, BRF/fastighet,
entreprenad), önskat datum (valfritt), namn, telefon, e-post, meddelande, samtycke.
GDPR-texten under knappen: *"Vi använder dina uppgifter för att besvara din förfrågan och lämnar dem
till den besiktningsman som utför uppdraget. Läs mer i vår integritetspolicy."*
Lead → VenderCRM `POST /api/v1/leads` med `crmTag` per tjänst, `source_page` och kommun. Tack-sidan visar
"nästa steg" (vad man ska ha redo: adress, ritning, byggår, köpekontrakt).

### 3.2 SEO-tekniskt
Schema: `HomeAndConstructionBusiness` (areaServed, utan gatuadress tills den är bekräftad), `Service` per tjänst,
`FAQPage`, `BreadcrumbList`, `Article` på guider. `sitemap.php`, `robots.php` och en absolut canonical. 301-redirects
i `.htaccess` (alias, www och avslutande snedstreck).

### 3.3 Preliminära "från"-priser (inkl. moms, privatperson, Stockholms län, att bekräftas)

| Tjänst | Från |
| --- | ---: |
| Överlåtelsebesiktning villa/radhus | 9 900 kr |
| Besiktning bostadsrätt inför köp | 5 900 kr |
| Badrumsbesiktning | 3 900 kr |
| Fuktmätning / fuktutredning | 4 900 kr |
| Statusbesiktning villa | 8 900 kr |
| Slutbesiktning, renovering/tillbyggnad (privat) | 7 900 kr |
| Garantibesiktning | 6 900 kr |
| Entreprenad- och BRF-uppdrag | offert (timpris anges när det är bekräftat) |

Utanför Stockholms län: reseersättning enligt offert. Kalkylatorn räknar med bostadstyp × storleksintervall ×
tillval och visar alltid ett intervall plus texten "Slutligt pris i offert".

## 4. Autonomiprotokoll

Gäller oförändrat som i `phased-autonomous-build` §4 (punkterna 1–15). Viktigast här:
- en PR per fas, en `phase/<id>`-branch från main, merge när den är grön;
- lane 2 skriver bara i sitt eget **Owns**-block;
- frågor skrivs i `docs/decisions-needed.md` och sessionen avslutas;
- **Fable används aldrig** i byggfaser, subagenter eller Routines.

## 5. Lane 1 (Opus) – KLAR

| Fas | Modell | Status |
| --- | --- | --- |
| O1 Mall: konfigurerbara sökvägar + areaServed | Opus | PR antonmarklundcom/php-site-template#3 |
| T0 Adopt + T1 Startsida/formulär/e-post/redirects | Opus | se §9 |

## 6. Lane 2 (Sonnet) – körs i en session med `prompts/sonnet-run-all.md`

| Fas | Prompt | Owns (kort) |
| --- | --- | --- |
| S1 Tjänster | `prompts/sonnet-1-tjanster.md` | `content/services.php`, tjänsternas route-kataloger |
| S2 Priser + kalkylator | `prompts/sonnet-2-priser.md` | `content/precios.php`, `content/tools.php`, `priser/**`, `assets/js/tools/**` |
| S3 Guider | `prompts/sonnet-3-guider.md` | `content/guias.php`, `guider/<slug>/**` |
| S4 Om oss + juridik | `prompts/sonnet-4-sidor.md` | sidposter i `content/pages.php`, `om-oss/**`, `docs/facts-to-verify.md` |
| S5 Länkpassning | `prompts/sonnet-5-link-pass.md` | tvärgående länkar, `KNOWN-ISSUES.md`, slutrapport |
| I1 Bilder (valfri) | – | Startas bara när Anton skriver "Generate image" |

Gemensamma regler: `prompts/_sonnet-common.md`. S1–S4 äger olika filer och kan också köras i fyra
parallella sessioner (en prompt var). S5 körs sist.

### Kostnad och tid (uppskattning, användningsekvivalent)

| Fas | Modell | Kostnad | Tid |
| --- | --- | ---: | ---: |
| O1 + T0 + T1 | Opus | klart | – |
| S1–S4 (i följd) | Sonnet | 30–40 $ | 4–5 h |
| S5 | Sonnet | 3 $ | 30 min |
| **Kvar** | | **≈ 35–45 $** | **≈ 5 h (≈ 2 h om S1–S4 körs parallellt)** |
| I1 bilder (valfri) | Sonnet + Higgsfield-krediter | 2–4 $ + krediter | 30 min |

## 7. Det som bara Anton kan ge (och när det behövs)

| Vad | Behövs |
| --- | --- |
| Merga PR:en i mallen och foundation-PR:en | klart när CI är grön |
| Starta `prompts/sonnet-run-all.md` i en Sonnet-session | nu |
| VenderCRM-nyckel + URL (`config.php` på servern, inte i git) | vid deploy (annars loggfil) |
| Telefonnummer | när det finns, en rad i `content/site.php` |
| Bekräftade priser, certifiering och org.nr | före marknadsföring (`docs/facts-to-verify.md`) |
| Cloudflare: DNS, Email Routing (`kontakt@`, `leads@`), Email Sending (`no-reply@`) | vid deploy (`docs/DEPLOY.md`) |
| Hostinger: webbplats + alias + uppladdning av zip | vid deploy (`docs/DEPLOY.md`) |

## 8. Öppna affärsfrågor (inte byggarbete)

1. Ersättningsmodell mellan Anton och vännen (per lead/per uppdrag). Påverkar inte koden.
2. Google Business Profile: ingen i v1. Profilen ska tillhöra den som utför uppdragen. Tas upp igen om
   Besiktningsmannen blir vännens eget varumärke.

## 9. Bygglogg

| Fas | PR | Logg |
| --- | --- | --- |
| O1 (mall) | antonmarklundcom/php-site-template#3 | – |
| T0 + T1 | foundation-PR (se GitHub) | `docs/log/T1.md` |
| S1 Tjänster | phase/S1 | `docs/log/S1.md` |
| S2 Priser + kalkylator | phase/S2 | `docs/log/S2.md` |

## 10. Backlog

- Cloudflare Turnstile om spam dyker upp.
- Engelsk sida "Home inspection Stockholm" (ingen volym i datan nu).
- Blogg, om Search Console visar frågor som guiderna inte täcker.
- Ortssidor om Search Console visar visningar för specifika kommuner (Nynäshamn, Haninge, Nacka …).
