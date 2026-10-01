<?php
/**
 * The lead value model. ONE record per source — every service slug, every tool
 * slug, every "¿qué necesita?" chip — plus the neutral default for pages that
 * are none of those.
 *
 * Nothing else on the site decides a tier, a conversion value or a WhatsApp
 * prefill: pages read this through lib/helpers.php's lead_value() and
 * whatsapp_text_for_page(), so retuning the model after a few weeks of GA4 data
 * is one edit here and no page changes.
 *
 * Record shape (every key required unless noted):
 *
 *   menuLabel     string   the short human name this source goes by in the
 *                          WhatsApp menu and in the CRM's `servicio` field. Page
 *                          titles are often frozen for SEO and too terse to read
 *                          as a menu option, which is why this exists
 *   need          string   key into ui('needs') — the chip this source maps to,
 *                          or a key in 'needLabels' below for sources with no
 *                          chip of their own
 *   tier          string   'A' | 'B' | 'C' — how much this source is worth
 *   whatsappText  string   the wa.me prefill. Names the service the visitor was
 *                          reading about — never a generic "consulta gratis"
 *   nextStep      string[] 2–3 lines shown after submit: what to have ready.
 *                          This is the second touch; it is worth reading
 *   crmTag        string   lands on the VenderCRM timeline as fields.etiqueta —
 *                          see the note on tags in enviar.php
 *   nextLink      ?array   optional ['path' => ..., 'label' => ...] tool or guide
 *                          offered alongside the thank-you text. The path must
 *                          resolve to a real route file; verify.sh checks it
 *
 * Adding a source: add a record keyed by its slug. Pages resolve by slug, so a
 * new guide or segment page joins the model by adding a key here.
 */

declare(strict_types=1);

/* Google Ads-konverteringsvärde per nivå, i kronor. Optimeringsvärden, inte
   intäktsprognoser: de ska få budgivningen att föredra en uppdragslead framför
   en kalkylatorlead ungefär 10:1. */
$tierValues = [
    'A' => 3000,
    'B' => 1500,
    'C' => 300,
];

$needLabels = [];

return [

    'tierValues' => $tierValues,
    'needLabels' => $needLabels,

    'whatsappMenu' => ['overlatelsebesiktning', 'badrumsbesiktning', 'fuktutredning'],

    'default' => [
            'menuLabel'    => 'Allmän förfrågan',
            'need'         => 'annat',
            'tier'         => 'C',
            'whatsappText' => 'Hej, jag har en fråga om besiktning.',
            'nextStep'     => [
                'Vi återkommer inom en arbetsdag.',
                'Beskriv gärna bostaden och vad du vill ha hjälp med.',
            ],
            'crmTag'       => 'allman-forfragan',
            'nextLink'     => null,
    ],

    'services' => [
        'overlatelsebesiktning' => [
            'menuLabel'    => 'Överlåtelsebesiktning',
            'need'         => 'kop',
            'tier'         => 'A',
            'whatsappText' => 'Hej, jag vill ha offert på en överlåtelsebesiktning av ett hus.',
            'nextStep'     => [
                'Vi återkommer med offert och förslag på tid inom en arbetsdag.',
                'Ha adressen, objektsbeskrivningen och eventuell säljarbesiktning redo.',
            ],
            'crmTag'       => 'overlatelsebesiktning',
            'nextLink'     => ['path' => '/priser/kalkylator/', 'label' => 'Räkna på priset'],
        ],
        'statusbesiktning' => [
            'menuLabel'    => 'Statusbesiktning',
            'need'         => 'kop',
            'tier'         => 'B',
            'whatsappText' => 'Hej, jag vill ha offert på en statusbesiktning.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha byggår, boyta och kända åtgärder redo.',
            ],
            'crmTag'       => 'statusbesiktning',
            'nextLink'     => ['path' => '/priser/kalkylator/', 'label' => 'Räkna på priset'],
        ],
        'badrumsbesiktning' => [
            'menuLabel'    => 'Badrumsbesiktning',
            'need'         => 'badrum',
            'tier'         => 'B',
            'whatsappText' => 'Hej, jag vill ha offert på en badrumsbesiktning.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha våtrumsintyg eller kvalitetsdokument redo om badrummet är nyrenoverat.',
            ],
            'crmTag'       => 'badrumsbesiktning',
            'nextLink'     => ['path' => '/guider/fuktskada-badrum/', 'label' => 'Läs: fuktskada i badrum'],
        ],
        'fuktutredning' => [
            'menuLabel'    => 'Fuktutredning / skadeutredning',
            'need'         => 'fukt',
            'tier'         => 'A',
            'whatsappText' => 'Hej, jag misstänker en fuktskada och vill ha en fuktutredning.',
            'nextStep'     => [
                'Vi återkommer inom en arbetsdag.',
                'Ta gärna foton på det du har sett och notera när det började.',
            ],
            'crmTag'       => 'fuktutredning',
            'nextLink'     => ['path' => '/guider/mogel-i-hus/', 'label' => 'Läs: mögel i hus'],
        ],
        'slutbesiktning' => [
            'menuLabel'    => 'Slutbesiktning',
            'need'         => 'renovering',
            'tier'         => 'A',
            'whatsappText' => 'Hej, jag vill ha offert på en slutbesiktning.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha avtalet med entreprenören och planerat datum för färdigställande redo.',
            ],
            'crmTag'       => 'slutbesiktning',
            'nextLink'     => ['path' => '/guider/tvist-med-hantverkare/', 'label' => 'Läs: tvist med hantverkare'],
        ],
        'entreprenadbesiktning' => [
            'menuLabel'    => 'Entreprenadbesiktning',
            'need'         => 'brf',
            'tier'         => 'A',
            'whatsappText' => 'Hej, vi behöver en besiktningsförrättare för en entreprenad.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha kontrakt, standardavtal (AB 04/ABT 06/ABS 18) och tidplan redo.',
            ],
            'crmTag'       => 'entreprenadbesiktning',
            'nextLink'     => ['path' => '/guider/tvist-med-hantverkare/', 'label' => 'Läs: tvist med hantverkare'],
        ],
        'garantibesiktning' => [
            'menuLabel'    => 'Garantibesiktning',
            'need'         => 'brf',
            'tier'         => 'B',
            'whatsappText' => 'Hej, jag vill ha offert på en garantibesiktning.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha slutbesiktningsutlåtandet och en lista över kända fel redo.',
            ],
            'crmTag'       => 'garantibesiktning',
            'nextLink'     => ['path' => '/guider/tvist-med-hantverkare/', 'label' => 'Läs: tvist med hantverkare'],
        ],
        'brf' => [
            'menuLabel'    => 'Besiktning för BRF',
            'need'         => 'brf',
            'tier'         => 'A',
            'whatsappText' => 'Hej, vi är en bostadsrättsförening och behöver en besiktningsman.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha föreningens namn, fastighetens storlek och underhållsplan redo om den finns.',
            ],
            'crmTag'       => 'brf',
            'nextLink'     => ['path' => '/priser/', 'label' => 'Se priser'],
        ],
        'underhallsplan' => [
            'menuLabel'    => 'Underhållsplan för BRF',
            'need'         => 'brf',
            'tier'         => 'A',
            'whatsappText' => 'Hej, vår förening behöver en underhållsplan.',
            'nextStep'     => [
                'Vi återkommer med offert inom en arbetsdag.',
                'Ha antal lägenheter, byggår och befintlig underhållsplan redo.',
            ],
            'crmTag'       => 'underhallsplan',
            'nextLink'     => ['path' => '/priser/', 'label' => 'Se priser'],
        ],
    ],

    /* Kalkylatorn på /priser/ (fas S2 skapar verktyget i content/tools.php). */
    'tools' => [
        'priskalkylator' => [
            'menuLabel'    => 'Priskalkylator',
                'need'         => 'kop',
                'tier'         => 'C',
                'whatsappText' => 'Hej, jag har räknat på priset och vill ha en offert.',
                'nextStep'     => [
                    'Vi återkommer med fast pris inom en arbetsdag.',
                    'Spara det du räknade fram – vi utgår från det i offerten.',
                ],
                'crmTag'       => 'priskalkylator',
                'nextLink'     => null,
        ],
    ],

    'needs' => [
        'kop'        => ['tier' => 'A', 'crmTag' => 'kop-salj',      'service' => 'overlatelsebesiktning'],
        'badrum'     => ['tier' => 'B', 'crmTag' => 'badrum',        'service' => 'badrumsbesiktning'],
        'fukt'       => ['tier' => 'A', 'crmTag' => 'fukt-skada',    'service' => 'fuktutredning'],
        'renovering' => ['tier' => 'A', 'crmTag' => 'slutbesiktning', 'service' => 'slutbesiktning'],
        'brf'        => ['tier' => 'A', 'crmTag' => 'brf-entreprenad', 'service' => 'brf'],
        'annat'      => ['tier' => 'C', 'crmTag' => 'allman-forfragan', 'service' => null],
    ],
];
