<?php
declare(strict_types=1);
return [
    '/' => [
        'title' => 'Besiktningsman i Stockholm – 3 offerter | Besiktningsmännen',
        'description' => 'Få offert från upp till 3 besiktningsmän i Stockholm. Husbesiktning, lägenhet, badrum, fukt och BRF. Kostnadsfritt och utan förpliktelse.',
        'h1' => 'Få offert från upp till 3 besiktningsmän i Stockholm',
        'lead' => '',
        'faq' => [
            [
                'q' => 'Kostar det något att begära offert?',
                'a' => 'Nej. Det är kostnadsfritt att skicka en förfrågan och du förbinder dig inte till något.',
            ],
            [
                'q' => 'Hur många besiktningsmän hör av sig?',
                'a' => 'Upp till tre, beroende på vilken typ av uppdrag det är och var bostaden ligger. Du jämför offerterna och väljer själv om du vill boka.',
            ],
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
    '/husbesiktning/pris/' => [
        'title' => 'Vad kostar en husbesiktning? Priser',
        'description' => 'Besiktning av hus kostar ofta 9 000–15 000 kr för en villa. Se pris för villa, radhus och fritidshus och vad som påverkar kostnaden i Stockholm.',
        'h1' => 'Vad kostar en husbesiktning?',
        'lead' => 'Här ser du ungefärligt pris på besiktning av hus i Stockholms län, inklusive moms. Priset beror på husets storlek, grundläggning och vilka tillägg du väljer. Ditt exakta pris får du i offerterna.',
        'priceService' => 'husbesiktning-pris',
        'leadForm' => true,
        'breadcrumbs' => [
            ['label' => 'Husbesiktning', 'path' => '/husbesiktning/'],
            ['label' => 'Pris', 'path' => '/husbesiktning/pris/'],
        ],
        'sections' => [
            [
                'h2' => 'Vad påverkar kostnaden för en husbesiktning?',
                'body' => [
                    'Husets storlek är den faktor som oftast väger tyngst: ett större hus tar längre tid att gå igenom. Grundläggningen spelar också roll. Ett hus med krypgrund eller källare kräver mer arbete än ett hus på platta, eftersom fler utrymmen ska kontrolleras.',
                    'Husets ålder och skick, hur lätt det är att komma åt vind och grund samt avståndet till bostaden kan också påverka kostnaden för besiktning av ett hus. Frågar du efter fuktmätning, termografering eller en utökad genomgång blir priset ett annat än för en vanlig okulär besiktning.',
                ],
            ],
            [
                'h2' => 'Tillägg: fuktmätning och utökad besiktning',
                'body' => [
                    'Fuktmätning är det vanligaste tillägget vid husbesiktning och kostar ofta 1 500–3 500 kr. Den är särskilt aktuell om huset har krypgrund eller källare, eller om det finns tecken på fukt.',
                    'Fråga alltid om fuktmätning ingår i priset, och om mätningen sker i krypgrund, källare eller platta. Vill du ha en bedömning av hela husets skick finns även statusbesiktning.',
                ],
                'links' => [
                    ['path' => '/fuktmatning/', 'label' => 'Fuktmätning'],
                    ['path' => '/statusbesiktning/', 'label' => 'Statusbesiktning av hus'],
                ],
            ],
            [
                'h2' => 'Pris för villa, radhus och fritidshus',
                'body' => [
                    'En villa kostar oftast mest att besikta, ungefär 9 000–15 000 kr. Radhus och parhus ligger lägre, ungefär 8 000–12 000 kr, och fritidshus ungefär 7 000–12 000 kr.',
                    'Det här är vägledande intervall. Samma prisnivåer gäller en överlåtelsebesiktning, alltså den besiktning många köpare gör före ett husköp.',
                ],
                'links' => [
                    ['path' => '/overlatelsebesiktning/', 'label' => 'Överlåtelsebesiktning'],
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning vid husköp'],
                ],
            ],
            [
                'h2' => 'Så får du jämförbara priser',
                'body' => [
                    'Beskriv huset i förfrågan: typ, ungefärlig yta, grundläggning, byggår och om du vill ha fuktmätning. Då baseras offerterna på samma underlag och går att jämföra.',
                    'Jämför inte bara priset. Titta på vad som ingår, hur protokollet ser ut och om resa och moms är inräknat.',
                ],
                'links' => [
                    ['path' => '/guider/jamfora-besiktningsoffert/', 'label' => 'Så jämför du besiktningsofferter'],
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning'],
                    ['path' => '/priser/', 'label' => 'Alla priser'],
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Vem betalar husbesiktningen?',
                'a' => 'Det är vanligen den som beställer besiktningen, ofta köparen vid ett husköp. Vem som betalar är inget lagkrav utan avgörs av vem som anlitar besiktningsmannen.',
            ],
            [
                'q' => 'Är fuktmätning värt pengarna?',
                'a' => 'Om huset har krypgrund eller källare, eller det finns tecken på fukt, kan fuktmätning ge underlag som en okulär besiktning inte ger. Fråga besiktningsmannen om mätning är motiverad för just ditt hus.',
            ],
            [
                'q' => 'Varför skiljer sig priserna mellan besiktningsmän?',
                'a' => 'Omfattning, metod, rapportens detaljnivå och vad som ingår skiljer sig åt. Jämför därför vad offerten omfattar, inte bara slutsumman.',
            ],
            [
                'q' => 'Ingår moms i priserna?',
                'a' => 'De prisnivåer vi visar är ungefärliga och anges inklusive moms för privatperson. Kontrollera alltid i offerten om moms och resa är inräknade.',
            ],
        ],
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.8',
    ],
    '/husbesiktning/uppsala/' => [
        'title' => 'Husbesiktning i Uppsala',
        'description' => 'Husbesiktning i Uppsala: beskriv huset i ett formulär och få offerter från upp till 3 besiktningsmän. Jämför och välj själv. Gratis att fråga.',
        'h1' => 'Husbesiktning i Uppsala – jämför upp till 3 offerter',
        'lead' => 'Ska du köpa eller sälja hus i Uppsala? Fyll i ett formulär så skickas din förfrågan till upp till tre besiktningsmän som tar uppdrag i området. Du jämför offerterna och väljer själv.',
        'sections' => [
            [
                'h2' => 'Besiktningsman i Uppsala',
                'body' => [
                    'Du beskriver huset en gång: ort, byggnadstyp, ungefärlig storlek och när du vill ha besiktningen. Förfrågan går till upp till tre besiktningsmän som tar uppdrag i Uppsala, och de skickar var sin offert.',
                    'Det är du som jämför. Läs vad varje offert omfattar, till exempel om grund, vind och våtrum ingår och hur rapporten redovisas, och välj den besiktningsman som passar dig. Du är inte bunden av att fråga.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning'],
                ],
            ],
            [
                'h2' => 'Hus och mark i Uppsala: det kan vara bra att känna till',
                'body' => [
                    'Runt Uppsala ligger staden på en lerslätt där berg- och moränkullar sticker upp, och SGU:s jordartskartor visar postglacial och glacial lera i stora delar av omgivningarna. I många områden består marken alltså av lera, i andra av morän eller sand och grus. Marktypen påverkar hur grunden är byggd och hur vatten tar sig runt huset.',
                    'Krypgrund och källare finns i många äldre hus. Där kan fukt, ventilation och dränering vara viktiga punkter att få bedömda. Vilka frågor som är aktuella för just ditt hus beror på byggår, grund och skick, så beskriv gärna dessa när du ber om offert.',
                ],
            ],
            [
                'h2' => 'Vad kostar en husbesiktning i Uppsala?',
                'body' => [
                    'Priset beror bland annat på husets storlek, byggnadstyp och vad besiktningen ska omfatta. De prisnivåer vi visar på sajten är uppskattningar och inte fasta priser. Det pris som gäller är det som står i offerten du får från besiktningsmannen.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/pris/', 'label' => 'Vad kostar en husbesiktning?'],
                ],
            ],
            [
                'h2' => 'Besikta hus innan köp i Uppsala',
                'body' => [
                    'Som köpare har du enligt jordabalken en undersökningsplikt. Det innebär att du inte kan åberopa fel som du borde ha upptäckt vid en noggrann undersökning före köpet. En husbesiktning är ett vanligt sätt att göra den undersökningen, och den görs oftast efter att du har sett huset men innan du skriver på avtalet.',
                    'Ta med dig besiktningsprotokollet i förhandlingen och i beslutet om du ska gå vidare. Är det mycket du behöver få bedömt kan du ange det i förfrågan.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning vid husköp'],
                ],
            ],
            [
                'h2' => 'Fukt, tak och badrum',
                'body' => [
                    'Vill du ha en mer inriktad undersökning finns fuktutredning, takbesiktning och badrumsbesiktning. De tjänsterna erbjuds i dag främst i Stockholms län, medan den här sidan handlar om husbesiktning i Uppsala.',
                ],
                'links' => [
                    ['path' => '/fuktutredning/', 'label' => 'Fuktutredning'],
                    ['path' => '/takbesiktning/', 'label' => 'Takbesiktning'],
                    ['path' => '/badrumsbesiktning/', 'label' => 'Badrumsbesiktning'],
                ],
            ],
        ],
        'faq' => [
            ['q' => 'Hur lång tid tar en husbesiktning i Uppsala?', 'a' => 'Det beror på husets storlek och skick. Besiktningsmannen kan i offerten berätta hur lång tid besöket brukar ta och när rapporten levereras.'],
            ['q' => 'Vem betalar besiktningsmannen vid husköp?', 'a' => 'Oftast beställer och betalar köparen besiktningen, eftersom det är köparen som har undersökningsplikten. Vem som är beställare ska framgå av offerten.'],
            ['q' => 'Kan jag vara med på besiktningen?', 'a' => 'Ja, det är vanligt och ofta en fördel. Då kan du ställa frågor på plats och få förklarat det som står i rapporten. Stäm av det med besiktningsmannen i förväg.'],
        ],
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.7',
        'leadForm' => true,
        'priceService' => 'husbesiktning',
        'breadcrumbs' => [
            ['label' => 'Husbesiktning', 'path' => '/husbesiktning/'],
            ['label' => 'Uppsala', 'path' => '/husbesiktning/uppsala/'],
        ],
    ],
    '/husbesiktning/goteborg/' => [
        'title' => 'Husbesiktning i Göteborg',
        'description' => 'Husbesiktning i Göteborg: fyll i ett formulär och jämför offerter från upp till 3 besiktningsmän. Du väljer själv vem som besiktigar huset.',
        'h1' => 'Husbesiktning i Göteborg – jämför upp till 3 offerter',
        'lead' => 'Står du i begrepp att köpa hus i Göteborg? Beskriv huset en gång så går förfrågan till upp till tre besiktningsmän som tar uppdrag i området. Du jämför offerterna och bestämmer själv.',
        'sections' => [
            [
                'h2' => 'Besiktningsman i Göteborg',
                'body' => [
                    'Du fyller i uppgifter om huset och när du vill ha besiktningen. Förfrågan skickas till upp till tre besiktningsmän som tar uppdrag i Göteborg, och var och en återkommer med en offert.',
                    'Du jämför offerterna: vad som ingår, hur besiktningen genomförs och hur rapporten ser ut. Sedan väljer du. Att be om offerter förpliktar dig inte till något.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning'],
                ],
            ],
            [
                'h2' => 'Hus, lera och regn i Göteborg',
                'body' => [
                    'I stora delar av Göteborg, särskilt i älvdalen, ligger marken på lera som kan vara flera tiotals meter djup, enligt de geotekniska utredningar som staden och SGU:s jordartskartor bygger på. Lera kan sätta sig, till exempel om grundvattennivån sänks eller marken belastas. Hur det ser ut varierar mycket mellan områden, och många hus står på berg eller fast morän. Det går därför inte att säga något om ett enskilt hus utan att titta på det.',
                    'Göteborg har ett fuktigt kustklimat med mycket nederbörd. Det ställer krav på fasad, tak, hängrännor och att vatten leds bort från huset. En besiktning går bland annat igenom hur fasad, tak och markavvattning ser ut vid besöket och om det finns tecken på fukt eller sprickor.',
                ],
                'links' => [
                    ['path' => '/takbesiktning/', 'label' => 'Takbesiktning'],
                ],
            ],
            [
                'h2' => 'Vad kostar en husbesiktning i Göteborg?',
                'body' => [
                    'Priset påverkas av husets storlek, byggnadstyp och vad som ska ingå. De prisnivåer vi visar är uppskattningar. Det som gäller är priset i offerten du får, så läs den noga innan du väljer.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/pris/', 'label' => 'Vad kostar en husbesiktning?'],
                ],
            ],
            [
                'h2' => 'Besikta hus innan köp i Göteborg',
                'body' => [
                    'Vid husköp har du som köpare undersökningsplikt enligt jordabalken. Du kan alltså inte i efterhand göra gällande fel som du borde ha upptäckt vid en vanlig, noggrann undersökning före köpet. Husbesiktningen är ett sätt att uppfylla den plikten och att få en bild av husets skick innan du binder dig.',
                    'Berätta i förfrågan om du är orolig för något särskilt, till exempel sprickor, fukt i källare eller skicket på taket.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning vid husköp'],
                ],
            ],
            [
                'h2' => 'Fukt, tak och badrum',
                'body' => [
                    'Fuktutredning, takbesiktning och badrumsbesiktning är mer inriktade undersökningar. De erbjuds i dag främst i Stockholms län, och den här sidan handlar om husbesiktning i Göteborg.',
                ],
                'links' => [
                    ['path' => '/fuktutredning/', 'label' => 'Fuktutredning'],
                    ['path' => '/takbesiktning/', 'label' => 'Takbesiktning'],
                    ['path' => '/badrumsbesiktning/', 'label' => 'Badrumsbesiktning'],
                ],
            ],
        ],
        'faq' => [
            ['q' => 'Hur lång tid tar en husbesiktning i Göteborg?', 'a' => 'Det varierar med husets storlek och skick. Fråga besiktningsmannen i offerten hur lång tid besöket tar och när du får rapporten.'],
            ['q' => 'Vem betalar besiktningen när man köper hus?', 'a' => 'Vanligen betalar köparen, eftersom det är köparen som har undersökningsplikten. Det ska framgå av offerten vem som är beställare.'],
            ['q' => 'Kan jag vara med vid besiktningen?', 'a' => 'Ja, det går oftast bra och kan vara värdefullt. Du kan ställa frågor på plats. Stäm av med besiktningsmannen innan.'],
        ],
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.7',
        'leadForm' => true,
        'priceService' => 'husbesiktning',
        'breadcrumbs' => [
            ['label' => 'Husbesiktning', 'path' => '/husbesiktning/'],
            ['label' => 'Göteborg', 'path' => '/husbesiktning/goteborg/'],
        ],
    ],
    '/husbesiktning/malmo/' => [
        'title' => 'Husbesiktning i Malmö',
        'description' => 'Husbesiktning i Malmö: skicka en förfrågan och jämför offerter från upp till 3 besiktningsmän. Du väljer själv vem som besiktigar huset.',
        'h1' => 'Husbesiktning i Malmö – jämför upp till 3 offerter',
        'lead' => 'Funderar du på att köpa hus i Malmö? Fyll i ett formulär så går din förfrågan till upp till tre besiktningsmän som tar uppdrag i området. Du jämför offerterna och väljer själv.',
        'sections' => [
            [
                'h2' => 'Besiktningsman i Malmö',
                'body' => [
                    'Du beskriver huset och när du önskar besiktning. Förfrågan skickas till upp till tre besiktningsmän som tar uppdrag i Malmö, och de skickar var sin offert.',
                    'Du jämför offerterna och väljer. Titta på vad som ingår, till exempel källare, vind och rapportens utformning. Att fråga kostar ingenting och binder dig inte.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning'],
                ],
            ],
            [
                'h2' => 'Hus och mark i Malmö: platt landskap och äldre hus',
                'body' => [
                    'Marken i Malmö är enligt SGU:s beskrivningar i huvudsak uppbyggd av moränlera, ofta med inslag av sand och silt, och landskapet är platt. I sådan mark är det viktigt att regnvatten och markvatten leds bort från huset, så dränering, marklutning och fuktskydd i grunden är återkommande punkter vid en besiktning.',
                    'Det finns många äldre hus, en del med källare. Äldre konstruktioner kan ha annorlunda uppbyggnad än nyare hus, och källare kräver särskild uppmärksamhet på fukt. Hur det ser ut i ett enskilt hus beror på byggår och underhåll, så ange gärna byggår när du ber om offert.',
                ],
            ],
            [
                'h2' => 'Vad kostar en husbesiktning i Malmö?',
                'body' => [
                    'Priset beror bland annat på storlek, byggnadstyp och omfattning. De prisnivåer vi visar är uppskattningar och inga fasta priser. Priset i offerten är det som gäller.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/pris/', 'label' => 'Vad kostar en husbesiktning?'],
                ],
            ],
            [
                'h2' => 'Besikta hus innan köp i Malmö',
                'body' => [
                    'Enligt jordabalken har du som köpare undersökningsplikt. Det betyder att du inte kan åberopa sådant som du borde ha sett vid en noggrann undersökning före köpet. Att låta en besiktningsman gå igenom huset är ett vanligt sätt att göra den undersökningen.',
                    'Besiktningen görs normalt innan du skriver under köpeavtalet, så att du kan ta hänsyn till resultatet i ditt beslut och i prisförhandlingen.',
                ],
                'links' => [
                    ['path' => '/husbesiktning/', 'label' => 'Husbesiktning vid husköp'],
                ],
            ],
            [
                'h2' => 'Fukt, tak och badrum',
                'body' => [
                    'Fuktutredning, takbesiktning och badrumsbesiktning är mer inriktade tjänster. De erbjuds i dag främst i Stockholms län, och den här sidan handlar om husbesiktning i Malmö.',
                ],
                'links' => [
                    ['path' => '/fuktutredning/', 'label' => 'Fuktutredning'],
                    ['path' => '/takbesiktning/', 'label' => 'Takbesiktning'],
                    ['path' => '/badrumsbesiktning/', 'label' => 'Badrumsbesiktning'],
                ],
            ],
        ],
        'faq' => [
            ['q' => 'Hur lång tid tar en husbesiktning i Malmö?', 'a' => 'Det beror på husets storlek och skick. Besiktningsmannen kan uppge ungefärlig tid för besöket och leverans av rapporten i offerten.'],
            ['q' => 'Vem betalar besiktningen vid husköp?', 'a' => 'Oftast köparen, som har undersökningsplikten. Kontrollera i offerten vem som är beställare.'],
            ['q' => 'Får jag vara med under besiktningen?', 'a' => 'Ja, det är vanligt. Då kan du ställa frågor på plats. Stäm av det med besiktningsmannen i förväg.'],
        ],
        'stub' => false,
        'changefreq' => 'monthly',
        'priority' => '0.7',
        'leadForm' => true,
        'priceService' => 'husbesiktning',
        'breadcrumbs' => [
            ['label' => 'Husbesiktning', 'path' => '/husbesiktning/'],
            ['label' => 'Malmö', 'path' => '/husbesiktning/malmo/'],
        ],
    ],
    '/priser/' => [
        'title' => 'Vad kostar en besiktning? Prislista',
        'description' => 'Ungefärliga priser på husbesiktning, lägenhet, badrum, fukt, tak och BRF i Stockholm. Jämför prisnivåer och få offert från upp till 3 besiktningsmän.',
        'h1' => 'Vad kostar en besiktning?',
        'lead' => 'Här ser du ungefärliga prisnivåer för varje typ av besiktning i Stockholms län, inklusive moms. Ditt exakta pris får du i offerterna.',
        'priceList' => true,
        'sections' => [
            [
                'h2' => 'Vad påverkar priset på husbesiktning och lägenhetsbesiktning?',
                'body' => [
                    'Yta, byggnadstyp, konstruktion och tillgänglighet påverkar arbetsinsatsen. Ange om det gäller villa, radhus, fritidshus eller bostadsrätt. För ett hus är åtkomst till vind och grund relevant; för en lägenhet kan antal våtrum och renoveringshistorik påverka omfattningen.',
                    'Be om ett skriftligt pris för just den kontroll du behöver. Fuktmätning, specialistundersökningar och en köpargenomgång ska specificeras när de är aktuella.',
                ],
                'links' => [
                    [
                        'path' => '/husbesiktning/pris/',
                        'label' => 'Vad kostar en husbesiktning?',
                    ],
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
                'h2' => 'Vad påverkar priset på badrum, fuktmätning och fuktutredning?',
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
                'h2' => 'Vad påverkar priset på entreprenad, BRF och underhållsplan?',
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
                    'Prisnivåerna på den här sidan är ungefärliga och hjälper dig att se om en offert ligger rimligt. Ange tjänst, kommun, ungefärlig yta och ditt syfte i formuläret, så får du offerter från upp till tre besiktningsmän att jämföra. Förfrågan innebär ingen bokning.',
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
                'q' => 'Varför är priserna intervall?',
                'a' => 'Olika uppdrag kan ha samma namn men olika omfattning. Det exakta priset beror på byggnaden, kontrollen och besiktningsmannen, och framgår av offerten.',
            ],
            [
                'q' => 'Ingår moms i priserna?',
                'a' => 'Ja. Prisnivåerna gäller privatpersoner och anges inklusive moms. Resor och tillägg kan tillkomma enligt offerten.',
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
        'title' => 'Om Besiktningsmännen – offerter från besiktningsmän',
        'description' => 'Besiktningsmännen matchar din förfrågan med upp till tre besiktningsmän. Läs om sajtens operatör och vad du bör stämma av innan du beställer.',
        'h1' => 'Om Besiktningsmännen',
        'lead' => 'En förfrågan, upp till tre offerter på besiktning av hus, badrum, entreprenad eller BRF.',
        'sections' => [
            [
                'h2' => 'Så fungerar sajten',
                'body' => [
                    'Besiktningsmännen (besiktningsmannen.se) drivs av Marklund Sales & Marketing AB. Du beskriver ditt ärende en gång, och vi förmedlar förfrågan till upp till tre besiktningsmän som tar den typen av uppdrag i ditt område. Du jämför offerterna och väljer själv.',
                ],
            ],
            [
                'h2' => 'Utföraren och uppdraget',
                'body' => [
                    'Besiktningsuppdrag förmedlas till samarbetande besiktningsmän och besiktningsföretag. Be varje utförare om aktuellt certifikat och kontrollera vilken typ av besiktning det omfattar. KA-uppdrag och andra konsultuppdrag behöver rätt kompetens för sin särskilda roll.',
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
        'description' => 'Så behandlar Besiktningsmännen personuppgifterna du lämnar i formuläret, vem som får del av dem och hur du begär utdrag, rättelse eller radering.',
        'h1' => 'Integritetspolicy',
        'lead' => 'Gäller personuppgifter som lämnas via besiktningsmannen.se.',
        'sections' => [
            [
                'h2' => 'Personuppgiftsansvarig',
                'body' => [
                    'Besiktningsmännen (besiktningsmannen.se) drivs av Marklund Sales & Marketing AB, som är personuppgiftsansvarig för de uppgifter du lämnar på webbplatsen.',
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
                    'Uppgifter som behövs för förfrågan lämnas till upp till tre relevanta utförare för kontakt och offert. Förmedlingen kan vara en del av ett kommersiellt samarbete. Utföraren ansvarar för sin fortsatta behandling enligt sina villkor.',
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
        'description' => 'Är du besiktningsman eller byggkonsult? Lämna en kontaktförfrågan till Besiktningsmännen om tjänster och områden. Samarbetsvillkor avtalas separat.',
        'h1' => 'För besiktningsföretag',
        'lead' => 'Beskriv era tjänster, erfarenhet och geografiska områden via kontaktformuläret.',
        'sections' => [
            [
                'h2' => 'Kontakt om samarbete',
                'body' => [
                    'Besiktningsmännen förmedlar offertförfrågningar till upp till tre utförare per ärende. Beskriv vilka typer av uppdrag ert företag tar, arbetsområde och relevant kompetens. Ett samarbete behöver avtalas separat; sidan är ingen beställning av förfrågningar.',
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
        'description' => 'Villkor för att begära offert via Besiktningsmännen. Förfrågan innebär ingen bokning. Utförare, pris, omfattning och avtal stäms av före beställning.',
        'h1' => 'Villkor för offertförfrågan',
        'lead' => 'Du beställer inget uppdrag genom att skicka webbformuläret.',
        'sections' => [
            [
                'h2' => 'Förfrågan och förmedling',
                'body' => [
                    'Webbplatsen drivs av Marklund Sales & Marketing AB och förmedlar förfrågningar om besiktning och byggrelaterade konsultuppdrag. Du lämnar uppgifter så att ärendet kan stämmas av med upp till tre relevanta utförare.',
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
