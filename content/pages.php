<?php
/**
 * The static (non-service) pages, keyed by path. Services live in
 * content/services.php, tools in content/tools.php, guides in content/guias.php,
 * segment pages in content/segmentos.php; this is everything else with a URL.
 *
 *   title        string  <title> without the ' | <site name>' suffix
 *   description  string  120–155 chars, unique across the whole site
 *   h1           string  visible heading
 *   lead         string  one-line intro under the H1
 *   sections     array   optional prose blocks for templates/page.php:
 *                        [['h2' => ..., 'body' => [paragraph, ...]], ...]
 *   stub         bool    true while the page is still a placeholder: it renders
 *                        through templates/page-stub.php, is marked noindex and
 *                        stays out of sitemap.php. The phase that writes the
 *                        page sets this to false.
 *   noindex      bool    the page exists but is not a URL of its own (/404).
 *                        Excluded from sitemap.php and from the route contract.
 *   changefreq   string  sitemap hint
 *   priority     string  sitemap hint
 *
 * Every entry here needs a route file (<path>/index.php) except '/404', which
 * is served by 404.php.
 */

declare(strict_types=1);

return [
    '/' => [
        'title'       => 'Certifierad besiktningsman i Stockholm',
        'description' => 'Certifierad besiktningsman i Stockholms län: överlåtelsebesiktning, '
                       . 'badrumsbesiktning, fuktutredning, slutbesiktning och BRF. Begär offert.',
        'h1'          => 'Besiktningsman i Stockholm',
        'lead'        => '',
        // Startsidans FAQ: renderas av index.php och blir FAQPage JSON-LD.
        'faq'         => [
            [
                'q' => 'Vad kostar en besiktning av hus?',
                'a' => 'Priset beror på husets storlek, byggår och vad som ska undersökas. Du får alltid '
                     . 'ett fast pris i offerten innan något bokas. Se ungefärliga priser på prissidan.',
            ],
            [
                'q' => 'Vem brukar beställa besiktningen vid ett husköp?',
                'a' => 'Oftast köparen, eftersom köparen har undersökningsplikt. Säljaren kan också '
                     . 'beställa en överlåtelsebesiktning före försäljningen och visa den för spekulanter.',
            ],
            [
                'q' => 'Vad är skillnaden mellan överlåtelsebesiktning och statusbesiktning?',
                'a' => 'En överlåtelsebesiktning görs i samband med köp eller försäljning och är kopplad '
                     . 'till undersökningsplikten. En statusbesiktning är en genomgång av skicket när du '
                     . 'vill planera underhåll eller veta hur huset mår.',
            ],
            [
                'q' => 'Hur lång tid tar besiktningen?',
                'a' => 'För en villa några timmar på plats, beroende på storlek och vad som ska '
                     . 'undersökas. Protokollet med foton skickas därefter.',
            ],
            [
                'q' => 'Tar ni uppdrag utanför Stockholm?',
                'a' => 'Vi tar uppdrag i hela Stockholms län och utgår från Stockholm och Nynäshamn. '
                     . 'Uppdrag i övriga Sverige tar vi efter överenskommelse, med resekostnad i offerten.',
            ],
            [
                'q' => 'Är besiktningsmannen certifierad?',
                'a' => 'Ja. Uppdragen utförs av en certifierad besiktningsman (SBR/KIWA) som är oberoende '
                     . 'av mäklare, säljare och entreprenörer.',
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'weekly',
        'priority'    => '1.0',
    ],

    '/tjanster/' => [
        'title'       => 'Tjänster – besiktning av hus och BRF',
        'description' => 'Alla besiktningar vi utför i Stockholms län: köp av hus och bostadsrätt, '
                       . 'badrum, fukt och skador, slutbesiktning, entreprenad och BRF.',
        'h1'          => 'Tjänster',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.9',
    ],

    // Fas S2 skriver sidan (prislista + kalkylator) och sätter stub => false.
    '/priser/' => [
        'title'       => 'Vad kostar besiktning av hus? Priser',
        'description' => 'Priser för besiktning av hus, bostadsrätt, badrum och fukt i Stockholms '
                       . 'län. Se ungefärligt pris och begär en offert med fast pris.',
        'h1'          => 'Pris på besiktning av hus',
        'lead'        => 'Från-priser inklusive moms för privatpersoner. Fast pris i offerten.',
        'stub'        => true,
        'changefreq'  => 'monthly',
        'priority'    => '0.8',
    ],

    '/guider/' => [
        'title'       => 'Guider om fukt, mögel och besiktning',
        'description' => 'Guider om fuktskador, mögel i hus, fuktmätning och tvister med hantverkare – '
                       . 'så känner du igen problemen och vet när du ska anlita besiktningsman.',
        'h1'          => 'Guider',
        'lead'        => 'Fakta om fukt, mögel och besiktning – skrivet för husägare och köpare.',
        'stub'        => false,
        'changefreq'  => 'monthly',
        'priority'    => '0.7',
    ],

    // Fas S4 skriver sidan och sätter stub => false.
    '/om-oss/' => [
        'title'       => 'Certifierad och oberoende besiktningsman',
        'description' => 'Om Besiktningsmannen: certifierade besiktningsmän (SBR/KIWA) i Stockholms '
                       . 'län, oberoende av mäklare och entreprenörer. Så arbetar vi.',
        'h1'          => 'Certifierad och oberoende besiktningsman',
        'lead'        => '',
        'stub'        => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.6',
    ],

    '/kontakt/' => [
        'title'       => 'Kontakt – begär offert på besiktning',
        'description' => 'Begär offert på besiktning i Stockholms län. Beskriv ditt ärende i formuläret '
                       . 'så återkommer vi med fast pris inom en arbetsdag.',
        'h1'          => '',
        'lead'        => '',
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.8',
    ],

    '/integritetspolicy/' => [
        'title'       => 'Integritetspolicy',
        'description' => 'Så behandlar Besiktningsmannen personuppgifterna du lämnar i formuläret, vem '
                       . 'som får del av dem och hur du begär utdrag, rättelse eller radering.',
        'h1'          => 'Integritetspolicy',
        'lead'        => 'Gäller personuppgifter som lämnas via besiktningsmannen.se.',
        'sections'    => [
            [
                'h2'   => 'Personuppgiftsansvarig',
                'body' => [
                    'Besiktningsmannen.se drivs av Marklund Sales & Marketing AB, som är '
                        . 'personuppgiftsansvarig för de uppgifter du lämnar på webbplatsen.',
                ],
            ],
            [
                'h2'   => 'Vilka uppgifter vi behandlar',
                'body' => [
                    'Det du skriver i offertformuläret: namn, telefonnummer, e-post, ort, typ av '
                        . 'bostad, önskat datum och din beskrivning av ärendet. Dessutom vilken sida '
                        . 'formuläret skickades från och eventuella kampanjparametrar i länken (till '
                        . 'exempel utm-taggar).',
                    'Fyll inte i känsliga personuppgifter, till exempel om hälsa, i meddelandefältet.',
                ],
            ],
            [
                'h2'   => 'Varför vi behandlar dem',
                'body' => [
                    'För att besvara din förfrågan, ta fram en offert och förmedla uppdraget till en '
                        . 'besiktningsman. Den rättsliga grunden är åtgärder innan ett eventuellt avtal '
                        . 'ingås, och vårt berättigade intresse av att följa upp förfrågningar.',
                ],
            ],
            [
                'h2'   => 'Vem som får del av uppgifterna',
                'body' => [
                    'Förfrågan lämnas till den certifierade besiktningsman som ska utföra uppdraget. '
                        . 'Besiktningsmannen blir självständigt personuppgiftsansvarig för uppgifter '
                        . 'som behövs för uppdraget.',
                    'Vi använder också leverantörer som behandlar uppgifter för vår räkning, till '
                        . 'exempel webbhotell, kundregister (CRM) och e-posttjänst. De får bara '
                        . 'behandla uppgifterna enligt våra instruktioner. Vi säljer inte dina uppgifter.',
                ],
            ],
            [
                'h2'   => 'Hur länge vi sparar uppgifterna',
                'body' => [
                    'Förfrågningar som inte leder till uppdrag raderas senast 12 månader efter sista '
                        . 'kontakten. Uppgifter som behövs för bokföring sparas så länge lagen kräver.',
                ],
            ],
            [
                'h2'   => 'Dina rättigheter',
                'body' => [
                    'Du har rätt att begära utdrag, rättelse eller radering av dina uppgifter, att '
                        . 'invända mot behandlingen och att begära begränsning. Kontakta oss via '
                        . 'kontaktsidan. Du kan också lämna klagomål till Integritetsskyddsmyndigheten '
                        . '(IMY).',
                ],
            ],
            [
                'h2'   => 'Cookies och statistik',
                'body' => [
                    'Webbplatsen sätter inga cookies för marknadsföring utan ditt samtycke. Om vi '
                        . 'aktiverar besöksstatistik uppdateras den här texten först.',
                ],
            ],
        ],
        'stub'        => false,
        'changefreq'  => 'yearly',
        'priority'    => '0.3',
    ],

    '/404' => [
        'title'       => 'Sidan finns inte',
        'description' => 'Sidan du letade efter finns inte. Se våra besiktningstjänster i Stockholms '
                       . 'län eller begär offert så hjälper vi dig vidare.',
        'h1'          => 'Sidan finns inte',
        'lead'        => '',
        'stub'        => false,
        'noindex'     => true,
        'changefreq'  => 'yearly',
        'priority'    => '0.1',
    ],
];
