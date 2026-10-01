# Deploy – besiktningsmannen.se (Hostinger shared hosting + Cloudflare)

Sajten är statisk PHP 8.2 utan databas. Allt nedan görs av Anton. Ingen session rör DNS, Cloudflare
eller Hostinger.

## 1. Bygg zip-filen (lokalt eller i en session)

```bash
./verify.sh
./deploy/make-zip.sh          # → dist/besiktningsmannen-<datum>.zip
./verify.sh --root dist/besiktningsmannen-<datum>
```

## 2. Hostinger

1. Lägg till `besiktningsmannen.se` som webbplats. Lägg till aliaset `besiktningsmännen.se` som
   **parkerad domän/alias** på samma webbplats. I DNS heter det `xn--besiktningsmnnen-6nb.se`.
   `.htaccess` skickar www, aliaset och http med 301 till `https://besiktningsmannen.se` och behåller
   sökvägen.
2. Packa upp zip-filen i `public_html/`.
3. Skapa `public_html/config.php` (kopiera `config.example.php`) och fyll i:
   - `SITE_URL` = `https://besiktningsmannen.se`
   - `VENDERCRM_URL`, `VENDERCRM_API_KEY` (VenderCRM → Sitios → den här sajten)
   - e-post (se 4): `CF_ACCOUNT_ID`, `CF_EMAIL_TOKEN`, `LEAD_NOTIFY_TO`, `LEAD_FROM`
4. Aktivera SSL för båda domänerna.

Utan VenderCRM-nyckel fungerar formuläret ändå. Leads hamnar i `logs/leads.log`, och
`php deploy/leads-to-csv.php` gör en CSV av dem.

## 2b. Alternativ: deploy via Git (rekommenderas)

Hostinger kan hämta sajten direkt från GitHub, så att varje merge till `main` blir en uppdatering
utan att du packar zip. Det kostar inga Actions-minuter (Hostinger bygger inget – den kopierar filerna).

1. hPanel → webbplatsen → **Avancerat → Git** → *Connect with GitHub* → välj repot
   `antonmarklundcom/besikt.html`, branch `main`, målmapp `public_html` (tom mapp, ta bort
   Hostingers standardfil `default.php` först).
2. Skapa `public_html/config.php` på servern (kopiera `config.example.php`). Filen finns inte i git och
   skrivs inte över av senare deploys.
3. Slå på **Auto Deployment** (webhook) så att varje push till `main` deployas, eller tryck *Deploy* manuellt.
4. PHP 8.2 i hPanel → PHP Configuration.

Det som hamnar på servern utöver zip-innehållet (`docs/`, `prompts/`, `tests/`, `deploy/`, `plan.md`,
`*.md`, `verify.sh`, `.github/`) är avstängt av `.htaccess` (404 eller 403). Kontrollera efter första
deployen att `https://besiktningsmannen.se/docs/`, `/plan.md` och `/.github/` ger 404/403.

Skillnad mot zip: Git-varianten serverar den läsbara `assets/css/site.css` (≈ 52 kB, ≈ 9 kB gzippad)
i stället för den minifierade. Kör `node deploy/minify-css.mjs` och committa `site.min.css` om du vill
byta senare. Rollback: *Deploy* en äldre commit i hPanel eller `git revert` på `main`.

Arbetsflöde framåt: ändra på en branch → PR mot `main` → `verify` grön → squash-merge → Hostinger deployar.

## 3. Cloudflare DNS (om domänerna ligger där)

- `besiktningsmannen.se`: A/CNAME till Hostinger enligt hPanel.
- `xn--besiktningsmnnen-6nb.se`: samma mål. Alternativt en Cloudflare Redirect Rule
  (301 till `https://besiktningsmannen.se/${path}`), då behövs inget Hostinger-alias.

## 4. E-post (Cloudflare Email Service)

| Adress | Roll | Publik? |
| --- | --- | --- |
| `kontakt@besiktningsmannen.se` | allmän kontakt. Visas bara på /kontakt/ och sätts ihop med JS | ja |
| `leads@besiktningsmannen.se` | tar emot formulärnotiser (`LEAD_NOTIFY_TO`) | nej |
| `no-reply@besiktningsmannen.se` | avsändare (`LEAD_FROM`) | nej |

1. Email Routing: vidarebefordra `kontakt@` och `leads@` till inkorgen. Lägg ingen catch-all
   (det ger mindre spam).
2. Email Sending: onboarda apex-domänen (SPF/DKIM/DMARC, börja med `p=none`). Skapa en API-token för
   Email Sending och lägg den i `CF_EMAIL_TOKEN`.
3. Tjänsten är i beta. Skicka en testlead och kontrollera att notisen kommer fram. Om Cloudflare
   svarar med fel står det i Hostingers felogg (`Cloudflare notification failed …`). Resend är
   reserv: sätt `RESEND_API_KEY` i stället.

## 5. Efter lansering

- Google Search Console: lägg till domänegendomen och skicka in `https://besiktningsmannen.se/sitemap.xml`.
- Telefonnummer: fyll i `phone` i `content/site.php`. Då visas klickbar `tel:` i sidhuvudet,
  på startsidan och i den fasta knappen.
- Gå igenom `docs/facts-to-verify.md` (priser, certifiering, org.nr) innan sajten marknadsförs.
