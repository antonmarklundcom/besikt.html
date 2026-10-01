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
        'eyebrow'   => 'Stockholms län · Certifierad besiktningsman',
        'h1_lead'   => 'Besiktningsman ',
        'h1_accent' => 'i Stockholm',
        'lead'      => 'Överlåtelsebesiktning, badrumsbesiktning, fuktutredning och slutbesiktning '
                     . 'för villa, bostadsrätt och BRF. Beskriv ditt ärende så får du en offert.',
        'trust' => [
            'Certifierad besiktningsman (SBR/KIWA)',
            'Oberoende – inga band till mäklare eller hantverkare',
            'Skriftligt protokoll med foton',
            'Uppdrag i hela Stockholms län',
        ],

        'services_eyebrow' => 'Tjänster',
        'services_title'   => 'Vad behöver besiktigas?',
        'services_lead'    => 'Välj det som liknar ditt ärende. Osäker? Skriv några rader i formuläret, '
                            . 'så föreslår vi rätt typ av besiktning.',

        'unsure_title' => 'Vet du inte vilken besiktning du behöver?',
        'unsure_text'  => 'Beskriv bostaden och vad som har hänt. Vi svarar med ett förslag och ett pris.',

        'area_eyebrow' => 'Område',
        'area_title'   => 'Besiktningsman i hela Stockholms län',
        'area_text'    => 'Vi utgår från Stockholm och Nynäshamn och tar uppdrag i alla kommuner i '
                        . 'länet. Större uppdrag i övriga Sverige tar vi efter överenskommelse – då '
                        . 'tillkommer resekostnad enligt offert.',

        'prices_eyebrow' => 'Priser',
        'prices_title'   => 'Fast pris i offerten',
        'prices_text'    => 'Priset beror på bostadens storlek, typ och vad som ska undersökas. '
                          . 'Du får alltid ett fast pris innan uppdraget bokas.',
        'prices_cta'     => 'Se priser',

        'faq_title' => 'Vanliga frågor om besiktning',
        'form_title' => 'Begär offert',
        'form_lead'  => 'Svar inom en arbetsdag. Kostnadsfritt och utan förpliktelser.',
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
        'title'   => 'En oberoende besiktningsman som skriver så att du förstår.',
        'text'    => 'Besiktningen görs av en certifierad besiktningsman som arbetar med '
                   . 'småhus, bostadsrätter och entreprenader. Du får ett skriftligt protokoll med '
                   . 'foton och en genomgång av vad som är viktigt och vad som kan vänta.',
        'credentials' => [
            'Certifierad besiktningsman (SBR/KIWA)',
            'Oberoende av mäklare, säljare och entreprenörer',
            'Fast pris i skriftlig offert innan uppdraget bokas',
        ],
        'badge_note'     => 'i branschen',
        'badge_fallback' => 'Certifierad',
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
                'text'  => 'Fast pris och förslag på tid, oftast inom en arbetsdag.',
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
        'lead'         => 'Alla uppdrag utförs av en certifierad besiktningsman i Stockholms län.',
        'unsure_title' => 'Osäker på vilken besiktning du behöver?',
        'unsure_text'  => 'Beskriv ärendet så föreslår vi rätt tjänst och ett fast pris.',
        'unsure_cta'   => 'Begär offert',
    ],

    'cta_band' => [
        'eyebrow' => 'Offert',
        'title'   => 'Beskriv ditt ärende – få ett fast pris.',
        'lead'    => 'Kostnadsfritt och utan förpliktelser. Vi svarar inom en arbetsdag.',
    ],

    'form' => [
        'legend'          => 'Begär offert',
        'name'            => 'Namn',
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
        'email'           => 'E-post',
        'need'            => 'Vad gäller det?',
        'message'         => 'Beskriv ärendet',
        'message_hint'    => 'T.ex. adress eller område, byggår, boyta och vad du vill ha undersökt …',
        'submit'          => 'Skicka förfrågan',
        'sending'         => 'Skickar …',
        'privacy_note'    => 'Vi använder dina uppgifter för att besvara förfrågan och lämnar dem till '
                           . 'den certifierade besiktningsman som utför uppdraget. Läs mer i vår',
        'success_title'   => 'Tack! Vi har fått din förfrågan.',
        'success_text'    => 'Vi återkommer med offert inom en arbetsdag.',
        'error_title'     => 'Förfrågan kunde inte skickas.',
        'error_text'      => 'Försök igen om en stund, eller mejla oss via kontaktsidan.',
        'error_phone'     => 'Ange ett telefonnummer så att vi kan nå dig.',
        'required'        => 'obligatoriskt',
        'thanks_next'     => 'Nästa steg',
        'thanks_whatsapp' => 'Vill du komplettera? Svara på bekräftelsen eller ring oss.',
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
        'lead'    => 'Fyll i formuläret så återkommer vi med offert inom en arbetsdag.',
        'address' => 'Adress',
        'hours'   => 'Öppettider',
        'phone'   => 'Telefon',
        'email'   => 'E-post',
        'expect'  => 'Så går det till',
        'steps'   => [
            'Vi svarar inom en arbetsdag.',
            'Du får ett fast pris och förslag på tid för besiktningen.',
            'Efter besiktningen får du ett skriftligt protokoll med foton.',
        ],
    ],

    'service' => [
        'includes'     => 'Det här ingår',
        'excludes'     => 'Det här ingår inte',
        'we_need'      => 'Bra att ha till besiktningen',
        'benefits'     => 'Därför lönar det sig',
        'faq'          => 'Vanliga frågor',
        'related'      => 'Relaterade tjänster',
        'guides'       => 'Läs mer i guiden',
        'articles'     => 'Relaterad artikel',
        'form_eyebrow' => 'Offert',
        'form_lead'    => 'Beskriv ärendet så får du ett fast pris. Svar inom en arbetsdag.',
        'breadcrumb'   => 'Brödsmulor',
    ],

    'segment' => [
        'traps_title'  => 'Vanliga misstag',
        'bundle_title' => 'Det här brukar ingå',
        'form_eyebrow' => 'Offert',
        'form_lead'    => 'Beskriv ärendet så återkommer vi med ett fast pris.',
    ],

    'tools' => [
        'reviewed_prefix' => 'Preliminära riktpriser, uppdaterade',
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
                                 . 'inom en arbetsdag.',
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
