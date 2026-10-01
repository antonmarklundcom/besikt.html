<?php
/**
 * The service pages, keyed by slug. THIS SHAPE IS THE CONTRACT: a site fills the
 * empty keys and may add optional ones, but never renames or removes a key.
 * README.md ("Content model") documents it.
 *
 *   path             string   URL, always with a trailing slash. On a rebuild,
 *                             an existing URL is frozen for SEO — never change one.
 *   title            string   the page's own concept, used as the H1 fallback
 *   navLabel         string   short label for the mega-menu and the footer
 *   cluster          string   key into ui('clusters')
 *   parent           ?string  slug of the sub-hub this page sits under, if any
 *   seoTitle         string   <title> without the ' | <site name>' suffix,
 *                             <= 42 chars so the full title stays under 60
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, h2, lead
 *   includes         string[] the "qué incluye" checklist
 *   excludes         string[] the "qué no incluye" checklist (optional)
 *   weNeed           string[] the "qué necesitamos de usted" checklist (optional)
 *   sections         array    [['h2' => ..., 'body' => [paragraph, ...],
 *                              'items' => [['title' => ..., 'text' => ...]]], ...]
 *   benefits         array    [['title' => ..., 'text' => ...], ...]
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   cta              array    label (the button text)
 *   related          string[] sibling service slugs shown as cards
 *   guides           string[] guide slugs (content/guias.php)
 *   articles         string[] article slugs (content/blog.php)
 *   toolLinks        array    [['path' => ..., 'label' => ..., 'text' => ...], ...]
 *   keyword          string   huvudsökordet (docs/SEO-SOKORDSPLAN.md) — ska finnas
 *                             i seoTitle eller hero.h1. Valfri nyckel.
 *
 * T0/T1 skapade alla poster med title, meta, hero och en kort grund. Fas S1
 * skriver den fullständiga texten (sections, benefits, faq) per sökordsplanen.
 *
 * Every service slug also needs a record in content/lead-values.php — verify.sh
 * fails the build when one is missing, because a service page whose form is not
 * in the lead value model quietly sends untagged leads.
 */

declare(strict_types=1);

return [

    'overlatelsebesiktning' => [
        'path'            => '/overlatelsebesiktning/',
        'keyword'         => 'besiktning hus',
        'title'           => 'Överlåtelsebesiktning',
        'navLabel'        => 'Överlåtelsebesiktning (husköp)',
        'cluster'         => 'kop',
        'parent'          => null,
        'seoTitle'        => 'Överlåtelsebesiktning av hus och villa',
        'metaDescription' => 'Besiktning av hus inför köp eller försäljning i Stockholms län. Certifierad '
                           . 'besiktningsman, skriftligt protokoll med foton och fast pris i offerten.',
        'hero' => [
            'eyebrow' => 'Köpa eller sälja hus',
            'h1'      => 'Besiktning av hus inför köp – överlåtelsebesiktning',
            'h2'      => 'Vet vad du köper innan kontraktet är påskrivet.',
            'lead'    => 'En överlåtelsebesiktning hjälper dig att uppfylla undersökningsplikten. '
                       . 'Besiktningsmannen går igenom huset och förklarar vilka risker som finns.',
        ],
        'includes' => [
            'Genomgång av handlingar och frågor till säljaren',
            'Okulär besiktning av alla åtkomliga utrymmen',
            'Fuktindikering i våtrum och riskkonstruktioner',
            'Skriftligt protokoll med foton',
        ],
        'excludes' => ['Ingrepp i konstruktionen (provhål) utan säljarens medgivande'],
        'weNeed'   => ['Adress och tillträde till huset', 'Ritningar och tidigare protokoll om de finns'],
        'sections' => [],
        'benefits' => [],
        'faq' => [
            [
                'q' => 'Kan man köpa hus utan besiktning?',
                'a' => 'Det går, men köparen har undersökningsplikt och kan sällan klaga på fel som en '
                     . 'besiktning hade upptäckt. En överlåtelsebesiktning minskar den risken.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på husbesiktning'],
        'related'   => ['statusbesiktning', 'badrumsbesiktning', 'fuktutredning'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'statusbesiktning' => [
        'path'            => '/statusbesiktning/',
        'keyword'         => 'statusbesiktning',
        'title'           => 'Statusbesiktning',
        'navLabel'        => 'Statusbesiktning',
        'cluster'         => 'kop',
        'parent'          => null,
        'seoTitle'        => 'Statusbesiktning av hus och lägenhet',
        'metaDescription' => 'Statusbesiktning av villa, lägenhet eller fastighet: en genomgång av skicket '
                           . 'och vad som behöver åtgärdas. Certifierad besiktningsman i Stockholms län.',
        'hero' => [
            'eyebrow' => 'Skick och underhåll',
            'h1'      => 'Statusbesiktning av hus, lägenhet och fastighet',
            'h2'      => 'En samlad bild av skicket – och vad som behöver göras.',
            'lead'    => 'Statusbesiktningen passar när du vill veta hur huset mår, planera underhåll '
                       . 'eller inför en försäljning.',
        ],
        'includes' => [
            'Genomgång av tak, fasad, grund och installationer',
            'Kontroll av våtrum och fuktutsatta delar',
            'Prioriterad lista över åtgärder',
            'Skriftligt protokoll med foton',
        ],
        'excludes' => [],
        'weNeed'   => ['Adress och tillträde', 'Byggår och kända åtgärder'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på statusbesiktning'],
        'related'   => ['overlatelsebesiktning', 'brf'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'badrumsbesiktning' => [
        'path'            => '/badrumsbesiktning/',
        'keyword'         => 'badrumsbesiktning',
        'title'           => 'Badrumsbesiktning',
        'navLabel'        => 'Badrumsbesiktning',
        'cluster'         => 'fukt',
        'parent'          => null,
        'seoTitle'        => 'Badrumsbesiktning – badrum och våtrum',
        'metaDescription' => 'Badrumsbesiktning före köp, efter renovering eller för BRF. Kontroll av '
                           . 'tätskikt, golvbrunn och fukt, med protokoll. Stockholms län.',
        'hero' => [
            'eyebrow' => 'Badrum och våtrum',
            'h1'      => 'Badrumsbesiktning',
            'h2'      => 'Kontroll av badrummet före köp eller efter renovering.',
            'lead'    => 'Ett badrum med fel i tätskiktet kan ge stora fuktskador. Vi kontrollerar '
                       . 'badrummet och mäter fukt där det behövs.',
        ],
        'includes' => [
            'Kontroll av tätskikt, golvbrunn och fall mot brunn',
            'Fuktmätning i angränsande väggar och golv',
            'Bedömning mot branschregler för våtrum',
            'Protokoll med foton',
        ],
        'excludes' => [],
        'weNeed'   => ['Våtrumsintyg eller kvalitetsdokument om de finns'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på badrumsbesiktning'],
        'related'   => ['fuktutredning', 'slutbesiktning', 'brf'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'fuktutredning' => [
        'path'            => '/fuktutredning/',
        'keyword'         => 'fuktskada',
        'title'           => 'Fuktutredning och skadeutredning',
        'navLabel'        => 'Fuktutredning och skadeutredning',
        'cluster'         => 'fukt',
        'parent'          => null,
        'seoTitle'        => 'Fuktskada? Fuktutredning i Stockholm',
        'metaDescription' => 'Misstänkt fuktskada eller mögel? Fuktutredning och skadeutredning med '
                           . 'fuktmätning och skriftlig rapport, av certifierad besiktningsman.',
        'hero' => [
            'eyebrow' => 'Fukt, mögel och skador',
            'h1'      => 'Fuktskada i huset – fuktutredning och skadeutredning',
            'h2'      => 'Hitta orsaken innan du river eller renoverar.',
            'lead'    => 'Lukt, missfärgningar eller en vattenskada? En fuktutredning visar var fukten '
                       . 'finns, varifrån den kommer och vad som behöver göras.',
        ],
        'includes' => [
            'Fuktmätning och okulär undersökning',
            'Bedömning av orsak och omfattning',
            'Förslag på åtgärder',
            'Skriftlig rapport, användbar mot försäkringsbolag',
        ],
        'excludes' => ['Sanering och reparation'],
        'weNeed'   => ['Beskrivning av vad du har sett eller känt', 'Eventuella foton'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på fuktutredning'],
        'related'   => ['badrumsbesiktning', 'statusbesiktning'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'slutbesiktning' => [
        'path'            => '/slutbesiktning/',
        'keyword'         => 'slutbesiktning',
        'title'           => 'Slutbesiktning',
        'navLabel'        => 'Slutbesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Slutbesiktning av renovering och nybygge',
        'metaDescription' => 'Slutbesiktning av nybyggt hus, tillbyggnad eller renovering. Oberoende '
                           . 'besiktningsman som kontrollerar att arbetet är fackmässigt utfört.',
        'hero' => [
            'eyebrow' => 'Bygg och renovering',
            'h1'      => 'Slutbesiktning',
            'h2'      => 'Kontroll av arbetet innan du godkänner och betalar.',
            'lead'    => 'Vid slutbesiktningen kontrolleras att entreprenaden är utförd enligt avtal och '
                       . 'fackmässigt. Fel som noteras ska åtgärdas av entreprenören.',
        ],
        'includes' => [
            'Genomgång av avtal och handlingar',
            'Besiktning av utfört arbete på plats',
            'Besiktningsutlåtande med noterade fel',
            'Efterbesiktning av åtgärdade fel vid behov',
        ],
        'excludes' => [],
        'weNeed'   => ['Avtal med entreprenören', 'Ritningar och beskrivningar'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på slutbesiktning'],
        'related'   => ['entreprenadbesiktning', 'garantibesiktning', 'badrumsbesiktning'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'entreprenadbesiktning' => [
        'path'            => '/entreprenadbesiktning/',
        'keyword'         => 'entreprenadbesiktning',
        'title'           => 'Entreprenadbesiktning',
        'navLabel'        => 'Entreprenadbesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Entreprenadbesiktning AB 04 och ABT 06',
        'metaDescription' => 'Entreprenadbesiktning enligt AB 04, ABT 06 och ABS 18: förbesiktning, '
                           . 'slutbesiktning och särskild besiktning för beställare och BRF.',
        'hero' => [
            'eyebrow' => 'För beställare och BRF',
            'h1'      => 'Entreprenadbesiktning och förbesiktning',
            'h2'      => 'Besiktningsförrättare enligt AB 04, ABT 06 och ABS 18.',
            'lead'    => 'Från förbesiktning till slutbesiktning och garantibesiktning – en oberoende '
                       . 'besiktningsförrättare för hela entreprenaden.',
        ],
        'includes' => [
            'Förbesiktning och syn innan arbetet börjar',
            'Slutbesiktning och efterbesiktning',
            'Särskild besiktning vid behov',
            'Besiktningsutlåtande enligt standardavtalen',
        ],
        'excludes' => [],
        'weNeed'   => ['Kontrakt och förfrågningsunderlag', 'Tidplan för entreprenaden'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på entreprenadbesiktning'],
        'related'   => ['slutbesiktning', 'garantibesiktning', 'brf'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'garantibesiktning' => [
        'path'            => '/garantibesiktning/',
        'keyword'         => 'garantibesiktning',
        'title'           => 'Garantibesiktning',
        'navLabel'        => 'Garantibesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Garantibesiktning efter 2 och 5 år',
        'metaDescription' => 'Garantibesiktning två eller fem år efter slutbesiktningen, för villaägare och '
                           . 'BRF. Fel som visat sig under garantitiden dokumenteras.',
        'hero' => [
            'eyebrow' => 'Garantitid',
            'h1'      => 'Garantibesiktning',
            'h2'      => '2-årsbesiktning och 5-årsbesiktning.',
            'lead'    => 'Innan garantitiden går ut ska fel som visat sig dokumenteras, annars kan '
                       . 'rätten att kräva åtgärd gå förlorad.',
        ],
        'includes' => [
            'Genomgång av slutbesiktningsutlåtandet',
            'Besiktning av fel som uppkommit under garantitiden',
            'Utlåtande som underlag för krav mot entreprenören',
        ],
        'excludes' => [],
        'weNeed'   => ['Slutbesiktningsutlåtande', 'Lista över kända fel'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på garantibesiktning'],
        'related'   => ['entreprenadbesiktning', 'slutbesiktning', 'brf'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'brf' => [
        'path'            => '/brf/',
        'keyword'         => 'besiktningsman bostadsrätt',
        'title'           => 'Besiktning för BRF och bostadsrätt',
        'navLabel'        => 'BRF och bostadsrätt',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Besiktning för BRF och bostadsrätt',
        'metaDescription' => 'Besiktningsman för bostadsrättsföreningar och bostadsrättsköpare: '
                           . 'statusbesiktning, stambyte, garantibesiktning och besiktning inför köp.',
        'hero' => [
            'eyebrow' => 'Bostadsrättsföreningar',
            'h1'      => 'Besiktning av bostadsrätt och BRF',
            'h2'      => 'För styrelser och för dig som köper lägenhet.',
            'lead'    => 'Styrelsen behöver koll på fastigheten och på renoveringar i lägenheterna. '
                       . 'Köparen vill veta skicket på badrum och kök innan budgivningen.',
        ],
        'includes' => [
            'Statusbesiktning av föreningens fastighet',
            'Besiktning av medlemmars badrumsrenoveringar',
            'Besiktning vid stambyte och andra entreprenader',
            'Besiktning av lägenhet inför köp',
        ],
        'excludes' => [],
        'weNeed'   => ['Föreningens underhållsplan om den finns', 'Kontaktuppgift till fastighetsansvarig'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert för föreningen'],
        'related'   => ['underhallsplan', 'garantibesiktning', 'badrumsbesiktning'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],

    'underhallsplan' => [
        'path'            => '/brf/underhallsplan/',
        'keyword'         => 'underhållsplan brf',
        'title'           => 'Underhållsplan för BRF',
        'navLabel'        => 'Underhållsplan för BRF',
        'cluster'         => 'bygg',
        'parent'          => 'brf',
        'seoTitle'        => 'Underhållsplan BRF – krav och pris',
        'metaDescription' => 'Underhållsplan för bostadsrättsförening: statusbesiktning av fastigheten, '
                           . 'planerat underhåll per år och kostnader. Offert för din BRF.',
        'hero' => [
            'eyebrow' => 'Bostadsrättsföreningar',
            'h1'      => 'Underhållsplan för BRF',
            'h2'      => 'Underlag för avgifter, fonder och styrelsens beslut.',
            'lead'    => 'En underhållsplan visar vad som behöver göras i fastigheten, när och vad det '
                       . 'kostar. Den bygger på en statusbesiktning på plats.',
        ],
        'includes' => [
            'Statusbesiktning av fastigheten',
            'Plan för underhåll år för år',
            'Kostnadsuppskattning per åtgärd',
            'Genomgång med styrelsen',
        ],
        'excludes' => [],
        'weNeed'   => ['Befintlig underhållsplan och årsredovisning', 'Ritningar och tidigare utredningar'],
        'sections' => [],
        'benefits' => [],
        'faq'      => [],
        'cta'       => ['label' => 'Begär offert på underhållsplan'],
        'related'   => ['brf', 'statusbesiktning', 'entreprenadbesiktning'],
        'guides'    => [],
        'articles'  => [],
        'toolLinks' => [],
    ],
];
