<?php
declare(strict_types=1);
return [
    '/' => [
        'title' => 'Besiktningsman i Stockholm',
        'description' => 'Begär offert på överlåtelsebesiktning, badrum, fuktutredning, slutbesiktning eller BRF i Stockholm. Ange tjänst och kommun i formuläret.',
        'h1' => 'Besiktningsman i Stockholm',
        'lead' => '',
        'faq' => [
            [
                'q' => 'Vad avgör priset på en besiktning?',
                'a' => 'Typ av uppdrag, fastighetens storlek, underlag och resor påverkar offerten. Be om omfattning och eventuella tillägg innan du bokar.',
            ],
            [
                'q' => 'Vad behöver jag ange för att begära offert?',
                'a' => 'Välj tjänst och ange kommun, namn och telefon. Du kan även lämna e-post och en kort beskrivning av ärendet.',
            ],
            [
                'q' => 'Blir besiktningen bokad när jag skickar formuläret?',
                'a' => 'Nej. Formuläret är en offertförfrågan. Omfattning, utförare, tid och villkor behöver stämmas av innan du beställer.',
            ],
        ],
        'stub' => false,
        'changefreq' => 'weekly',
        'priority' => '1.0',
    ],
    '/tjanster/' => [
        'title' => 'Besiktningstjänster i Stockholm',
        'description' => 'Besiktning av hus, lägenhet, badrum och BRF i Stockholm. Se tjänster för fukt, tak, entreprenad, kontrollansvarig och byggprojektledning.',
        'h1' => 'Tjänster',
        'lead' => '',
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.9',
    ],
    '/priser/' => [
        'title' => 'Pris på besiktning – begär offert',
        'description' => 'Vad påverkar priset på besiktning av hus, badrum eller BRF? Se vilka uppgifter offerten behöver och begär pris för ditt uppdrag.',
        'h1' => 'Vad kostar en besiktning?',
        'lead' => 'Priset behöver anpassas till uppdragets omfattning. Begär en offert för ditt ärende.',
        'sections' => [
            [
                'h2' => 'Pris på husbesiktning och lägenhetsbesiktning',
                'body' => [
                    'Yta, byggnadstyp, konstruktion och tillgänglighet påverkar arbetsinsatsen. Ange om det gäller villa, radhus, fritidshus eller bostadsrätt. För ett hus är åtkomst till vind och grund relevant; för en lägenhet kan antal våtrum och renoveringshistorik påverka omfattningen.',
                    'Be om ett skriftligt pris för just den kontroll du behöver. Fuktmätning, specialistundersökningar och en köpargenomgång ska specificeras när de är aktuella.',
                ],
                'links' => [
                    [
                        'path' => '/overlatelsebesiktning/',
                        'label' => 'Överlåtelsebesiktning av hus',
                    ],
                    [
                        'path' => '/lagenhetsbesiktning/',
                        'label' => 'Besiktning av lägenhet och bostadsrätt',
                    ],
                ],
            ],
            [
                'h2' => 'Badrum, fuktmätning och fuktutredning',
                'body' => [
                    'En okulär badrumskontroll, en mätning och en skadeutredning besvarar olika frågor. Antal utrymmen, metod, underlag och eventuell öppning av konstruktion påverkar priset. Beskriv därför observationen och vad du vill kunna besluta efter undersökningen.',
                    'Fråga om mätmetod, rapport, återbesök och återställning ingår. Ett billigare uppdrag blir inte jämförbart om det saknar den undersökning du faktiskt behöver.',
                ],
                'links' => [
                    [
                        'path' => '/badrumsbesiktning/',
                        'label' => 'Badrumsbesiktning',
                    ],
                    [
                        'path' => '/fuktmatning/',
                        'label' => 'Fuktmätning',
                    ],
                    [
                        'path' => '/fuktutredning/',
                        'label' => 'Fuktutredning',
                    ],
                ],
            ],
            [
                'h2' => 'Entreprenad, BRF och underhållsplan',
                'body' => [
                    'Projektets storlek, antal byggnader, dokumentgenomgång och uppföljning behöver ingå i prisbeskrivningen. En BRF bör ange syfte, antal byggnader och ungefärlig storlek. För en entreprenad behövs avtal, skede och önskad tidpunkt.',
                    'För byggprojektledning och kontrollansvarig behöver även möten, platsbesök, prisform och villkor för tillägg framgå. En underhållsplan har en annan leverans än en besiktningslista.',
                ],
                'links' => [
                    [
                        'path' => '/brf/',
                        'label' => 'Besiktning för BRF',
                    ],
                    [
                        'path' => '/brf/underhallsplan/',
                        'label' => 'Underhållsplan för BRF',
                    ],
                    [
                        'path' => '/slutbesiktning/',
                        'label' => 'Slutbesiktning',
                    ],
                    [
                        'path' => '/kontrollansvarig/',
                        'label' => 'Kontrollansvarig',
                    ],
                    [
                        'path' => '/byggprojektledning/',
                        'label' => 'Byggprojektledning',
                    ],
                ],
            ],
            [
                'h2' => 'Jämför hela offerten före bokning',
                'body' => [
                    'Kontrollera omfattning, namngiven utförare, dokumentation, moms, resor och eventuella tillägg. Fråga hur priset påverkas om underlaget eller tillträdet ändras och hur extra arbete ska godkännas.',
                    'Vi publicerar inga generella frånpriser som saknar en bekräftad omfattning. Ange tjänst, kommun, ungefärlig yta och ditt syfte i formuläret för att begära en konkret offert. Förfrågan innebär ingen bokning.',
                ],
                'links' => [
                    [
                        'path' => '/guider/jamfora-besiktningsoffert/',
                        'label' => 'Checklista: jämför besiktningsofferter',
                    ],
                ],
            ],
        ],
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.8',
        'faq' => [
            [
                'q' => 'Varför finns ingen generell prislista?',
                'a' => 'Olika uppdrag kan ha samma namn men olika omfattning. Ett konkret pris behöver kopplas till byggnaden, kontrollen, utföraren och villkoren.',
            ],
            [
                'q' => 'Är förfrågan en bokning?',
                'a' => 'Nej. Du tar ställning till den konkreta offerten och villkoren innan du beställer.',
            ],
            [
                'q' => 'Vilka uppgifter behövs för ett pris?',
                'a' => 'Ange tjänst och kommun. Byggår, ungefärlig yta, syfte och tillgängliga dokument hjälper till att avgränsa arbetet.',
            ],
        ],
    ],
    '/guider/' => [
        'title' => 'Guider om fukt, mögel och besiktning',
        'description' => 'Praktiska guider inför husbesiktning, slutbesiktning och badrumsrenovering. Checklista och mall för BRF, fuktfrågor och jämförelse av offerter.',
        'h1' => 'Guider',
        'lead' => 'Förbered en besiktning, samla rätt dokument och förstå vilket uppdrag som besvarar din fråga.',
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.7',
    ],
    '/om-oss/' => [
        'title' => 'Om Besiktningsmannen – offertförmedling',
        'description' => 'Besiktningsmannen.se förmedlar offertförfrågningar om besiktning. Läs om sajtens operatör och vad du bör stämma av innan du beställer ett uppdrag.',
        'h1' => 'Om Besiktningsmannen',
        'lead' => 'En väg till en offert på besiktning av hus, badrum, entreprenad eller BRF.',
        'sections' => [
            [
                'h2' => 'Så fungerar sajten',
                'body' => [
                    'Besiktningsmannen.se drivs av Marklund Sales & Marketing AB och förmedlar offertförfrågningar. Ange vilken hjälp du söker och i vilken kommun.',
                ],
            ],
            [
                'h2' => 'Utföraren och uppdraget',
                'body' => [
                    'Besiktningsuppdrag förmedlas till en SBR/KIWA-certifierad samarbetspartner. Be om aktuellt certifikat och kontrollera vilken typ av besiktning det omfattar. KA-uppdrag och andra konsultuppdrag behöver rätt kompetens för sin särskilda roll.',
                    'Kontrollera utförarens erfarenhet, relevanta behörigheter och ansvarsförsäkring inför beställningen. Offerten ska beskriva uppdragets omfattning, pris och villkor.',
                ],
            ],
            [
                'h2' => 'Kontakt och personuppgifter',
                'body' => [
                    'Du når oss via kontaktsidan. Integritetspolicyn beskriver hur uppgifter från en offertförfrågan hanteras.',
                ],
            ],
        ],
        'stub' => false,
        'changefreq' => 'yearly',
        'priority' => '0.6',
    ],
    '/kontakt/' => [
        'title' => 'Kontakt – begär offert på besiktning',
        'description' => 'Begär offert på besiktning i Stockholms län. Beskriv ditt ärende i formuläret och ange tjänst, kommun och kontaktuppgifter för ditt uppdrag.',
        'h1' => '',
        'lead' => '',
        'stub' => false,
        'changefreq' => 'yearly',
        'priority' => '0.8',
    ],
    '/integritetspolicy/' => [
        'title' => 'Integritetspolicy',
        'description' => 'Så behandlar Besiktningsmannen personuppgifterna du lämnar i formuläret, vem som får del av dem och hur du begär utdrag, rättelse eller radering.',
        'h1' => 'Integritetspolicy',
        'lead' => 'Gäller personuppgifter som lämnas via besiktningsmannen.se.',
        'sections' => [
            [
                'h2' => 'Personuppgiftsansvarig',
                'body' => [
                    'Besiktningsmannen.se drivs av Marklund Sales & Marketing AB, som är personuppgiftsansvarig för de uppgifter du lämnar på webbplatsen.',
                ],
            ],
            [
                'h2' => 'Vilka uppgifter vi behandlar',
                'body' => [
                    'Vi behandlar uppgifterna du lämnar i formuläret: namn, telefon, eventuell e-post, tjänst, ort och meddelande. Förfrågan kan även innehålla sidans adress, formuläridentifierare och kampanjparametrar från länken. Ett slumpmässigt förfrågnings-ID används för att hantera upprepade försök.',
                    'IP-adress används tillfälligt för skydd mot missbruk. Begränsningen lagrar ett hashvärde, inte IP-adressen i förfrågningsloggen. Fyll inte i känsliga personuppgifter i meddelandet.',
                ],
            ],
            [
                'h2' => 'Varför vi behandlar dem',
                'body' => [
                    'Vi använder uppgifterna för att besvara och förmedla den offertförfrågan du uttryckligen skickar. Den rättsliga grunden för detta är vårt berättigade intresse av att hantera efterfrågade förfrågningar om besiktning. Förfrågan är ingen bokning eller beställning.',
                ],
            ],
            [
                'h2' => 'Vem som får del av uppgifterna',
                'body' => [
                    'Uppgifter som behövs för förfrågan kan lämnas till en relevant utförare för kontakt och offert. Förmedlingen kan vara en del av ett kommersiellt samarbete. Utföraren ansvarar för sin fortsatta behandling enligt sina villkor.',
                    'Hosting och eventuella senare administrativa system behandlar uppgifter enligt sina roller. Förfrågningar sparas i ett skyddat register på webbservern tills ett kundregister är anslutet. Uppgifterna används inte för fristående marknadsföring genom denna webbplats.',
                ],
            ],
            [
                'h2' => 'Hur länge vi sparar uppgifterna',
                'body' => [
                    'Förfrågningar används för kontakt och uppföljning. De ska inte bevaras längre än nödvändigt. Det privata förfrågningsregistret gallras löpande med en gräns på 12 månader räknat från mottagandet; en ny förfrågan får ett nytt datum. Separat uppdrags- eller bokföringsmaterial hos utföraren kan omfattas av andra krav.',
                ],
            ],
            [
                'h2' => 'Dina rättigheter',
                'body' => [
                    'Du kan kontakta oss genom formuläret eller på +46 73 633 38 75 för att begära tillgång, rättelse, radering eller invända mot behandlingen. Ange vad förfrågan gäller och hur du vill bli kontaktad. Vi kan behöva kontrollera din identitet. Du kan också lämna klagomål till Integritetsskyddsmyndigheten (IMY).',
                ],
                'links' => [
                    [
                        'path' => 'https://www.imy.se/privatperson/',
                        'label' => 'IMY: information om dina rättigheter',
                    ],
                    [
                        'path' => '/kontakt/',
                        'label' => 'Kontaktformulär',
                    ],
                ],
            ],
            [
                'h2' => 'Cookies och statistik',
                'body' => [
                    'Ingen besöksstatistik eller marknadsföringspixel är ansluten i denna version. Offertformuläret fungerar utan sådana tjänster. Om nya statistik- eller marknadsföringstjänster aktiveras behöver information och eventuella samtyckeskrav hanteras innan dess.',
                ],
            ],
        ],
        'stub' => false,
        'changefreq' => 'yearly',
        'priority' => '0.3',
    ],
    '/for-besiktningsforetag/' => [
        'title' => 'För besiktningsföretag',
        'description' => 'Är du besiktningsman eller byggkonsult? Lämna en kontaktförfrågan till Besiktningsmannen om tjänster och områden. Samarbetsvillkor avtalas separat.',
        'h1' => 'För besiktningsföretag',
        'lead' => 'Beskriv era tjänster, erfarenhet och geografiska områden via kontaktformuläret.',
        'sections' => [
            [
                'h2' => 'Kontakt om samarbete',
                'body' => [
                    'Besiktningsmannen.se förmedlar offertförfrågningar. Beskriv vilka typer av uppdrag ert företag tar, arbetsområde och relevant kompetens. Ett samarbete behöver avtalas separat; sidan är ingen beställning av förfrågningar.',
                ],
                'links' => [
                    [
                        'path' => '/kontakt/?tjanst=annat',
                        'label' => 'Kontakta oss via formuläret',
                    ],
                ],
            ],
        ],
        'stub' => false,
        'noindex' => true,
    ],
    '/404' => [
        'title' => 'Sidan finns inte',
        'description' => 'Sidan du letade efter finns inte. Se våra besiktningstjänster i Stockholms län eller begär offert så hjälper vi dig vidare.',
        'h1' => 'Sidan finns inte',
        'lead' => '',
        'stub' => false,
        'noindex' => true,
        'changefreq' => 'yearly',
        'priority' => '0.1',
    ],
    '/villkor/' => [
        'title' => 'Villkor för offertförfrågan',
        'description' => 'Villkor för att begära offert via Besiktningsmannen. Förfrågan innebär ingen bokning. Utförare, pris, omfattning och avtal stäms av före beställning.',
        'h1' => 'Villkor för offertförfrågan',
        'lead' => 'Du beställer inget uppdrag genom att skicka webbformuläret.',
        'sections' => [
            [
                'h2' => 'Förfrågan och förmedling',
                'body' => [
                    'Webbplatsen drivs av Marklund Sales & Marketing AB och förmedlar förfrågningar om besiktning och byggrelaterade konsultuppdrag. Du lämnar uppgifter så att ärendet kan stämmas av med en relevant utförare.',
                ],
                'links' => [
                    [
                        'path' => '/integritetspolicy/',
                        'label' => 'Så behandlas dina uppgifter',
                    ],
                ],
            ],
            [
                'h2' => 'Beställning sker separat',
                'body' => [
                    'Omfattning, utförare, pris, tillägg, avbokning, ansvar och leverans behöver framgå av offerten och avtalet innan du bokar. Informationen på sajten är allmän och ersätter inte uppdragsvillkoren eller en bedömning av den aktuella fastigheten.',
                ],
                'links' => [
                    [
                        'path' => '/guider/jamfora-besiktningsoffert/',
                        'label' => 'Jämför offerten före bokning',
                    ],
                ],
            ],
            [
                'h2' => 'Kontakt om en förfrågan',
                'body' => [
                    'Använd formuläret eller ring +46 73 633 38 75 om du behöver komplettera en förfrågan. Undvik känsliga personuppgifter i meddelandet.',
                ],
            ],
        ],
        'stub' => false,
        'changefreq' => 'yearly',
        'priority' => '0.3',
    ],
];
