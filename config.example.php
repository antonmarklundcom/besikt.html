<?php
/**
 * Default configuration. Copy to config.php on the server and fill in.
 *
 *   cp config.example.php config.php
 *
 * config.php is gitignored and never committed. Every value here is optional:
 * the site renders and the lead form still accepts submissions when they are
 * empty — see "degraded mode" in enviar.php.
 */

declare(strict_types=1);

return [
    // Absolute origin, no trailing slash. Used for canonical URLs, OG tags and
    // the sitemap. Falls back to the request host when empty.
    'SITE_URL' => '',                             // 'https://besiktningsmannen.se'

    // VenderCRM (Sitios → this site). Without both values the lead form runs in
    // degraded mode: submissions are appended to logs/leads.log and the visitor
    // still gets a success state pointing at WhatsApp.
    'VENDERCRM_URL'     => '',
    'VENDERCRM_API_KEY' => '',

    // E-postnotis per lead (valfritt, oberoende av VenderCRM). Två sändare:
    //  1. Cloudflare Email Sending (förstahand): CF_ACCOUNT_ID + en API-token med
    //     behörighet för Email Sending. Domänen måste vara onboardad i Email
    //     Sending (SPF/DKIM/DMARC). Tjänsten är i beta — verifiera API-fälten.
    //  2. Resend: RESEND_API_KEY, används bara om Cloudflare-värdena saknas.
    // LEAD_NOTIFY_TO är en OPUBLICERAD adress (leads@…) som Email Routing
    // vidarebefordrar till rätt inkorg. LEAD_FROM skickar som no-reply@.
    'CF_ACCOUNT_ID'  => '',
    'CF_EMAIL_TOKEN' => '',
    'RESEND_API_KEY' => '',
    'LEAD_NOTIFY_TO' => '',                       // t.ex. 'leads@besiktningsmannen.se'
    'LEAD_FROM'      => '',                       // t.ex. 'Besiktningsmannen <no-reply@besiktningsmannen.se>'

    // Analytics. assets/js/analytics.js is a no-op until GA4_ID is set.
    'GA4_ID' => '',
    'ADS_ID' => '',
];
