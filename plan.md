# plan.md – besiktningsmannen.se

Leadsajt för fastighetsbesiktning i Stockholms län. HTML + PHP från `antonmarklundcom/php-site-template`
(Sverige-modulen), Hostinger shared hosting, ingen databas. Leads → VenderCRM.
Sökorden kommer från `docs/SEO-SOKORDSPLAN.md` (Keyword Planner 2026-10-01). Den filen styr title, H1 och innehåll per sida.

Status: **PLAN, väntar på Antons OK. Ingen kod före godkännande.**

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
   **Ingår inte:** kontrollansvarig, OVK, fuktsanering. Underhållsplan för BRF och takbesiktning är parkerade (§8).
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

## 5. Lane 1 (sekventiell)

| Fas | Modell | Vad | Owns |
| --- | --- | --- | --- |
| **O1 Mall: svenska sökvägar** | Opus | PR i `php-site-template`: kontakt-, verktygs-, guide-, blogg- och prissökvägar ska vara konfigurerbara i `content/site.php` (`paths`), så att inga spanska sökvägar är hårdkodade i `lib/`, `templates/`, `partials/` och `enviar.php`. Tjänster på rotnivå ska vara tillåtna. `verify.sh` ska vara grön med `market` satt till `py` och `se`. | mallrepot |
| **T0 Adopt** | Sonnet | Importera mallen (efter O1) till `besikt.html`. Repot är tomt och skapades inte via "Use this template", så historiken importeras med `git merge --allow-unrelated-histories`. Fyll i `site.php`, översätt `ui.php` till svenska, byt route-kataloger till svenska namn, skapa stubbar för alla tjänster/guider/lead-values, ta bort exempelinnehållet. `verify.sh` ska vara grön. | allt utom innehållskopian |
| **T1 Startsida + formulär** | Opus | Startsida med offertformulär i hjältesektionen, tjänstekort, avsnitt om områden och certifiering, FAQ. Ny layout och nya tokens (förtroende/teknik: mörkblå och varm accent, inte "bil"-gul). Bildplatser definieras med neutrala platshållare. Formulärfält och `lead-values` enligt §3.1. Skapar watcher-rutinen och startar sedan alla lane 2-faser. | `/`, tokens, `partials/lead-form.php` (fälten), `content/ui.php` |

## 6. Lane 2 (Sonnet, parallellt efter T1) + link pass

| Fas | Vad | Owns |
| --- | --- | --- |
| **S1 Tjänster** | 8 tjänstesidor enligt sökordsplanen. Mallen och en exempelsida först, resten som parallella subagenter. | `content/services.php`, tjänsternas route-kataloger, deras `lead-values`-poster |
| **S2 Priser + kalkylator** | `/priser/` med prislista och kalkylator (JS via `window.Market`) | `content/precios.php`, `content/tools.php`, `priser/**`, `assets/js/tools/**` |
| **S3 Guider** | 6 guider, Article-schema, länk till respektive tjänst | `content/guias.php`, `guider/**` |
| **S4 Sidor + juridik** | `/om-oss/` (certifiering, oberoende besiktningsman), `/kontakt/` (e-post via JS), `/integritetspolicy/` (personuppgiftsansvarig, delning med utförande besiktningsman, lagringstid), `/404` | sidornas poster i `content/pages.php`, deras kataloger |
| **L Link pass** | Interna länkar enligt sökordsplanen §3, nav, hubbkort, sitemap, `KNOWN-ISSUES.md`, slutrapport | allt som korsar faserna |
| **I1 Bilder** (manuell, valfri) | Startas först när Anton skriver "Generate image". Higgsfield → `webimg` → bildplatser. Riktiga foton har förtur. | `assets/img/**` |

### Kostnad och tid (uppskattning, användningsekvivalent)

| Fas | Modell | Kostnad | Tid |
| --- | --- | ---: | ---: |
| O1 | Opus | 8–12 $ | 45 min |
| T0 | Sonnet | 3–5 $ | 30 min |
| T1 | Opus | 10–15 $ | 60 min |
| S1–S4 (parallellt) | Sonnet | 30–40 $ | 90 min |
| L | Sonnet | 3 $ | 30 min |
| Watcher (varje timme) | Sonnet | < 1 $ | – |
| **Totalt** | | **≈ 55–75 $** | **≈ 4–4,5 h** |
| I1 bilder (valfri) | Sonnet + Higgsfield-krediter | 2–4 $ + krediter | 30 min |

## 7. Det som bara Anton kan ge (och när det behövs)

| Vad | Behövs i |
| --- | --- |
| Godkänn den här planen | före O1 |
| Merga O1-PR:en i mallen | före T0 |
| VenderCRM-nyckel + tenant (`config.php`, inte i git) | T1 (annars loggfilsreserv) |
| Telefonnummer (för klickbar `tel:`) | när det finns, en rad i `site.php` |
| Bekräftade priser och certifiering (SBR/KIWA-nummer) | före lansering |
| Personuppgiftsansvarig (namn/org.nr) för integritetspolicyn | S4 (annars en platshållare och `noindex` tills det är klart) |
| Cloudflare: DNS för båda domänerna, Email Routing (`kontakt@`, `leads@`) och Sending (`no-reply@`) | efter L |
| Hostinger: domän + uppladdning av deploy-zip | efter L |
| Foton på besiktningsmannen/utrustning | valfritt, I1 |

## 8. Öppna affärsfrågor (inte byggarbete)

1. **Underhållsplan för BRF** (1 140 sök/mån, CPC upp till 147 kr) och **takbesiktning** (260): erbjuder vännen
   dem? Ja → lägg till dem som tjänster i S1. Nej → parkerade.
2. **Google Business Profile:** en GBP kräver en verklig verksamhet med kunder i området. Profilen ska tillhöra
   den som utför uppdragen, inte leadvarumärket. Avgör om vännen vill lansera Besiktningsmannen som ett eget varumärke (då
   kan det ha en egen GBP) eller om sajten bara ska ge leads (då ingen GBP, och lokal SEO byggs med sajten och citations).
3. **Ersättningsmodell** mellan Anton och vännen (per lead/per uppdrag), och om leads kan säljas vidare till
   andra besiktningsmän utanför vännens område (påverkar integritetstexten).

## 9. Bygglogg

| Fas | PR | Logg |
| --- | --- | --- |
| – | – | – |

## 10. Backlog

- Cloudflare Turnstile om spam dyker upp.
- Engelsk sida "Home inspection Stockholm" (ingen volym i datan nu).
- Blogg, om Search Console visar frågor som guiderna inte täcker.
- Ortssidor om Search Console visar visningar för specifika kommuner (Nynäshamn, Haninge, Nacka …).
