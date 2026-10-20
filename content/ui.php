<?php
/**
 * Every UI string on the site, in one file — the single-locale layer. Nothing
 * in partials/ or templates/ contains a visible word; they all read from here,
 * so translating the site is this one file plus content/*.
 *
 * Svenska, du-tilltal, sakligt. Inga superlativer och inga påståenden som
 * kräver bekräftelse (antal uppdrag, år i branschen, recensioner).
 *
 * Nothing here may name a month, a year, a price or a client: strings must stay
 * true without anyone remembering to edit them.
 */

declare(strict_types=1);

return [

    'clusters' => [
        'kop'        => 'Köpa eller sälja bostad',
        'fukt'       => 'Fukt och skador',
        'bygg'       => 'Bygg, renovering och BRF',
    ],

    'cluster_leads' => [
        'kop'  => 'Besiktning inför köp eller försäljning av hus och bostadsrätt.',
        'fukt' => 'När du misstänker fukt, mögel eller en dold skada.',
        'bygg' => 'Kontroll av byggprojekt, renoveringar och föreningens fastighet.',
    ],

    'nav' => [
        'home'         => 'Start',
        'services'     => 'Tjänster',
        'pricing'      => 'Priser',
        'tools'        => 'Priskalkylator',
        'guides'       => 'Guider',
        'about'        => 'Om oss',
        'blog'         => 'Artiklar',
        'contact'      => 'Kontakt',
        'privacy'      => 'Integritetspolicy',
        'terms'        => 'Villkor',
        'menu'         => 'Meny',
        'close'        => 'Stäng',
        'open_menu'    => 'Öppna menyn',
        'close_menu'   => 'Stäng menyn',
        'skip'         => 'Hoppa till innehållet',
        'firm'         => 'Besiktningsmännen',
        'all_services' => 'Se alla tjänster',
    ],

    'cta' => [
        'quote'         => 'Begär offert',
        'whatsapp'      => 'WhatsApp',
        'whatsapp_long' => 'Skriv på WhatsApp',
        'consult'       => 'Begär offert',
        'contact'       => 'Kontakta oss',
        'see_included'  => 'Se våra tjänster',
        'talk'          => 'Beskriv ditt ärende',
        'call'          => 'Ring',
    ],

    // WhatsApp används inte på sajten (site.whatsapp = null), men nycklarna
    // måste finnas för mallens partials.
    'whatsapp' => [
        'menu_title' => 'Vad gäller det?',
        'menu_note'  => 'Vi öppnar WhatsApp med ett färdigt meddelande som du kan ändra.',
        'other'      => 'Något annat',
        'this_page'  => 'Det du läser om',
        'open_menu'  => 'Öppna WhatsApp-alternativ',
        'close_menu' => 'Stäng',
    ],

    'home' => [
        'eyebrow'   => 'Besiktning i Stockholms län',
        'lead'      => 'Berätta vad som ska besiktigas. Vi matchar dig med upp till tre besiktningsmän som tar uppdrag i ditt område, så jämför du pris och upplägg innan du bestämmer dig.',
        'trust'     => ['Kostnadsfritt', 'Utan förpliktelse', 'Du väljer själv'],

        'hero_note_title' => 'En förfrågan, upp till 3 offerter',
        'hero_note_text'  => 'Jämför pris, omfattning och när protokollet levereras.',
        'ai_label'        => 'AI-genererad bild',

        'strip' => [
            ['title' => 'Upp till 3 offerter', 'text' => 'Från besiktningsmän i ditt område'],
            ['title' => 'Kostnadsfritt för dig', 'text' => 'Inga avgifter för att begära offert'],
            ['title' => 'Hela Stockholms län', 'text' => 'Villa, bostadsrätt, BRF och nybygge'],
        ],

        'services_eyebrow' => 'Tjänster',
        'services_title'   => 'Vad behöver du hjälp med?',
        'services_lead'    => 'Läs mer om varje typ av besiktning, eller välj direkt i formuläret ovan.',
        'services_more'    => 'Fler tjänster',
        'services_go'      => 'Läs mer',
        'cards' => [
            'husbesiktning'         => 'Vilken besiktning av hus behöver du? Översikt, priser och offerter.',
            'overlatelsebesiktning' => 'Inför köp eller försäljning av hus. Husets synliga skick och risker dokumenteras.',
            'lagenhetsbesiktning'   => 'För dig som köper bostadsrätt eller vill kontrollera en renoverad lägenhet.',
            'badrumsbesiktning'     => 'Kontroll av nyrenoverat badrum eller våtrum inför köp.',
            'fuktutredning'         => 'När fukt eller mögel återkommer eller orsaken är oklar.',
            'fuktmatning'           => 'Mätning av fukt i ett visst material eller utrymme.',
            'takbesiktning'         => 'Takets skick inför underhåll eller takbyte.',
            'statusbesiktning'      => 'En samlad bild av husets skick innan du planerar renovering.',
            'brf'                   => 'Tekniskt underlag för styrelser och förvaltare.',
        ],

        'unsure_title' => 'Vet du inte vilken besiktning du behöver?',
        'unsure_text'  => 'Välj "Något annat" i formuläret och beskriv bostaden och vad som har hänt. Vi hjälper dig att hitta rätt typ av besiktning.',

        'compare_eyebrow' => 'Jämför rätt',
        'compare_title'   => 'Jämför besiktning: fem saker att titta på',
        'compare_lead'    => 'Priset säger lite om du inte vet vad som ingår. Ställ offerterna bredvid varandra och titta på det här.',
        'compare_items'   => [
            ['title' => 'Omfattning', 'text' => 'Vilka utrymmen ingår, till exempel vind, krypgrund och tak.'],
            ['title' => 'Metod', 'text' => 'Okulär besiktning eller även fuktmätning och provtagning.'],
            ['title' => 'Protokoll', 'text' => 'Hur utlåtandet ser ut och när du får det.'],
            ['title' => 'Behörighet och försäkring', 'text' => 'Fråga efter certifiering och ansvarsförsäkring.'],
            ['title' => 'Totalpris', 'text' => 'Inklusive moms, resa och eventuella tillägg.'],
        ],
        'compare_cta'     => 'Få offerter att jämföra',
        'compare_guide'   => 'Läs guiden: så jämför du besiktningsofferter',

        'area_eyebrow' => 'Område',
        'area_title'   => 'Besiktningsföretag i Stockholm och hela länet',
        'area_text' => 'Söker du ett besiktningsföretag eller husbesiktning i Stockholm? Ange ort eller kommun i förfrågan, så går den till besiktningsmän som tar uppdrag där. Resevillkor ska framgå av offerten innan du bokar.',

        'prices_eyebrow' => 'Priser',
        'prices_title'   => 'Pris utifrån ditt uppdrag',
        'prices_text'    => 'Priset beror på bostadens storlek, typ och vad som ska undersökas. '
                          . 'Be om omfattning, pris och eventuella tillägg i offerten.',
        'prices_cta'     => 'Se priser',

        'guides_eyebrow' => 'Guider',
        'faq_title' => 'Vanliga frågor',
        'final_title' => 'Redo att jämföra?',
        'final_text'  => 'En förfrågan, upp till 3 offerter. Kostnadsfritt och utan förpliktelse.',
        'final_cta'   => 'Få offerter nu',
        'mobile_cta'  => 'Få offerter',

        /* Flerstegsformuläret i hjälten (partials/lead-steps.php). */
        'form' => [
            'title'      => 'Begär offerter',
            'step_label' => 'Steg %d av %d',
            'step1'      => 'Vad behöver besiktigas?',
            'step2'      => 'Var och när?',
            'step3'      => 'Vart ska offerterna skickas?',
            'options'    => [
                'overlatelsebesiktning' => 'Hus inför köp eller försäljning',
                'lagenhetsbesiktning'   => 'Lägenhet / bostadsrätt',
                'badrumsbesiktning'     => 'Badrum eller våtrum',
                'fuktutredning'         => 'Fukt eller mögel',
                'takbesiktning'         => 'Tak',
                'statusbesiktning'      => 'Husets skick (status)',
                'slutbesiktning'        => 'Nybygge eller renovering',
                'brf'                   => 'BRF eller fastighet',
                'annat'                 => 'Något annat',
            ],
            'next'       => 'Fortsätt',
            'back'       => 'Tillbaka',
            'submit'     => 'Skicka och få offerter',
            'micro'      => 'Tar ungefär en minut · Kostnadsfritt',
            'location_hint' => 'T.ex. Nacka',
            'message_hint'  => 'T.ex. 1970-talsvilla, tillträde i maj',
        ],
    ],

    'panel' => [
        'title' => 'Besiktningsprotokoll',
        'badge' => 'Klart',
        'tiles' => [
            ['label' => 'Okulär besiktning',  'value' => 'Utförd'],
            ['label' => 'Fuktmätning',        'value' => 'Utförd'],
            ['label' => 'Protokoll med foton', 'value' => 'Skickat'],
        ],
        'foot'  => 'Genomgång av resultatet',
        'note'  => 'Exempel',
    ],

    'about' => [
        'eyebrow' => 'Varför oss',
        'title'   => 'Ett tydligt underlag för din besiktning.',
        'text' => 'Besiktningsmännen förmedlar din förfrågan till upp till tre besiktningsmän. Uppdragets omfattning, utförare och villkor ska framgå av offerten innan du beställer.',
        'credentials' => ['Tydlig beskrivning av uppdraget', 'Offertens omfattning och villkor före bokning'],
        'badge_note'     => 'i branschen',
        'badge_fallback' => 'Besiktning',
    ],

    'process' => [
        'eyebrow' => 'Så funkar det',
        'title'   => 'Från förfrågan till protokoll',
        'steps'   => [
            [
                'title' => 'Du beskriver ärendet',
                'text'  => 'Vad som ska besiktigas, var bostaden ligger och hur vi når dig. Det tar ungefär en minut.',
            ],
            [
                'title' => 'Vi matchar dig',
                'text'  => 'Förfrågan går till upp till tre besiktningsmän som tar den typen av uppdrag i ditt område.',
            ],
            [
                'title' => 'Du jämför och väljer',
                'text'  => 'Omfattning, pris och tid framgår av offerterna. Du bestämmer själv om och vem du anlitar.',
            ],
            [
                'title' => 'Besiktning och protokoll',
                'text'  => 'Utföraren gör de kontroller du beställt och dokumenterar iakttagelserna i ett protokoll.',
            ],
        ],
    ],

    'industries' => [
        'eyebrow' => 'Vi besiktigar',
        'title'   => 'Bostäder och fastigheter vi besiktigar',
        'lead'    => 'Från lägenheten du ska köpa till föreningens stambyte.',
        'items'   => [
            'Villa och radhus',
            'Bostadsrätt',
            'Fritidshus',
            'Nyproduktion',
            'Badrum och våtrum',
            'BRF och flerbostadshus',
        ],
    ],

    'testimonials' => [
        'eyebrow' => 'Omdömen',
        'title'   => 'Vad kunderna säger',
    ],

    'services_hub' => [
        'eyebrow'      => 'Tjänster',
        'title'        => 'Besiktningar för hus, bostadsrätt och BRF.',
        'lead'         => 'Välj tjänst och beskriv vad du vill ha undersökt.',
        'unsure_title' => 'Osäker på vilken besiktning du behöver?',
        'unsure_text'  => 'Beskriv ärendet så hjälper vi dig att avgränsa förfrågan.',
        'unsure_cta'   => 'Begär offert',
    ],

    'cta_band' => [
        'eyebrow' => 'Offert',
        'title'   => 'Få offert från upp till tre besiktningsmän.',
        'lead'    => 'Ange tjänst och kommun. Kostnadsfritt, och förfrågan innebär ingen bokning.',
    ],

    'form' => [
        'legend'          => 'Begär offert',
        'name'            => 'Namn',
        'service' => 'Vad behöver du hjälp med?',
        'service_hint' => 'Välj tjänst',
        'service_other' => 'Annat / hjälp att välja',
        'errors' => [
            'phone' => 'Ange ett giltigt telefonnummer.',
            'email' => 'Kontrollera e-postadressen eller lämna fältet tomt.',
            'name' => 'Ange ditt namn.',
            'location' => 'Ange ort eller kommun.',
            'service' => 'Välj en tjänst eller Annat.',
            'origin' => 'Ladda om sidan och försök igen.',
            'rate' => 'Du har skickat flera förfrågningar. Vänta en stund och försök igen.',
            'storage' => 'Förfrågan kunde inte sparas. Försök igen eller använd kontaktsidan.',
            'failed' => 'Försök igen om en stund, eller ring +46 73 633 38 75.',
        ],
        'company'         => 'Förening eller företag (valfritt)',
        'location'        => 'Ort eller kommun',
        'location_hint'   => 'T.ex. Nynäshamn',
        'property'        => 'Typ av bostad',
        'property_none'   => 'Välj …',
        'property_types'  => [
            'villa'       => 'Villa eller radhus',
            'bostadsratt' => 'Bostadsrätt',
            'fritidshus'  => 'Fritidshus',
            'brf'         => 'BRF eller flerbostadshus',
            'nybygge'     => 'Nybygge eller tillbyggnad',
            'annat'       => 'Annat',
        ],
        'date'            => 'Önskat datum (valfritt)',
        'timing'          => 'När?',
        'timing_options'  => [
            'snarast'   => 'Så snart som möjligt',
            '2-veckor'  => 'Inom 2 veckor',
            'manad'     => 'Inom en månad',
            'flexibel'  => 'Jag är flexibel',
        ],
        'phone'           => 'Telefon',
        'phone_hint'      => 'T.ex. 070-123 45 67',
        'email'           => 'E-post (valfritt)',
        'need'            => 'Vad gäller det?',
        'message'         => 'Kort beskrivning (valfritt)',
        'message_hint'    => 'T.ex. adress eller område, byggår, boyta och vad du vill ha undersökt …',
        'submit'          => 'Begär offert',
        'sending'         => 'Skickar …',
        'privacy_note'    => 'Vi använder dina uppgifter för att besvara förfrågan och lämnar dem till '
                           . 'upp till tre besiktningsmän som kan lämna offert. Läs mer i vår',
        'success_title'   => 'Tack! Vi har fått din förfrågan.',
        'success_text'    => 'Vi följer upp förfrågan och stämmer av vad du behöver.',
        'error_title'     => 'Förfrågan kunde inte skickas.',
        'error_text'      => 'Försök igen om en stund, eller ring +46 73 633 38 75.',
        'error_phone'     => 'Ange ett telefonnummer så att vi kan nå dig.',
        'required'        => 'obligatoriskt',
        'thanks_next'     => 'Nästa steg',
        'thanks_whatsapp' => 'Vill du komplettera? Använd kontaktsidan.',
        'remind_title'    => 'Påminnelse',
        'remind_text'     => 'Vi påminner dig när det är dags.',
        'remind_phone'    => 'Telefon',
        'remind_submit'   => 'Påminn mig',
        'remind_ok'       => 'Klart, vi hör av oss.',
    ],

    // Knapparna i formuläret. Varje nyckel behöver en post i
    // content/lead-values.php 'needs' — verify.sh kontrollerar det.
    'needs' => [
        'kop'        => 'Köpa eller sälja',
        'badrum'     => 'Badrum',
        'fukt'       => 'Fukt eller skada',
        'renovering' => 'Slutbesiktning',
        'brf'        => 'BRF eller entreprenad',
        'annat'      => 'Annat',
    ],

    'contact' => [
        'eyebrow' => 'Kontakt',
        'title'   => 'Beskriv ditt ärende.',
        'lead'    => 'Ange tjänst, kommun och kontaktuppgifter för en offertförfrågan.',
        'address' => 'Adress',
        'hours'   => 'Öppettider',
        'phone'   => 'Telefon',
        'email'   => 'E-post',
        'expect'  => 'Så går det till',
        'steps'   => [
            'Vi går igenom förfrågan och stämmer av uppdraget.',
            'Utförare, pris, omfattning och tid ska framgå innan du bokar.',
            'Avtala hur resultatet ska dokumenteras och gås igenom.',
        ],
    ],

    'content_nav' => ['title' => 'På den här sidan', 'scope' => 'Omfattning', 'price' => 'Pris', 'questions' => 'Vanliga frågor', 'sources' => 'Källor och vidare läsning', 'source_note' => 'Allmän information. Uppdragets avtal och fastighetens förutsättningar styr den konkreta bedömningen.', 'guides' => 'Förbered dig med våra guider', 'updated' => 'Uppdaterad'],

    'service' => [
        'includes'     => 'Exempel på moment – omfattning enligt offert',
        'price_all'    => 'Se priser för alla tjänster',
        'price_cta'    => 'Få offerter och jämför',
        'price_col_what'  => 'Uppdrag',
        'price_col_price' => 'Ungefärligt pris',
        'excludes'     => 'Det här ingår inte',
        'we_need'      => 'Bra att ha till besiktningen',
        'benefits'     => 'Därför lönar det sig',
        'faq'          => 'Vanliga frågor',
        'related'      => 'Relaterade tjänster',
        'guides'       => 'Läs mer i guiden',
        'articles'     => 'Relaterad artikel',
        'form_eyebrow' => 'Offert',
        'form_lead'    => 'Beskriv ärendet och ange kommun för att begära offert.',
        'breadcrumb'   => 'Brödsmulor',
    ],

    'segment' => [
        'traps_title'  => 'Vanliga misstag',
        'bundle_title' => 'Det här brukar ingå',
        'form_eyebrow' => 'Offert',
        'form_lead'    => 'Beskriv ärendet så återkommer vi med ett fast pris.',
    ],

    'tools' => [
        'reviewed_prefix' => 'Priserna sågs över',
        'orientativo'     => 'Kalkylatorn ger ett ungefärligt pris. Det slutliga priset står i offerten.',
        'calculate'       => 'Räkna',
        'result_title'    => 'Ungefärligt pris',
        'use_result'      => 'Använd resultatet i offertförfrågan',
        'need_js'         => 'Kalkylatorn kräver JavaScript.',
        'restart'         => 'Börja om',
    ],

    'guide' => [
        'reviewed_prefix'       => 'Redaktionellt uppdaterad',
        'orientativo'           => 'Guiden är allmän information. Ditt hus kan kräva en besiktning på plats.',
        'delegate_eyebrow'      => 'Besiktning',
        'delegate_title'        => 'Vill du att en besiktningsman tittar på det?',
        'delegate_lead'         => 'Beskriv vad du har sett så återkommer vi med förslag och fast pris '
                                 . 'utifrån ditt uppdrag.',
        'delegate_form_heading' => 'Begär offert',
        'related'               => 'Fler guider',
    ],

    'article' => [
        'reading_time' => 'min läsning',
        'updated'      => 'Uppdaterad',
        'read_more'    => 'Läs artikeln',
    ],

    'hub' => [
        'empty' => 'Här finns inget publicerat ännu.',
    ],

    'pricing' => [
        'quote'     => 'Offert',
        'per_month' => 'per månad',
        'from'      => 'från',
        'cta'       => 'Begär offert',
        'note'      => 'Priserna gäller privatpersoner inklusive moms i Stockholms län. '
                     . 'Det slutliga priset står i offerten.',
    ],

    'placeholder' => [
        'notice' => 'Vi arbetar på den här sidan.',
        'action' => 'Under tiden kan du begära offert så hjälper vi dig direkt.',
    ],

    'error404' => [
        'title' => 'Sidan finns inte',
        'lead'  => 'Länken kan ha ändrats. Här är de mest besökta sidorna.',
    ],

    'footer' => [
        'blurb'    => 'Besiktningsman i Stockholms län. Överlåtelsebesiktning, badrum, fukt, '
                    . 'slutbesiktning och BRF.',
        'rights'   => 'Alla rättigheter förbehållna.',
        'contact'  => 'Kontakt',
        'operator' => 'Sajten drivs av',
    ],
];
