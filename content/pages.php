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
        'title'       => 'Besiktningsman i Stockholm',
        'description' => 'Begär offert på överlåtelsebesiktning, badrum, fuktutredning, slutbesiktning eller BRF i Stockholm. Ange tjänst och kommun i formuläret.',
        'h1'          => 'Besiktningsman i Stockholm',
        'lead'        => '',
        // Startsidans FAQ: renderas av index.php och blir FAQPage JSON-LD.
        'faq' => [
            ['q' => 'Vad avgör priset på en besiktning?', 'a' => 'Typ av uppdrag, fastighetens storlek, underlag och resor påverkar offerten. Be om omfattning och eventuella tillägg innan du bokar.'],
            ['q' => 'Vad behöver jag ange för att begära offert?', 'a' => 'Välj tjänst och ange kommun, namn och telefon. Du kan även lämna e-post och en kort beskrivning av ärendet.'],
            ['q' => 'Blir besiktningen bokad när jag skickar formuläret?', 'a' => 'Nej. Formuläret är en offertförfrågan. Omfattning, utförare, tid och villkor behöver stämmas av innan du beställer.'],
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
        'title' => 'Pris på besiktning – begär offert',
        'description' => 'Vad påverkar priset på besiktning av hus, badrum eller BRF? Se vilka uppgifter offerten behöver och begär pris för ditt uppdrag.',
        'h1' => 'Vad kostar en besiktning?',
        'lead' => 'Priset behöver anpassas till uppdragets omfattning. Begär en offert för ditt ärende.',
        'sections' => [
            ['h2' => 'Det här påverkar offerten', 'body' => ['Typ av besiktning, fastighetens storlek och skick, tillgängliga handlingar och resor påverkar arbetet. Mätningar eller andra tillägg ska specificeras.']],
            ['h2' => 'Beskriv uppdraget', 'body' => ['Ange tjänst och kommun. Lägg gärna till byggår, ungefärlig yta och vad du vill undersöka. För en BRF är fastighetens storlek och tillgängligt underlag relevant.']],
            ['h2' => 'Stäm av innan du bokar', 'body' => ['Be om ett skriftligt pris med omfattning, moms, eventuella tillägg och resor. Kontrollera även vem som utför uppdraget och hur resultatet dokumenteras.']],
        ],
        'stub' => false, 'changefreq' => 'monthly', 'priority' => '0.8',
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
        'title' => 'Om Besiktningsmannen – offertförmedling',
        'description' => 'Besiktningsmannen.se förmedlar offertförfrågningar om besiktning. Läs om sajtens operatör och vad du bör stämma av innan du beställer ett uppdrag.',
        'h1' => 'Om Besiktningsmannen',
        'lead' => 'En väg till en offert på besiktning av hus, badrum, entreprenad eller BRF.',
        'sections' => [
            ['h2' => 'Så fungerar sajten', 'body' => ['Besiktningsmannen.se drivs av Marklund Sales & Marketing AB och förmedlar offertförfrågningar. Ange vilken hjälp du söker och i vilken kommun.']],
            ['h2' => 'Utföraren och uppdraget', 'body' => ['Kontrollera utförarens erfarenhet, relevanta behörigheter och ansvarsförsäkring inför beställningen. Offerten ska beskriva uppdragets omfattning, pris och villkor.']],
            ['h2' => 'Kontakt och personuppgifter', 'body' => ['Du når oss via kontaktsidan. Integritetspolicyn beskriver hur uppgifter från en offertförfrågan hanteras.']],
        ],
        'stub' => false, 'changefreq' => 'yearly', 'priority' => '0.6',
    ],

    '/kontakt/' => [
        'title'       => 'Kontakt – begär offert på besiktning',
        'description' => 'Begär offert på besiktning i Stockholms län. Beskriv ditt ärende i formuläret '
                       . 'och ange tjänst, kommun och kontaktuppgifter för ditt uppdrag.',
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
                    'Förfrågan lämnas till en besiktningsman för att hantera ditt ärende. '
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

    '/for-besiktningsforetag/' => [
        'title' => '[B2B_TITLE]',
        'description' => 'Utkast till information för besiktningsföretag om förfrågningar från Besiktningsmannen. Upplägg, pris och fördelning behöver beslutas före publicering.',
        'h1' => '[B2B_TITLE]',
        'lead' => 'Utkast för granskning. Inte ett erbjudande eller en beställningssida.',
        'sections' => [
            ['h2' => 'Förfrågningar om besiktning', 'body' => ['Förslaget är att förmedla förfrågningar med angiven tjänst, kommun och kontaktuppgifter till lämpliga besiktningsföretag.']],
            ['h2' => 'Beslut som återstår', 'body' => ['Pris per förfrågan: TBD. Antal mottagare: TBD. Exklusivitet: TBD. Godkännande, kreditering och vilka områden som erbjuds behöver fastställas.']],
        ],
        'stub' => false, 'noindex' => true,
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
