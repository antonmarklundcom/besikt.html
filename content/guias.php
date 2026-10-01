<?php
/**
 * The how-to guides under /guias/, keyed by slug — same shape discipline as
 * content/services.php and content/tools.php.
 *
 * Why this content type exists: a how-to query ("cómo se hace X") is answered
 * only partly by a service page. A guide answers it in full, then offers the
 * "¿prefiere que lo hagamos nosotros?" box to hand the task over — which is why
 * every guide names a relatedService.
 *
 *   path             string   URL, trailing slash
 *   title            string   the guide's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 41 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   lastReviewed     string   ISO date, shown next to the "orientativo" note
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 2–3 paragraphs read before the numbered steps
 *   steps            array    [['title' => ..., 'body' => string[]], ...] →
 *                             both the visible numbered list and the HowTo
 *                             JSON-LD (templates/guide.php builds both from
 *                             this one array)
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   relatedService   ?string  slug into content/services.php AND
 *                             content/lead-values.php — the delegate box's form,
 *                             WhatsApp prefill and next-step text all resolve
 *                             from this one slug
 *   toolLink         ?array   ['path' => ..., 'label' => ..., 'text' => ...]
 *   related          string[] 2–3 sibling guide slugs
 *   example          bool     seed record only — see content/services.php
 */

declare(strict_types=1);

return [

    'mogel-i-hus' => [
        'path'            => '/guider/mogel-i-hus/',
        'title'           => 'Mögel i hus',
        'navLabel'        => 'Mögel i hus',
        'seoTitle'        => 'Mögel i hus – symptom och tecken',
        'metaDescription' => 'Mögel i hus: så känner du igen symptom, tecken och mögellukt, när du kan mäta själv och när du bör anlita en besiktningsman för fuktutredning.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: fukt och mögel',
            'h1'      => 'Mögel i hus: symptom och tecken',
            'lead'    => 'Så känner du igen mögel, vad som brukar ligga bakom och när det är dags att låta någon undersöka huset.',
        ],
        'intro' => [
            'Mögel i hus är nästan alltid ett tecken på fukt. Mögelsvampar behöver fuktiga material för att växa, så när du hittar mögel är den viktiga frågan var fukten kommer ifrån. Den här guiden går igenom tecknen på mögel, hur du kan göra en första koll själv och när du bör kalla in en besiktningsman.',
            'Guiden är allmän information om byggnader och ersätter inte en undersökning på plats. Oro för hälsoeffekter av mögel i bostaden ska du ta upp med vården eller din kommun – vi ger ingen medicinsk rådgivning.',
        ],
        'steps' => [
            [
                'title' => 'Känn igen symptomen i huset',
                'body'  => [
                    'De första tecknen på mögel i huset är ofta indirekta. Det kan handla om en unken eller kall källarlukt, missfärgade fläckar på väggar och tak, bubblande eller flagnande färg, lösa tapeter eller golvmaterial som buktar sig. Lukten är ofta det som märks först, och den kan finnas långt innan något syns.',
                    'Lägg också märke till kondens på fönster, mörka kanter kring fönster och ytterhörn och möbler som står tätt mot en yttervägg. Dessa ställen har ofta sämre luftväxling och kallare ytor, och där samlas fukt lättare.',
                    'Skriv gärna ner när symptomen började och om de förändras med årstiden. Mögel i hus som kommer och går med väder och temperatur pekar ofta på kondens eller en otät byggnadsdel, medan mögel som finns året om oftare beror på en ständig fuktkälla som en läcka eller markfukt.',
                ],
            ],
            [
                'title' => 'Kolla efter tecken och mögellukt',
                'body'  => [
                    'Mögel kan se olika ut: svarta, gröna, grå eller vita fläckar, ibland som ett fint pulver eller en ludd. Det är vanligt att man talar om svartmögel och vitmögel, men färgen säger inte hur allvarligt problemet är. Det avgörande är hur mycket fukt som finns i materialet och hur länge det har pågått.',
                    'Mögellukt, ofta beskriven som unken, jordig eller liknande en gammal källare, är ett av de vanligaste tecknen på mögel i huset. Luktar det mer vid vissa tider eller efter regn och duschar kan det peka på var fukten tränger in. Notera var och när du känner lukten – det hjälper den som ska utreda.',
                    'Tänk på att mögel också kan växa dolt, bakom tapeter, under golvmattor och i hålrum i väggar och bjälklag. Då syns inget alls, och mögellukten kan vara det enda tecknet på att något är fel.',
                ],
            ],
            [
                'title' => 'Hitta var fukten kommer ifrån',
                'body'  => [
                    'Mögel växer inte utan fukt, så att torka bort fläcken löser sällan problemet. Vanliga orsaker är läckande rör eller golvbrunnar, bristfälligt tätskikt i badrum, fukt som trycker upp från marken i källare och krypgrund, otät takfot eller yttervägg och dålig ventilation som låter inomhusluftens fukt kondensera.',
                    'Gå igenom huset och titta efter våta fläckar under diskbänk och handfat, vid golvbrunn, under fönster och längs källarens ytterväggar. Fråga också om tidigare vattenskador och om huset renoverats nyligen – en renovering utan fackmässigt tätskikt kan ge fuktskador som syns först efter flera år.',
                ],
            ],
            [
                'title' => 'Mäta mögel i huset själv – eller anlita någon',
                'body'  => [
                    'Det går att köpa mögeltest och fuktmätare för hemmabruk. Ett mögeltest kan ge en fingervisning om att mögelsporer finns, men säger inte var problemet sitter eller hur stort det är. En enkel fuktmätare kan visa förhöjd fukthalt i ytan på ett material, men ytvärden kan vilseleda och kan inte avgöra vad som gömmer sig bakom ytskikt eller i konstruktionen.',
                    'Behöver du veta orsaken, omfattningen och vad som ska åtgärdas är en fuktutredning av en oberoende besiktningsman bättre. Då mäts fukten på ett strukturerat sätt, byggdelarna bedöms och du får en skriftlig rapport som kan användas mot entreprenör eller försäkringsbolag.',
                ],
            ],
            [
                'title' => 'Kontrollera de utsatta utrymmena',
                'body'  => [
                    'Mögel i hus visar sig oftare i vissa utrymmen än andra. Titta särskilt i badrum och tvättstuga, i källare och krypgrund, på vinden under takfoten och bakom skåp, stora möbler och gardiner längs ytterväggar. Kontrollera också hörn där två ytterväggar möts, eftersom de är kallare och får mer kondens.',
                    'Känn med handen på väggar och golv – ett klammigt eller kallt material kan tyda på fukt även när inget syns. Notera också om golvet känns mjukt eller om golvlisterna släpper från väggen. Har du köpt eller ska köpa huset är det här exakt de platser besiktningsmannen går igenom.',
                ],
            ],
            [
                'title' => 'Förebygg mögel i huset',
                'body'  => [
                    'När orsaken är åtgärdad kan du minska risken för att mögel kommer tillbaka. Se till att ventilationen fungerar och att frånluftsventiler är rena och inte blockerade. Vädra kort och ordentligt, använd fläkt vid dusch och matlagning och torka upp vatten som hamnat på golvet.',
                    'Håll koll på rännor och stuprör så att regnvatten leds bort från huset, och se till att marken lutar från fasaden. Förvara inte fuktkänsliga saker direkt mot kalla ytterväggar eller på källargolv. Ett regelbundet underhåll är ofta det billigaste sättet att undvika fuktskador.',
                ],
            ],
            [
                'title' => 'Vad du gör nu',
                'body'  => [
                    'Dokumentera det du sett: ta foton, notera datum, plats och lukt. Åtgärda uppenbara läckor och förbättra ventilationen genom att vädra och se till att frånluftsventiler inte är igensatta. Riv inte upp eller sanera stora ytor på egen hand innan orsaken är känd – du kan sprida mögel och förstöra spår som utredaren behöver.',
                    'Ta kontakt med hemförsäkringsbolaget om du misstänker en vattenskada, och hör av dig till oss om du vill ha en fuktutredning. Köper du hus och misstänker fukt är det klokt att ha en överlåtelsebesiktning gjord innan kontraktet skrivs.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är symptom på mögel i hus?',
                'a' => 'Vanliga symptom är mögellukt, missfärgade fläckar, flagnande färg, lösa tapeter, kondens på fönster och material som buktar sig. Symptomen visar att det kan finnas fukt, men kräver en undersökning för att veta orsaken.',
            ],
            [
                'q' => 'Hur ser jag skillnad på svartmögel och vitmögel?',
                'a' => 'Färgen går inte att lita på som mått på hur allvarligt problemet är. Både svarta, gröna och vita beläggningar tyder på fukt. Hur mycket fukt som finns och hur länge det pågått är det som avgör.',
            ],
            [
                'q' => 'Kan jag mäta mögel i huset själv?',
                'a' => 'Du kan göra en första koll med mögeltest eller fuktmätare, men resultatet ger sällan svar på var fukten kommer ifrån. En fuktutredning ger ett mer tillförlitligt underlag.',
            ],
            [
                'q' => 'Är mögel i hus farligt för hälsan?',
                'a' => 'Det kan vi inte svara på. Har du frågor om hälsa och inomhusmiljö ska du kontakta vården eller kommunens miljökontor, och du kan läsa Folkhälsomyndighetens information om fukt och mögel i bostäder.',
            ],
            [
                'q' => 'Räcker det att torka bort mögel?',
                'a' => 'Oftast inte. Mögel kommer tillbaka om fuktkällan finns kvar. Orsaken måste hittas och åtgärdas innan ytorna renoveras.',
            ],
            [
                'q' => 'Vad kostar en fuktutredning?',
                'a' => 'Se våra riktpriser på prissidan. Du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink'       => null,
        'related'        => ['fuktskada-badrum', 'fuktmatning-betong', 'fuktskada-kallare'],
    ],

    'fuktskada-badrum' => [
        'path'            => '/guider/fuktskada-badrum/',
        'title'           => 'Fuktskada i badrum',
        'navLabel'        => 'Fuktskada badrum',
        'seoTitle'        => 'Fuktskada i badrum – tecken',
        'metaDescription' => 'Fuktskada i badrum: så känner du igen tecken, vanliga orsaker och vad fuktmätning kan visa, och när du bör anlita en besiktningsman för badrumsbesiktning.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: fukt och våtrum',
            'h1'      => 'Fuktskada i badrum',
            'lead'    => 'Tecknen på fuktskada i badrum, vad som brukar ligga bakom och när det är dags att få badrummet undersökt.',
        ],
        'intro' => [
            'En fuktskada i badrum uppstår när vatten tar sig förbi eller runt tätskiktet och in i golv, väggar eller bjälklag. Skadan kan vara dold länge, eftersom kakel och klinker ser hela ut medan konstruktionen bakom är fuktig. Den här guiden går igenom tecknen på fuktskada i badrum, vanliga orsaker, vad en fuktmätning i badrum kan och inte kan visa, och när du bör låta en besiktningsman titta på badrummet.',
            'Guiden är allmän information om byggnader och ersätter inte en undersökning på plats. Funderar du på hälsoeffekter av fukt eller mögel i bostaden ska du vända dig till vården eller kommunens miljökontor – vi ger ingen medicinsk rådgivning.',
        ],
        'steps' => [
            [
                'title' => 'Tecken på fuktskada i badrum',
                'body'  => [
                    'Tecknen på fuktskada i badrum är ofta små och lätta att förbise. Håll utkik efter mörka eller missfärgade fogar som inte går att få rena, kakel som sitter löst eller låter hålt när du knackar på det, golvlister och trösklar som sväller eller skiktar sig, och golv som känns mjukt eller lutar annorlunda än tidigare. Vita avlagringar i fogar, så kallade utfällningar, kan visa att vatten har passerat genom materialet.',
                    'Titta även utanför badrummet. Fläckar, bubblande färg eller en unken lukt på väggen mot ett angränsande rum, i garderoben intill eller i hallen kan betyda att fukt har tagit sig ut ur våtrummet. Mögellukt utan synligt mögel är ett vanligt tecken på att något är fuktigt bakom ytan.',
                    'Skriv gärna ner vad du ser och när du först la märke till det. Många tecken kommer gradvis, och en tidslinje med datum och foton gör det lättare att avgöra om skadan är gammal eller ny, och om den växer.',
                ],
            ],
            [
                'title' => 'Fuktigt badrum eller fuktskada?',
                'body'  => [
                    'Ett badrum är fuktigt efter en dusch, och kondens på speglar och kalla ytor är normalt. Ett fuktigt badrum behöver alltså inte betyda att det finns en fuktskada. Skillnaden är att kondens försvinner när du ventilerat, medan en fuktskada finns kvar och ofta förvärras med tiden.',
                    'Fläckar i taket under badrummet är ett särskilt tydligt varningstecken. Fuktskada i tak vid badrum kan bero på läckage från golv, golvbrunn eller rör i våningen ovanför. Ser du fläckar, missfärgning eller blåsor i taket under ett badrum bör du ta det på allvar och följa upp det även om fläcken är liten.',
                ],
            ],
            [
                'title' => 'Vanliga orsaker till fuktskada i badrum',
                'body'  => [
                    'Den vanligaste orsaken är ett tätskikt som är bristfälligt eller har skadats. Det kan vara fel utfört från början, ha gått sönder vid en senare ändring eller sakna ordentlig anslutning vid golvbrunn, rörgenomföringar och övergången mellan golv och vägg. Silikonfogar i hörn och runt badkar är inte tätskikt utan bara skydd, och de behöver kontrolleras och bytas när de blivit sköra.',
                    'Andra orsaker är läckande vatten- eller avloppsrör bakom vägg eller i golv, en golvbrunn som inte är ordentligt tätad mot tätskiktet och otillräcklig ventilation som gör att fukten blir kvar. En renovering som inte utförts enligt branschens regler för våtrum kan ge fuktskador som visar sig först efter flera år.',
                    'Skador kan också bero på hur badrummet används. Dusch utan fungerande ventilation, vatten som ofta rinner utanför duschplatsen och golvbrunnar som sällan rengörs belastar tätskiktet och konstruktionen mer än nödvändigt. Därför är det viktigt att skilja på bristande utförande och bristande underhåll när du söker orsaken.',
                ],
            ],
            [
                'title' => 'Fuktmätning i badrum – vad går att mäta?',
                'body'  => [
                    'En enkel fuktmätare för hemmabruk mäter oftast bara i ytan och går inte att använda mot kakel och tätskikt på ett tillförlitligt sätt. Ett högt värde kan bero på att du nyligen duschat, och ett lågt värde säger inte att konstruktionen bakom är torr. Mätvärden måste tolkas utifrån material, temperatur och var i konstruktionen du mäter.',
                    'En fuktmätning i badrum som ska ge svar kräver ofta mätning inne i konstruktionen, till exempel via små hål, och en bedömning av hur värdena förhåller sig till vad materialet tål. Därför bör mätningen göras av någon som kan tolka resultatet och dokumentera vad som mätts och var. En fuktmätning visar fuktläget vid mättillfället, men inte alltid varifrån fukten kommer – det kräver en utredning av läckagevägar och konstruktion.',
                ],
            ],
            [
                'title' => 'Vad du kan göra själv',
                'body'  => [
                    'Är det ett akut läckage ska du först stänga huvudkranen. Torka upp vatten, vädra och se till att ventilationen i badrummet fungerar. Dokumentera allt med foton och anteckningar om datum, plats och vad du sett. Det underlättar för både den som ska utreda och för försäkringsbolaget.',
                    'Riv inte upp kakel eller golv på egen hand innan orsaken är känd, eftersom du då kan förstöra spår och sprida fukt. Misstänker du en vattenskada bör du kontakta hemförsäkringsbolaget, eller bostadsrättsföreningen om du bor i bostadsrätt, för att få veta hur och när skadan ska anmälas.',
                    'Använd badrummet försiktigt tills du vet mer, och undvik att duscha så att vatten rinner utanför duschplatsen. Täta inte med silikon över en misstänkt skada, eftersom det kan dölja problemet utan att lösa det.',
                ],
            ],
            [
                'title' => 'När du bör anlita en besiktningsman',
                'body'  => [
                    'Anlita en besiktningsman om du ser tecken på fuktskada i badrummet och vill veta orsak och omfattning innan du renoverar, om du ska köpa en bostad där badrummet är gammalt eller renoverat utan dokumentation, eller om du vill kontrollera ett nyrenoverat badrum innan du betalar hela summan. Då gör en badrumsbesiktning att tätskikt, golvbrunn, anslutningar, ventilation och fuktläge granskas och bedöms av någon som är oberoende av den som utfört arbetet.',
                    'Är skadan redan tydlig kan en fuktutredning vara det bättre steget för att ta reda på varifrån fukten kommer. Du får en skriftlig rapport som du kan använda som underlag mot försäkringsbolag eller entreprenör.',
                    'Det här gäller även bostadsrätter. Där kan föreningen ha ansvar för delar av konstruktionen, så kontakta styrelsen eller förvaltaren tidigt och be om uppgifter om när badrummet senast renoverades.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Hur märker jag att jag har en fuktskada i badrummet?',
                'a' => 'Vanliga tecken är mörka fogar, kakel som sitter löst, svullna golvlister, ett mjukt golv, unken lukt samt fläckar på väggen eller i taket intill och under badrummet. Tecknen visar att det kan finnas fukt men kräver en undersökning för att veta orsaken.',
            ],
            [
                'q' => 'Kan jag göra fuktmätning i badrum själv?',
                'a' => 'Du kan göra en första koll med en fuktmätare, men ytvärden kan vilseleda och säger lite om vad som finns bakom kakel och tätskikt. För ett tillförlitligt svar behövs mätning i konstruktionen och en bedömning av resultatet.',
            ],
            [
                'q' => 'Är ett fuktigt badrum samma sak som en fuktskada?',
                'a' => 'Nej. Kondens efter dusch är normalt och försvinner när du vädrat. En fuktskada finns kvar och märks ofta som fläckar, lukt eller material som ändrats. Är du osäker kan du låta en besiktningsman bedöma det.',
            ],
            [
                'q' => 'Vad gör jag om jag ser fuktfläckar i taket under badrummet?',
                'a' => 'Dokumentera fläckarna, kontakta hemförsäkringsbolaget eller bostadsrättsföreningen och låt orsaken utredas innan du åtgärdar något. Fläckarna kan komma från ett läckage i våningen ovanför.',
            ],
            [
                'q' => 'Vad skiljer badrumsbesiktning från fuktutredning?',
                'a' => 'En badrumsbesiktning granskar hela badrummets utförande och skick, till exempel inför köp eller efter renovering. En fuktutredning används när det redan finns en misstänkt skada och du vill veta orsak och omfattning.',
            ],
            [
                'q' => 'Vad kostar en badrumsbesiktning?',
                'a' => 'Se våra riktpriser på prissidan. Du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'relatedService' => 'badrumsbesiktning',
        'toolLink'       => ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Priskalkylatorn ger ett prisintervall för besiktning och fuktutredning.'],
        'related'        => ['mogel-i-hus', 'fuktmatning-betong', 'tvist-med-hantverkare'],
    ],

    'fuktskada-parkett' => [
        'path'            => '/guider/fuktskada-parkett/',
        'title'           => 'Fuktskada i parkett',
        'navLabel'        => 'Fuktskada parkett',
        'seoTitle'        => 'Fuktskada i parkett och trägolv',
        'metaDescription' => 'Fuktskada i parkett och trägolv: tecken som kupning och skålning, vanliga orsaker och när du bör anlita en besiktningsman för en fuktutredning.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: fukt och golv',
            'h1'      => 'Fuktskada i parkett',
            'lead'    => 'Så känner du igen en fuktskada i parkett, trägolv och laminat, vad som brukar orsaka den och när golvet bör undersökas.',
        ],
        'intro' => [
            'Fuktskada i parkett är ett vanligt problem efter läckage, översvämning eller fukt som tränger upp underifrån. Trä och träbaserade golv tar upp och avger fukt, så en skada visar sig ofta som att golvet ändrar form innan något annat syns. Den här guiden går igenom tecknen, skillnaden mellan olika golvtyper, vanliga orsaker och när det är dags att anlita någon för en fuktutredning.',
            'Guiden är allmän information om byggnader och ersätter inte en undersökning på plats. Har du frågor om hälsa och inomhusmiljö ska du vända dig till vården eller kommunens miljökontor – vi ger ingen medicinsk rådgivning.',
        ],
        'steps' => [
            [
                'title' => 'Tecken på fuktskada på parkettgolv',
                'body'  => [
                    'Tidiga tecken på fuktskada på parkettgolv är ofta att brädorna ändrar form. Kanterna kan resa sig så att golvet kupar sig, eller mitten kan höja sig så att golvet skålar sig. Golvet kan också lyfta från underlaget, få glapp i skarvarna eller börja knarra på platser där det tidigare var tyst.',
                    'Håll även utkik efter mörka fläckar eller ringar, missfärgade eller svarta fogar, lösa golvlister, lack som flagnar och en unken lukt när du står nära golvet. Skador som syns i en liten del av rummet kan vara början på något större, så notera var du ser dem och när de uppstod.',
                    'Skadorna kan visa sig dagar eller veckor efter att vattnet kom, och de kan fortsätta att utvecklas om fukten finns kvar under golvet. Ett golv som ser torrt ut på ytan kan alltså fortfarande vara fuktskadat.',
                ],
            ],
            [
                'title' => 'Parkett, laminat och trägolv skiljer sig åt',
                'body'  => [
                    'Massiva trägolv och parkett med trälager reagerar på fukt genom att svälla, kupa sig eller skåla sig. Ett fuktskadat laminatgolv visar ofta annorlunda skador, eftersom kärnen i skivan sväller och kanterna lyfter. Dessa skador går sällan tillbaka när materialet torkat.',
                    'Ett golv kan också krympa och få springor när luften inomhus är mycket torr, särskilt under uppvärmningssäsongen. Sådana rörelser är normala och är inte en fuktskada. Det som talar för fukt är att skadan sitter lokalt, kommer plötsligt eller följer ett läckage, att det luktar unket eller att golvet är kallt och fuktigt.',
                    'Det kan vara svårt att se vilken golvtyp du har. Vet du inte säkert vad golvet är byggt av, till exempel om det är massivt trä, parkett med toppskikt eller laminat, bör du berätta det för den som ska utreda.',
                ],
            ],
            [
                'title' => 'Vanliga orsaker till fuktskada i parkett',
                'body'  => [
                    'Den vanligaste orsaken till fuktskada på trägolv är vatten som kommit ovanifrån, till exempel från en diskmaskin, tvättmaskin, vattenkokare, blomkruka eller en vattenläcka i ett rör. Översvämning och vatten från ett angränsande våtrum eller en lägenhet ovanför kan ge liknande skador.',
                    'Fukt kan också komma underifrån. Ett golv som lagts på betong eller en golvkonstruktion som inte hunnit torka, markfukt som trycker upp genom en betongplatta eller fukt i ett utrymme under golvet, till exempel en krypgrund, kan göra att parketten tar upp fukt över tid. Då är det underlaget och inte golvet som är det egentliga problemet, och att byta golv löser inte det.',
                    'Golvvärme, fuktiga källare och byggfukt i nyligen byggda eller renoverade hus kan också bidra. Eftersom olika orsaker kräver olika åtgärder är det viktigt att skilja dem åt innan du renoverar.',
                ],
            ],
            [
                'title' => 'Fuktmätning i parkettgolv och undergolv',
                'body'  => [
                    'Med en enkel fuktmätare kan du få en fingervisning om hur fuktigt träet är i ytan. Värdena är dock osäkra och skiljer sig mellan träslag och golvtyper. De säger heller ingenting om vad som finns i undergolvet eller under golvet.',
                    'För att veta om en skada är pågående eller avslutad behövs en strukturerad mätning, ofta både i golvet och i underlaget och ibland över en längre tid. Vid en fuktutredning mäts fukten på flera ställen, byggdelarna bedöms och du får en skriftlig rapport om var fukten finns, hur stor skadan är och vad som troligen orsakar den.',
                    'Mätningen bör också dokumentera vad som mätts, med vilken metod och var. Det gör att resultatet kan jämföras vid en senare kontroll och att det går att följa om fukten minskar eller ökar.',
                ],
            ],
            [
                'title' => 'Vad du kan göra själv',
                'body'  => [
                    'Är det en akut läcka ska du stänga av vattnet och torka upp det som går. Flytta möbler och mattor, vädra och dokumentera golvet med foton och anteckningar. Ta foton innan du gör något annat, eftersom det underlättar för både utredaren och försäkringsbolaget.',
                    'Riv inte upp hela golvet och sätt inte nytt golv ovanpå innan orsaken är känd. Då kan du dölja en fuktskada som fortsätter att utvecklas. Kontakta hemförsäkringsbolaget om du misstänker en vattenskada, och bostadsrättsföreningen om du bor i bostadsrätt, för att få veta hur skadan ska anmälas.',
                ],
            ],
            [
                'title' => 'När du bör anlita en besiktningsman',
                'body'  => [
                    'Anlita en besiktningsman för en fuktutredning om golvet ändrar form utan att du hittar en uppenbar orsak, om skadan kommer tillbaka efter att du torkat eller bytt golvet, om du ska köpa en bostad med ett golv som visar tecken på fukt, eller om du behöver ett oberoende underlag i en diskussion om ansvar eller försäkring.',
                    'Utredningen visar om fukten kommer ovanifrån eller underifrån, hur långt skadan sträcker sig och vad som behöver åtgärdas. Utredaren är oberoende och utför inte själv åtgärderna, så bedömningen styrs inte av vem som ska göra jobbet.',
                    'Vid husköp kan en överlåtelsebesiktning avslöja tecken på fukt i golv och underlag innan du skriver kontrakt, och det går då att få svar på om en djupare fuktutredning behövs.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är tecken på fuktskada i parkett?',
                'a' => 'Vanliga tecken är att golvet kupar sig eller skålar sig, lyfter från underlaget, får mörka fläckar eller svarta fogar, knarrar eller luktar unket. Tecknen visar att det kan finnas fukt men kräver en undersökning för att veta orsaken.',
            ],
            [
                'q' => 'Går ett fuktskadat laminatgolv att rädda?',
                'a' => 'Ofta inte. När kärnen i laminat har svällt går skadan sällan tillbaka. Det viktiga är att ta reda på varifrån fukten kommer så att inte det nya golvet drabbas på samma sätt.',
            ],
            [
                'q' => 'Är det en fuktskada eller bara torr luft?',
                'a' => 'Springor mellan brädorna under vintern kan bero på torr inomhusluft och är normalt. Fläckar, kupning, lukt och lokala skador som uppkommit plötsligt talar i stället för fukt.',
            ],
            [
                'q' => 'Kan jag mäta fukt i parkett själv?',
                'a' => 'Du kan göra en första koll med en fuktmätare, men värdena i ytan är osäkra och visar inte vad som finns i underlaget. En fuktutredning ger ett mer tillförlitligt underlag.',
            ],
            [
                'q' => 'Täcker hemförsäkringen en fuktskada i parkett?',
                'a' => 'Det beror på orsaken och på dina försäkringsvillkor. Kontakta ditt försäkringsbolag och dokumentera skadan. Vi kan inte avgöra vad din försäkring täcker.',
            ],
            [
                'q' => 'Vad kostar en fuktutredning?',
                'a' => 'Se våra riktpriser på prissidan. Du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink'       => null,
        'related'        => ['mogel-i-hus', 'fuktmatning-betong', 'fuktskada-badrum'],
    ],

    'fuktskada-kallare' => [
        'path'            => '/guider/fuktskada-kallare/',
        'title'           => 'Fuktskada i källare',
        'navLabel'        => 'Fuktskada källare',
        'seoTitle'        => 'Fuktskada i källare – orsaker',
        'metaDescription' => 'Fuktskada i källare: tecken, vanliga orsaker som dränering och markfukt, hur en utredning går till och när du bör anlita en besiktningsman.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: fukt och källare',
            'h1'      => 'Fuktskada i källare',
            'lead'    => 'Tecken, vanliga orsaker och hur en fuktutredning i källaren går till innan du bestämmer dig för en åtgärd.',
        ],
        'intro' => [
            'Fuktskada i källare är en av de vanligaste fuktfrågorna i äldre och nyare hus. Källaren ligger helt eller delvis under marken, så vatten och fukt från marken, regn och luftens fuktighet påverkar den mer än andra delar av huset. Den här guiden går igenom tecknen på fuktskador i källaren, vanliga orsaker och hur en utredning går till.',
            'Vi utför inte själva fuktsanering eller andra åtgärder. Det vi beskriver här är utredningen, alltså att ta reda på varifrån fukten kommer och hur stor skadan är, innan du väljer åtgärd. Guiden är allmän information och ersätter inte en undersökning på plats. Hälsofrågor om fukt och mögel i bostaden hänvisar vi till vården eller kommunens miljökontor.',
        ],
        'steps' => [
            [
                'title' => 'Tecken på fuktskador i källaren',
                'body'  => [
                    'Ett tydligt tecken på fuktskada i källare är en unken, kall källarlukt som blir starkare när du stänger dörren en stund. Titta också efter mörka eller missfärgade fläckar, särskilt längst ned på väggarna, flagnande färg och puts, rost på metall och vita avlagringar på betong eller tegel. Vita avlagringar kallas ofta salpeter eller utfällningar och kan visa att vatten har passerat genom materialet.',
                    'Mögel på väggar, i hörn eller på förvarade saker, fuktiga kartonger, korrosion på pannor och rör samt golv som är fuktigt eller kallt kan också peka på fukt. Se om något ser ut att ha förändrats, och notera när det händer, till exempel efter kraftigt regn, snösmältning eller på sommaren.',
                    'En källare som luktar kan vara ett tecken även när allt ser torrt ut. Förvarar du kläder, papper eller textilier i källaren kan lukten sätta sig i dem, och det kan vara första varningen om att fukt finns i väggar eller golv.',
                ],
            ],
            [
                'title' => 'Vanliga orsaker till fuktskada i källaren',
                'body'  => [
                    'Vanliga orsaker är vatten som inte leds bort från huset. Det kan vara en dränering som har slutat fungera, stuprör som släpper vatten nära grunden, mark som lutar mot huset eller ett tätskikt i källarväggen som skadats eller aldrig funnits. Markfukt kan också vandra genom betongplattan och grundmuren, särskilt i hus som byggdes utan fuktskydd.',
                    'Även fukt i luften kan ge problem. Varm och fuktig luft som kommer in i en kall källare under sommaren kan kondensera på kalla väggar och golv och ge samma tecken som en läcka. Ett läckande rör, bristfällig ventilation och fuktiga material som förvaras i källaren kan förvärra läget. Att orsaken är kondens i stället för inträngande vatten ändrar vilken åtgärd som är rätt.',
                    'Orsaken är ofta en kombination. Ett hus kan ha både en åldrad dränering och bristande ventilation, och då räcker det inte att åtgärda bara en av dem. Det är en av anledningarna till att utredningen bör se hela husets förutsättningar.',
                ],
            ],
            [
                'title' => 'Fuktsanering i källare – varför utredningen kommer först',
                'body'  => [
                    'Många börjar med att söka efter fuktsanering i källaren när de ser en fuktskada. Det är förståeligt, men en åtgärd utan känd orsak kan bli dyr och ge liten effekt. Att måla med fuktspärrande färg eller sätta en avfuktare löser sällan problemet om vatten fortfarande tränger in utifrån.',
                    'En utredning ska svara på varifrån fukten kommer, hur långt skadan sträcker sig och vad som är mest sannolikt att fungera. Därför bör utredningen vara oberoende av den som ska utföra åtgärden. Vi sanerar inte själva, och rapporten kan du ge till de hantverkare du ber om offert från, så att alla räknar på samma underlag.',
                ],
            ],
            [
                'title' => 'Så går en fuktutredning i källare till',
                'body'  => [
                    'Utredningen börjar med en genomgång av huset: hur källaren används, när du märkt fukt, tidigare åtgärder och om huset har dränering. Därefter granskas väggar, golv, tak, rörgenomföringar och utsidan med marknivåer, stuprör och avvattning. Fukt mäts i de byggdelar som berörs, ofta på flera ställen, och ibland följs temperatur och luftfuktighet över en tid för att skilja kondens från inträngande vatten.',
                    'Du får en skriftlig rapport med observationer, mätvärden, bedömd orsak och förslag på vad som bör åtgärdas och i vilken ordning. Rapporten kan användas som underlag när du ber om offerter eller för att dokumentera skadan mot försäkringsbolag eller en tidigare ägare.',
                    'Mätningen visar läget vid ett visst tillfälle. Därför kan utredaren föreslå en uppföljning efter en tid, till exempel efter en torr eller regnig period, om det behövs för att kunna dra säkra slutsatser.',
                ],
            ],
            [
                'title' => 'Vad du kan göra själv',
                'body'  => [
                    'Du kan förbättra läget redan innan en utredning. Se till att vatten från tak och stuprör leds bort från huset, ta bort vegetation och kompost som ligger tätt mot grunden och vädra när det är torrt och svalt ute. Vädra inte med fuktig sommarluft, eftersom det kan göra kondensen värre.',
                    'Flytta föremål från väggarna, dokumentera fläckar med foton och datum och undvik att bygga in eller ommåla ytorna innan orsaken är känd. Om du planerar att inreda källaren till boyta är det klokt att utreda fukten först.',
                    'Åtgärder som kräver ingrepp i grunden, till exempel ny dränering eller tätskikt, ska du ta in flera offerter på. Har du en rapport att utgå från blir offerterna lättare att jämföra.',
                ],
            ],
            [
                'title' => 'När du bör anlita en besiktningsman',
                'body'  => [
                    'Anlita en besiktningsman för en fuktutredning om du har tecken på fukt som kommer tillbaka, om du vill veta orsaken innan du lägger pengar på dränering eller annan åtgärd, eller om du ska inreda källaren. Även när du ska köpa hus bör källaren ingå i en överlåtelsebesiktning, eftersom fukt där ofta är dyr att åtgärda.',
                    'En oberoende utredning ger dig ett beslutsunderlag som inte hänger ihop med vem som utför arbetet. Därefter bestämmer du själv vilka åtgärder du vill ta in offerter på.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är tecken på fuktskada i källare?',
                'a' => 'Vanliga tecken är unken lukt, mörka fläckar längst ned på väggarna, flagnande färg, vita utfällningar, rost och fuktigt golv. Tecknen visar att det kan finnas fukt men kräver en undersökning för att veta orsaken.',
            ],
            [
                'q' => 'Sanerar ni fukt i källare?',
                'a' => 'Nej. Vi utreder orsak och omfattning och ger dig ett underlag att använda när du tar in offerter från hantverkare. Den som utreder är därmed oberoende av den som utför åtgärden.',
            ],
            [
                'q' => 'Kan en källare vara fuktig på grund av kondens?',
                'a' => 'Ja. Varm och fuktig luft kan kondensera på kalla ytor i källaren, särskilt under sommaren. Det ger liknande tecken som en läcka men kräver en annan åtgärd, vilket en utredning kan visa.',
            ],
            [
                'q' => 'Räcker det att installera en avfuktare?',
                'a' => 'En avfuktare kan sänka luftfuktigheten, men den tar sällan bort orsaken om vatten tränger in utifrån. Utred orsaken först och välj sedan åtgärd.',
            ],
            [
                'q' => 'Behöver jag byta dränering?',
                'a' => 'Det går inte att avgöra utan att orsaken är utredd. Fukt behöver inte betyda att dräneringen är defekt. En utredning visar om dränering, tätskikt, ventilation eller något annat är det som ska åtgärdas.',
            ],
            [
                'q' => 'Vad kostar en fuktutredning?',
                'a' => 'Se våra riktpriser på prissidan. Du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink'       => null,
        'related'        => ['mogel-i-hus', 'fuktmatning-betong', 'fuktskada-badrum'],
    ],

    'fuktmatning-betong' => [
        'path'            => '/guider/fuktmatning-betong/',
        'title'           => 'Fuktmätning i betongplatta',
        'navLabel'        => 'Fuktmätning betong',
        'seoTitle'        => 'Fuktmätning betong – egen eller RBK',
        'metaDescription' => 'Fuktmätning i betong: så fungerar en fuktmätare för betongplatta, när en egen mätare räcker och när du behöver RBK-mätning av fackman.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: fukt och mätning',
            'h1'      => 'Fuktmätning i betongplatta',
            'lead'    => 'När räcker en egen fuktmätare, och när behövs en mätning av en fackman? En genomgång inför golvläggning, renovering och misstänkt fukt.',
        ],
        'intro' => [
            'Fuktmätning i betong handlar om att ta reda på hur mycket fukt som finns i en betongplatta eller ett betonggolv. Frågan blir aktuell när du ska lägga ett nytt golv, när du misstänker en fuktskada eller när du köper eller säljer ett hus. Många söker efter en fuktmätare till betongplatta för att kunna göra kontrollen själv, och ibland går det bra. I andra lägen behövs en mätning som någon annan kan lita på.',
            'Den här guiden förklarar vad en egen mätare kan och inte kan visa, hur fuktmätning i betong går till och när du bör låta en fackman göra mätningen, till exempel en RBK-mätning. Guiden är allmän information och ersätter inte en undersökning på plats. Vi anger inga gränsvärden här, eftersom rätt värde beror på material, konstruktion och tillverkarens krav.',
        ],
        'steps' => [
            [
                'title' => 'Varför fukten i betongen spelar roll',
                'body'  => [
                    'Betong innehåller mycket vatten när den gjuts, och det tar tid för det att torka ut. Läggs ett tätt ytskikt som plastmatta, parkett eller en klistrad golvbeläggning på en platta som fortfarande är för fuktig kan fukten bli instängd. Följderna kan vara lösa skarvar, bubblor, dålig lukt från lim och underlag, och i värsta fall mikrobiell påväxt under golvet.',
                    'Samma sak gäller en platta på mark eller i en källare som tar upp fukt underifrån eller från marken runt huset. Då handlar det inte bara om byggfukt som ska torka, utan om en fuktkälla som finns kvar. Det är en viktig skillnad, eftersom ett torkat golv kan bli fuktigt igen om orsaken inte åtgärdas.',
                ],
            ],
            [
                'title' => 'Vad en egen fuktmätare kan visa',
                'body'  => [
                    'Enkla fuktmätare för hemmabruk mäter oftast ytan på materialet, antingen genom att trycka mätstift mot ytan eller genom att hålla en givare mot den. De är bra på att visa skillnader mellan olika platser på samma golv, och på att hitta fläckar som sticker ut. Däremot säger de lite om hur fuktigt det är längre ned i betongen, där fukten sitter kvar länge efter att ytan har torkat.',
                    'Betong är dessutom ett svårt material att mäta på. Armering, tillsatser, ytbehandlingar och skikt av spackel eller avjämning kan påverka värdet. Siffran på displayen är därför ofta en fingervisning, inte ett svar som du kan bygga ett beslut på. Läs alltid tillverkarens instruktion och var försiktig med att jämföra ett ytvärde med krav som gäller för mätning inne i betongen.',
                ],
            ],
            [
                'title' => 'Så går en fuktmätning i betong till',
                'body'  => [
                    'En mer tillförlitlig mätning görs normalt inne i betongen. Man borrar ett hål i plattan, låter hålet stå tillslutet under en viss tid så att fukten hinner jämna ut sig och mäter sedan den relativa fuktigheten i hålet med en givare. Tiden och temperaturen i rummet påverkar resultatet, så mätningen ska göras under kontrollerade förhållanden och följa en fastställd metod.',
                    'Antal mätpunkter, borrhålens djup och placering beror på plattans tjocklek, hur den torkat och vad som ska läggas ovanpå. En erfaren mätare vet var fukten brukar sitta kvar, till exempel vid ytterväggar, intill avlopp och på platser där plattan torkat sämre. Mätvärdena ska också dokumenteras med plats, tid och förhållanden, annars går de inte att följa upp.',
                ],
            ],
            [
                'title' => 'När en egen mätare räcker',
                'body'  => [
                    'Du kan ha nytta av en egen mätare för en första orientering. Det gäller till exempel om du vill se om någon del av ett golv skiljer sig från resten, följa hur ett golv torkar över tid eller göra en grov koll innan du kontaktar någon. Då är det bra att mäta på samma ställen vid flera tillfällen och föra anteckningar, så att du ser en utveckling och inte bara ett enskilt värde.',
                    'En egen mätare räcker däremot inte som underlag för att avgöra om ett golv är redo för ett tätt ytskikt, eller för att visa att en fuktskada finns eller inte finns. Det gäller särskilt om pengar, garanti eller ansvar är inblandade.',
                ],
            ],
            [
                'title' => 'När en RBK-mätning eller fackman behövs',
                'body'  => [
                    'En mätning av en fackman är befogad när resultatet ska ligga till grund för ett beslut eller kunna visas för andra. Det kan vara före golvläggning där golvtillverkaren eller entreprenören ställer krav på dokumenterad fukthalt, vid nybyggda eller nygjutna plattor, vid en misstänkt fuktskada, vid köp eller försäljning av hus och vid en tvist om vem som är ansvarig. RBK är en branschmetod och en auktorisation för fuktmätning i betong, och en RBK-mätning används ofta när du behöver ett dokumenterat mätresultat.',
                    'Fråga alltid vilken metod som används, hur många mätpunkter som ingår och vad du får i rapporten. Be gärna om att få veta vilka krav värdena ska jämföras med, eftersom det är de kraven som avgör om golvet kan läggas eller inte.',
                ],
            ],
            [
                'title' => 'När du bör anlita en besiktningsman',
                'body'  => [
                    'Om du misstänker att fukten kommer från en skada och inte bara är byggfukt, räcker det inte att mäta betongen. Då behöver orsaken utredas: hur fukten tar sig in, hur långt den spridit sig och vilka byggdelar som är påverkade. Det är en fuktutredning, där mätningen i betongplattan är en del av underlaget.',
                    'En oberoende besiktningsman kan göra den utredningen och ge dig en skriftlig rapport som du kan använda mot entreprenör eller försäkringsbolag. Kontakta oss om du är osäker på om en egen mätning räcker eller vill ha ett objektivt underlag inför golvläggning, renovering eller husaffär.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Räcker en fuktmätare för betongplatta som jag köper själv?',
                'a' => 'För en första orientering kan det räcka, men inte som underlag för att avgöra om ett golv kan beläggas eller om en skada finns. Enkla mätare visar ofta bara ytan, och värdena kan påverkas av betongens sammansättning och ytskikt.',
            ],
            [
                'q' => 'Vad är RBK?',
                'a' => 'RBK är en branschmetod och en auktorisation för fuktmätning i betong. Frågan vad som gäller i ditt fall bör du ställa till den som utför mätningen, så att du vet vilken metod och vilka krav som ingår.',
            ],
            [
                'q' => 'Hur lång tid tar det för en betongplatta att torka?',
                'a' => 'Det varierar med plattans tjocklek, betongens sammansättning, temperatur och luftväxling. Därför går det inte att ange en säker tid i allmänhet. Mätning är det enda sättet att veta hur långt torkningen kommit.',
            ],
            [
                'q' => 'Kan jag mäta fukt i betong genom ett golvmaterial?',
                'a' => 'Ytmätare påverkas av materialet ovanpå och ger sällan ett pålitligt värde för betongen under. Vill du veta vad som finns under ett befintligt golv bör mätningen göras av någon som kan metoden.',
            ],
            [
                'q' => 'Vad kostar en fuktmätning i betong?',
                'a' => 'Se våra riktpriser på prissidan. Du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink'       => ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Priskalkylatorn ger ett prisintervall för besiktning och fuktutredning.'],
        'related'        => ['fuktskada-kallare', 'fuktskada-parkett', 'mogel-i-hus'],
    ],

    'tvist-med-hantverkare' => [
        'path'            => '/guider/tvist-med-hantverkare/',
        'title'           => 'Tvist med hantverkare',
        'navLabel'        => 'Tvist med hantverkare',
        'seoTitle'        => 'Tvist med hantverkare – reklamation',
        'metaDescription' => 'Fel efter renovering? Så reklamerar du till hantverkaren, dokumenterar felen, när ARN kan vara aktuell och hur en oberoende besiktning ger underlag.',
        'lastReviewed'    => '2026-10-01',
        'hero' => [
            'eyebrow' => 'Guide: reklamation och tvist',
            'h1'      => 'Tvist med hantverkare',
            'lead'    => 'Så går du tillväga när något blivit fel efter en renovering: dokumentera, reklamera skriftligt och skaffa ett oberoende underlag.',
        ],
        'intro' => [
            'Fel efter renovering är vanliga att känna igen sig i: ett badrum som läcker, ett golv som inte blev som överenskommet eller ett jobb som aldrig blev färdigt. När du och hantverkaren inte är överens om vad som är fel, eller vem som ska åtgärda det, uppstår en tvist. Hur du agerar i början påverkar ofta hur det går, så det är värt att göra rätt från start.',
            'Den här guiden beskriver ett sakligt tillvägagångssätt för reklamation av hantverkare: hur du dokumenterar fel, reklamerar skriftligt och använder en oberoende besiktning som underlag. Den är allmän information och inte juridisk rådgivning. Regler och frister kan skilja sig åt mellan olika situationer, så kontrollera alltid vad som gäller för dig hos rätt instans.',
        ],
        'steps' => [
            [
                'title' => 'Skilj på fel och missnöje',
                'body'  => [
                    'Det första du behöver göra är att reda ut vad som faktiskt är fel. Ett fel är något som avviker från vad ni avtalat eller från vad du rimligen kan förvänta dig av ett arbete av det slaget. Att resultatet inte blev som du föreställde dig behöver inte vara ett fel, om det ändå följer avtalet och god yrkesmässig standard.',
                    'Gå därför tillbaka till offerten, avtalet, ritningar, ändrings- och tilläggsbeställningar och det som skrivits i mejl och meddelanden. Skriv ned, punkt för punkt, vad som skulle göras och vad som inte stämmer. Det blir grunden för allt du gör sedan. Notera också när du upptäckte felet och hur: det kan få betydelse för frågan om du reklamerat i tid.',
                ],
            ],
            [
                'title' => 'Dokumentera felen',
                'body'  => [
                    'Ta foton och gärna film av felen innan något ändras, och komplettera med datum, plats och en kort beskrivning av vad du ser. Fotografera även helheten så att det framgår var i bostaden felet finns. Spara kvitton, avtal, fakturor, betalningsbevis och korrespondens på ett ställe, och för anteckningar om samtal med hantverkaren.',
                    'Åtgärda inte felet själv eller via någon annan innan du dokumenterat det och gett hantverkaren en chans att se det. Det kan försvåra bevisningen om vad som var fel och vem som ansvarar. Om felet orsakar akuta skador, till exempel en läcka, begränsa skadan och dokumentera den först.',
                ],
            ],
            [
                'title' => 'Reklamera skriftligt och i tid',
                'body'  => [
                    'Att reklamera betyder att du meddelar hantverkaren att arbetet är felaktigt. Gör det skriftligt, till exempel via mejl eller brev, så att du kan visa att och när du hört av dig. Beskriv felen konkret, hänvisa till dina foton och ange vad du vill att hantverkaren ska göra och en rimlig tid för det.',
                    'För hantverkartjänster åt privatpersoner finns konsumenttjänstlagen, som bland annat reglerar fel i tjänsten och reklamation. Det finns krav på att du reklamerar inom en viss tid efter att du upptäckt, eller borde ha upptäckt, felet, och en yttre tidsgräns. Vänta därför inte med att höra av dig. Hur lagen gäller i ditt fall ska du kontrollera hos Konsumentverket, kommunens konsumentvägledning eller en jurist.',
                ],
            ],
            [
                'title' => 'Ge hantverkaren möjlighet att rätta till',
                'body'  => [
                    'I många fall löser sig tvisten om hantverkaren får se felet och erbjuds att åtgärda det. Håll samtalet sakligt och skriv ned det ni kommer överens om, helst i ett meddelande som båda kan bekräfta. Undvik hätska formuleringar, eftersom de ofta försämrar möjligheterna till en lösning. Be om en tidplan för åtgärden och följ upp den skriftligt om den inte hålls.',
                    'Var försiktig med att hålla inne betalning eller ta in en annan firma innan du vet vad som gäller. Du kan ha rätt att hålla inne en del av betalningen, men det finns villkor, och fel handlande kan göra att du själv hamnar i en svagare position. Fråga konsumentvägledningen innan du agerar.',
                ],
            ],
            [
                'title' => 'Oberoende besiktning som underlag',
                'body'  => [
                    'Om ni inte är överens om vad som är fel eller hur allvarligt det är kan en oberoende besiktning ge ett neutralt underlag. En besiktningsman som inte har något intresse i frågan undersöker arbetet, beskriver bristerna och dokumenterar dem i en skriftlig rapport med foton. Du får då något konkret att visa hantverkaren, försäkringsbolaget och i förekommande fall en nämnd eller domstol.',
                    'Tänk på att en besiktning inte ersätter en dialog med hantverkaren. Den kan visa vad som är fel och hur det avviker, men inte avgöra tvisten. Om fukt eller dolda skador misstänks kan en fuktutredning behövas, och för att kontrollera hur ett arbete utförts mot avtalet är en slutbesiktning ofta rätt väg.',
                ],
            ],
            [
                'title' => 'Om ni inte kommer överens – och när du bör anlita en besiktningsman',
                'body'  => [
                    'Går det inte att lösa tvisten direkt kan du vända dig till Allmänna reklamationsnämnden (ARN), som prövar tvister mellan konsumenter och företag och lämnar en rekommendation. Du behöver normalt ha framfört ditt krav till företaget först, och en rekommendation från ARN är inte bindande. Läs på ARN:s webbplats vilka tvister som tas upp och hur du anmäler. Har du rättsskydd i hemförsäkringen kan du även fråga försäkringsbolaget, och för juridisk rådgivning vänder du dig till en jurist eller konsumentvägledningen.',
                    'Anlita en besiktningsman så tidigt som möjligt om felen är oklara, om du inte litar på hantverkarens bedömning eller om du behöver ett skriftligt underlag till reklamationen eller till ARN. Är jobbet nyligen avslutat kan en slutbesiktning vara det bästa sättet att få felen dokumenterade. Kontakta oss så berättar vi vad som passar din situation.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Hur reklamerar jag till en hantverkare?',
                'a' => 'Skriv till hantverkaren, helst per mejl eller brev, och beskriv felen konkret med foton och datum. Ange vad du vill att hantverkaren ska åtgärda och inom vilken rimlig tid. Spara kopior av allt du skickar.',
            ],
            [
                'q' => 'Vad är konsumenttjänstlagen?',
                'a' => 'Det är en lag som gäller bland annat hantverkartjänster som en företagare utför åt en privatperson. Den reglerar bland annat fel och reklamation. Vad som gäller i just ditt fall bör du kontrollera hos Konsumentverket eller en jurist.',
            ],
            [
                'q' => 'Vad gör Allmänna reklamationsnämnden (ARN)?',
                'a' => 'ARN prövar tvister mellan konsumenter och företag och lämnar en rekommendation om hur tvisten bör lösas. Rekommendationen är inte bindande. Du bör ha framfört ditt krav till företaget innan du vänder dig till nämnden.',
            ],
            [
                'q' => 'Kan en besiktningsman avgöra tvisten?',
                'a' => 'Nej. En oberoende besiktningsman kan undersöka arbetet och beskriva fel och brister i en rapport, men det är inte en domstol eller nämnd. Rapporten kan fungera som underlag vid reklamation eller i en prövning.',
            ],
            [
                'q' => 'Ska jag betala fakturan om jag reklamerat?',
                'a' => 'Det beror på situationen, och vi ger inte juridisk rådgivning. Du kan ha rätt att hålla inne en del av betalningen, men det finns villkor. Kontakta Konsumentverkets vägledning eller en jurist innan du agerar.',
            ],
        ],
        'relatedService' => 'slutbesiktning',
        'toolLink'       => ['path' => '/priser/', 'label' => 'Se priser på besiktning', 'text' => 'Riktpriser för slutbesiktning och andra besiktningar.'],
        'related'        => ['fuktskada-badrum', 'mogel-i-hus', 'fuktmatning-betong'],
    ],
];
