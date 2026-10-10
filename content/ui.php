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
        'firm'         => 'Besiktningsmannen',
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
        'eyebrow'   => 'Besiktning av hus, badrum och BRF',
        'h1_lead'   => 'Besiktningsman ',
        'h1_accent' => 'i Stockholm',
        'lead'      => 'Hus, badrum, fukt och BRF. Beskriv ditt ärende och begär offert på besiktning.',
        'trust' => ['Beskriv ärendet och önskat område', 'Ta ställning till offert innan du bokar'],

        'services_eyebrow' => 'Tjänster',
        'services_title'   => 'Vad behöver besiktigas?',
        'services_lead'    => 'Välj det som liknar ditt ärende. Osäker? Skriv några rader i formuläret, '
                            . 'så föreslår vi rätt typ av besiktning.',

        'unsure_title' => 'Vet du inte vilken besiktning du behöver?',
        'unsure_text'  => 'Beskriv bostaden och vad som har hänt. Vi svarar med ett förslag och ett pris.',

        'area_eyebrow' => 'Område',
        'area_title'   => 'Besiktning i ditt område',
        'area_text' => 'Ange ort eller kommun i förfrågan. Vi stämmer av vem som kan ta uppdraget och vilka resevillkor som gäller innan du bokar.',

        'prices_eyebrow' => 'Priser',
        'prices_title'   => 'Pris utifrån ditt uppdrag',
        'prices_text'    => 'Priset beror på bostadens storlek, typ och vad som ska undersökas. '
                          . 'Be om omfattning, pris och eventuella tillägg i offerten.',
        'prices_cta'     => 'Se priser',

        'faq_title' => 'Vanliga frågor om besiktning',
        'form_title' => 'Begär offert',
        'form_lead' => 'Beskriv ärendet. Förfrågan innebär ingen bokning.',
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
        'text' => 'Besiktningsmannen.se förmedlar förfrågningar. Uppdragets omfattning, utförare och villkor ska framgå av offerten innan du beställer.',
        'credentials' => ['Tydlig beskrivning av uppdraget', 'Offertens omfattning och villkor före bokning'],
        'badge_note'     => 'i branschen',
        'badge_fallback' => 'Besiktning',
    ],

    'process' => [
        'eyebrow' => 'Så går det till',
        'title'   => 'Från förfrågan till protokoll – fyra steg.',
        'steps'   => [
            [
                'title' => 'Du beskriver ärendet',
                'text'  => 'Fyll i formuläret: vad som ska besiktigas, var och när.',
            ],
            [
                'title' => 'Du får en offert',
                'text'  => 'Omfattning, pris och möjlig tid stäms av i offerten.',
            ],
            [
                'title' => 'Besiktning på plats',
                'text'  => 'Besiktningsmannen går igenom bostaden, mäter fukt där det behövs och fotograferar.',
            ],
            [
                'title' => 'Protokoll och genomgång',
                'text'  => 'Du får ett skriftligt protokoll och kan ställa frågor om resultatet.',
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
        'unsure_text'  => 'Beskriv ärendet så föreslår vi rätt tjänst och ett fast pris.',
        'unsure_cta'   => 'Begär offert',
    ],

    'cta_band' => [
        'eyebrow' => 'Offert',
        'title'   => 'Beskriv ditt ärende – få ett fast pris.',
        'lead'    => 'Ange tjänst och kommun. Förfrågan innebär ingen bokning.',
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
            'failed' => 'Försök igen om en stund, eller mejla oss via kontaktsidan.',
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
        'phone'           => 'Telefon',
        'phone_hint'      => 'T.ex. 070-123 45 67',
        'email'           => 'E-post (valfritt)',
        'need'            => 'Vad gäller det?',
        'message'         => 'Kort beskrivning (valfritt)',
        'message_hint'    => 'T.ex. adress eller område, byggår, boyta och vad du vill ha undersökt …',
        'submit'          => 'Begär offert',
        'sending'         => 'Skickar …',
        'privacy_note'    => 'Vi använder dina uppgifter för att besvara förfrågan och lämnar dem till '
                           . 'en besiktningsman för att hantera din offertförfrågan. Läs mer i vår',
        'success_title'   => 'Tack! Vi har fått din förfrågan.',
        'success_text'    => 'Vi följer upp förfrågan och stämmer av vad du behöver.',
        'error_title'     => 'Förfrågan kunde inte skickas.',
        'error_text'      => 'Försök igen om en stund, eller mejla oss via kontaktsidan.',
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

    'service' => [
        'includes'     => 'Exempel på moment – omfattning enligt offert',
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
        'reviewed_prefix'       => 'Granskad',
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
