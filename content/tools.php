<?php
/**
 * The tool pages under /herramientas/, keyed by slug — same shape discipline as
 * content/services.php: fill every key, never rename or remove one.
 *
 *   path             string   URL, trailing slash
 *   title            string   the tool's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 41 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 200–300 words of copy, readable without JS
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   related          string[] related service slugs (content/services.php)
 *   ctaWhatsapp      string   kept EMPTY: every wa.me prefill comes from
 *                             content/lead-values.php through
 *                             whatsapp_text_for_page(). The key exists so the
 *                             record shape is stable.
 *   formNeed         string   pre-selected chip key in content/ui.php 'needs'
 *   analyticsTool    string   tool_used event name (assets/js/analytics.js)
 *   example          bool     seed record only — see content/services.php
 *   calc             array    (valfri) kalkylatorns regler, skrivs ut som data-rules-JSON.
 *                             Grundpriserna kommer från content/precios.php (service-nyckeln).
 *
 * The calculator markup itself lives in each tool's own route file, which builds
 * it into $toolCalcHtml and requires templates/tool.php; the arithmetic lives in
 * assets/js/tools/<slug>.js and reads its rules from window.Market.
 *
 * Every tool slug also needs a record in content/lead-values.php.
 */

declare(strict_types=1);

return [

    'priskalkylator' => [
        'path'            => '/priser/kalkylator/',
        'title'           => 'Priskalkylator för besiktning',
        'navLabel'        => 'Priskalkylator',
        'seoTitle'        => 'Priskalkylator för besiktning av hus',
        'metaDescription' => 'Räkna ut ungefärligt pris på besiktning av hus, bostadsrätt, badrum eller '
                           . 'fuktutredning i Stockholms län. Du får ett intervall – fast pris i offerten.',
        'hero' => [
            'eyebrow' => 'Priskalkylator',
            'h1'      => 'Vad kostar besiktningen? Räkna ut ett intervall',
            'lead'    => 'Välj tjänst, storlek och tillval så får du ett ungefärligt prisintervall. '
                       . 'Slutligt pris står alltid i offerten.',
        ],
        'intro' => [
            'Kalkylatorn utgår från våra riktpriser för privatpersoner i Stockholms län, inklusive moms. '
            . 'Priset beror främst på vilken tjänst du behöver och hur stort huset är. Tillval som '
            . 'fuktmätning och extra badrum påverkar också omfattningen.',
            'Resultatet är ett intervall, aldrig ett exakt pris. Siffrorna är preliminära riktvärden och '
            . 'ersätter inte en offert. När du skickar en förfrågan följer ditt resultat med, så att vi '
            . 'kan utgå från det när vi lämnar ett fast pris.',
            'Ligger fastigheten utanför Stockholms län tillkommer reseersättning enligt offert. '
            . 'Uppdrag för bostadsrättsföreningar och entreprenader prissätts efter omfattning och '
            . 'finns därför inte i kalkylatorn.',
        ],
        'faq' => [
            [
                'q' => 'Är priset i kalkylatorn bindande?',
                'a' => 'Nej. Kalkylatorn visar ett ungefärligt intervall. Det bindande priset är det fasta pris du får i offerten innan du bokar.',
            ],
            [
                'q' => 'Varför visas ett intervall och inte ett exakt pris?',
                'a' => 'Husets skick, antal våtrum och hur lättillgängliga utrymmena är påverkar tiden på plats. Intervallet visar spannet, och offerten anger det exakta priset.',
            ],
            [
                'q' => 'Ingår moms i priserna?',
                'a' => 'Ja, priserna är angivna inklusive moms för privatpersoner. För företag och föreningar anges priset i offerten.',
            ],
        ],
        'related'     => ['overlatelsebesiktning', 'badrumsbesiktning', 'fuktutredning'],
        'ctaWhatsapp' => '',
        'formNeed'    => 'kop',
        'analyticsTool' => 'priskalkylator',
        'example'     => false,

        /* Regler. `price` per tjänst hämtas från content/precios.php. `size`
           = om boyta påverkar priset; `sizeBand` = faktor [låg, hög] när boyta
           inte frågas. Alla faktorer och tillägg är preliminära. */
        'calc' => [
            'services' => [
                'overlatelsebesiktning' => ['label' => 'Överlåtelsebesiktning, villa/radhus', 'size' => true],
                'brf'                   => ['label' => 'Besiktning bostadsrätt inför köp',    'size' => false, 'band' => [1.0, 1.3]],
                'badrumsbesiktning'     => ['label' => 'Badrumsbesiktning',                   'size' => false, 'band' => [1.0, 1.25]],
                'fuktutredning'         => ['label' => 'Fuktmätning / fuktutredning',         'size' => false, 'band' => [1.0, 1.4]],
                'statusbesiktning'      => ['label' => 'Statusbesiktning villa',              'size' => true],
                'slutbesiktning'        => ['label' => 'Slutbesiktning, renovering/tillbyggnad', 'size' => false, 'band' => [1.0, 1.4]],
            ],
            // Boyta-intervall med faktor mot grundpriset; `quote` = enligt offert, inget intervall
            'sizes' => [
                ['label' => 'Upp till 100 m²', 'low' => 1.0,  'high' => 1.15],
                ['label' => '101–150 m²',      'low' => 1.15, 'high' => 1.35],
                ['label' => '151–200 m²',      'low' => 1.35, 'high' => 1.6],
                ['label' => '201–300 m²',      'low' => 1.6,  'high' => 2.0],
                ['label' => 'Över 300 m²',     'quote' => true],
            ],
            'addons' => [
                'moisture' => [
                    'label' => 'Tillval: fuktmätning i hela huset',
                    'low' => 2000, 'high' => 3000,
                    'appliesTo' => ['overlatelsebesiktning', 'brf', 'statusbesiktning'],
                ],
                'bathroom' => [
                    'label' => 'Extra badrum (per st)',
                    'low' => 700, 'high' => 1200, 'max' => 3,
                    'appliesTo' => ['overlatelsebesiktning', 'brf', 'statusbesiktning'],
                ],
            ],
            'outside' => 'Utanför Stockholms län: reseersättning enligt offert.',
            'round'   => 100,
        ],
    ],
];
