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
