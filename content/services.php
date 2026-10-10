<?php
/** Swedish service content; each record owns one search intent. No invented provider credentials or prices. */
declare(strict_types=1);

return [
    'overlatelsebesiktning' => [
        'path' => '/overlatelsebesiktning/',
        'title' => 'Överlåtelsebesiktning',
        'navLabel' => 'Överlåtelsebesiktning',
        'cluster' => 'kop',
        'parent' => null,
        'seoTitle' => 'Överlåtelsebesiktning Stockholm',
        'metaDescription' => 'Begär offert på överlåtelsebesiktning av villa, radhus eller fritidshus i Stockholm. Läs om omfattning, protokoll och förberedelser inför husköpet.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Överlåtelsebesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Inför köp eller försäljning av hus: få byggnadens synliga skick, risker och behov av fortsatt undersökning dokumenterade. Ange kommun och bostadstyp för en offert.',
        ],
        'includes' => [
            'Genomgång av tillgängliga byggnadshandlingar och uppgifter om huset',
            'Okulär kontroll av åtkomliga byggnadsdelar enligt avtal',
            'Dokumentation av iakttagelser, risker och föreslagna fortsatta undersökningar',
        ],
        'excludes' => [
            'Ingen garanti för att alla dolda fel upptäcks',
            'Ingrepp i konstruktioner eller specialistkontroll av installationer utan särskilt avtal',
            'Fuktmätning, radon, el och energideklaration är separata moment',
        ],
        'weNeed' => [
            'Byggår, boyta och adress eller kommun',
            'Säljarens frågelista, ritningar och tidigare protokoll',
            'Tillträde till vind, grund och andra överenskomna utrymmen',
        ],
        'sections' => [
            [
                'h2' => 'Vad är en överlåtelsebesiktning?',
                'body' => [
                    'En överlåtelsebesiktning är en byggnadsteknisk genomgång som ofta görs i samband med husköp. Besiktningsmannen granskar avtalade, åtkomliga delar och sammanställer ett protokoll. Syftet är att ge köpare eller säljare ett tydligare beslutsunderlag innan affären går vidare.',
                    'En anteckning om en riskkonstruktion är inte samma sak som en konstaterad skada. Fråga vad bedömningen grundas på och om en fortsatt teknisk undersökning behövs. Ett protokoll ska också visa vad som inte kunde kontrolleras och varför.',
                ],
            ],
            [
                'h2' => 'Besiktning av villa, radhus och fritidshus',
                'body' => [
                    'Husets konstruktion och tillgänglighet styr uppdraget. För en villa kan exempelvis vind, källare och grund vara viktiga. För ett radhus behöver gränsen mot gemensamma byggnadsdelar redas ut. Ett fritidshus kan ha andra förutsättningar för uppvärmning, vatten och användning under året.',
                    'Boka med utrymme för att läsa protokollet och ställa frågor. Om huset redan har besiktigats av säljaren bör du kontrollera vem utlåtandet gäller för och vilka villkor som gäller för en eventuell köpargenomgång.',
                ],
            ],
            [
                'h2' => 'Undersökningsplikt och besiktningsklausul',
                'body' => [
                    'Som köpare behöver du sätta dig in i din undersökningsplikt. En besiktning är ett hjälpmedel och ersätter inte automatiskt alla undersökningar som kan krävas. Diskutera med mäklaren hur tid för besiktning och eventuella följdfrågor hanteras i köpeavtalet.',
                    'Förfrågan är ingen bokning. I offerten behöver utförare, omfattning, pris, tillägg och leverans av protokoll framgå. Skriv gärna när ett eventuellt kontrakt ska tecknas; då kan tidsförutsättningarna stämmas av.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Vad kostar en husbesiktning?',
                'a' => 'Priset beror på husets storlek, konstruktion, åtkomlighet och vilka tillägg du beställer. Ange byggår, ungefärlig yta och kommun för att få en jämförbar offert.',
            ],
            [
                'q' => 'Ingår fuktmätning?',
                'a' => 'Inte automatiskt. Be om en specificerad omfattning och mätmetod om du vill lägga till fuktmätning eller en fördjupad undersökning.',
            ],
            [
                'q' => 'Behöver jag närvara?',
                'a' => 'Närvaro kan göra det lättare att förstå iakttagelserna och ställa frågor. Stäm av med utföraren hur genomgången går till.',
            ],
            [
                'q' => 'Är besiktningen en försäkring mot dolda fel?',
                'a' => 'Nej. En besiktning och en försäkring är olika saker. Kontrollera uppdragsvillkoren och vilka begränsningar som gäller.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'lagenhetsbesiktning',
            'fuktutredning',
            'takbesiktning',
        ],
        'guides' => [
            'infor-husbesiktning',
            'jamfora-besiktningsoffert',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
        'sources' => [
            [
                'label' => 'Konsumentverket: mäklarens skyldigheter och undersökningsplikt',
                'url' => 'https://www.konsumentverket.se/varor-och-tjanster/maklarens-skyldigheter/',
            ],
        ],
    ],
    'lagenhetsbesiktning' => [
        'path' => '/lagenhetsbesiktning/',
        'title' => 'Lägenhetsbesiktning',
        'navLabel' => 'Lägenhetsbesiktning',
        'cluster' => 'kop',
        'parent' => null,
        'seoTitle' => 'Lägenhetsbesiktning i Stockholm',
        'metaDescription' => 'Besiktning av lägenhet eller bostadsrätt i Stockholm inför köp och efter renovering. Se vad som kan granskas och begär offert för din lägenhet.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Lägenhetsbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'För dig som ska köpa en bostadsrätt eller vill kontrollera en renoverad lägenhet. Få synliga brister och frågor om badrum, kök och ytskikt tydligt dokumenterade.',
        ],
        'includes' => [
            'Okulär genomgång av överenskomna rum och åtkomliga ytor',
            'Bedömning av synliga brister och möjliga behov av specialistutredning',
            'Skriftligt utlåtande enligt uppdragets omfattning',
        ],
        'excludes' => [
            'Föreningens hela byggnad eller ekonomi ingår inte',
            'Dolda tätskikt och ledningar kan inte bedömas enbart från ytan',
            'El-, ventilations- och VVS-kontroller kräver särskilt uppdrag',
        ],
        'weNeed' => [
            'Planritning, byggår och ungefärlig yta',
            'Uppgifter om ombyggnader och våtrumsdokument',
            'Föreningens stadgar och relevant information om ansvarsfördelningen',
        ],
        'sections' => [
            [
                'h2' => 'Besiktning av bostadsrätt inför köp',
                'body' => [
                    'En lägenhetsbesiktning kan hjälpa dig att ställa mer konkreta frågor om bostaden. Uppdraget kan omfatta åtkomliga ytskikt, tecken på tidigare skador och synliga detaljer i kök och badrum. Det behöver vara tydligt vad besiktningsmannen ska undersöka och vilket underlag som finns.',
                    'För bostadsrätt är det viktigt att skilja lägenhetens skick från föreningens gemensamma fastighet. Kontrollera även föreningens information om planerat underhåll. En teknisk lägenhetsbesiktning ersätter inte en genomgång av årsredovisning, stadgar eller kommande avgiftsbeslut.',
                ],
            ],
            [
                'h2' => 'Efter renovering eller vid misstänkta fel',
                'body' => [
                    'Har köket eller badrummet nyligen renoverats? Beskriv vilka arbeten som har utförts och vilka fel du vill få bedömda. En kontroll mot beställning och avtal kan behöva utformas som en entreprenad- eller slutbesiktning i stället för en allmän skickbedömning.',
                    'Om det finns lukt, missfärgningar eller återkommande fukt kan en fuktutredning behövas. En fuktindikering på ytan ger inte ensam besked om tätskiktets funktion eller orsaken till en skada.',
                ],
            ],
            [
                'h2' => 'Vad ska du skicka med i förfrågan?',
                'body' => [
                    'Ange kommun, lägenhetens yta och om ärendet gäller köp, renovering eller ett särskilt problem. Beskriv vilka rum som ska granskas och om du har en tidsgräns inför kontrakt eller överlämning.',
                    'Be utföraren förklara vilka gemensamma delar som ligger utanför uppdraget. Fastighetsbesiktning för styrelsen har ett annat syfte och behandlas på vår BRF-sida.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Besiktigar man en lägenhet inför köp?',
                'a' => 'Det kan vara relevant, särskilt efter omfattande renovering eller när du vill förstå synliga brister. Välj omfattning efter bostaden och dina frågor.',
            ],
            [
                'q' => 'Vad kostar besiktning av bostadsrätt?',
                'a' => 'Yta, antal våtrum, tillgängligt underlag och uppdragets syfte påverkar priset. Beskriv lägenheten för en offert.',
            ],
            [
                'q' => 'Ingår föreningens stammar och tak?',
                'a' => 'Inte i en vanlig lägenhetsbesiktning. Föreningens gemensamma byggnadsdelar behöver ett separat fastighetsuppdrag.',
            ],
            [
                'q' => 'Kan jag få ett utlåtande om en renovering?',
                'a' => 'Ja, begär en kontroll med tydlig koppling till de beställda arbetena och det avtal som ska ligga till grund för bedömningen.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'badrumsbesiktning',
            'slutbesiktning',
            'brf',
        ],
        'guides' => [
            'infor-husbesiktning',
            'reklamera-renovering',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'statusbesiktning' => [
        'path' => '/statusbesiktning/',
        'title' => 'Statusbesiktning',
        'navLabel' => 'Statusbesiktning',
        'cluster' => 'kop',
        'parent' => null,
        'seoTitle' => 'Statusbesiktning i Stockholm',
        'metaDescription' => 'Statusbesiktning av hus och fastigheter i Stockholm. Få ett underlag om synligt skick, underhållsbehov och fortsatt utredning. Begär offert här.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Statusbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Få en samlad bild av byggnadens nuvarande skick innan du planerar underhåll, renovering eller ett fastighetsbeslut.',
        ],
        'includes' => [
            'Genomgång av överenskomna byggnadsdelar och befintligt underlag',
            'Dokumentation av synligt skick och prioriterade frågeställningar',
            'Förslag på behov av vidare undersökning eller underhåll',
        ],
        'excludes' => [
            'Ingen automatisk fullständig kostnadsberäkning',
            'Dolda konstruktioner kräver särskilt avtalade undersökningar',
            'Ingen ersättning för obligatoriska specialistkontroller',
        ],
        'weNeed' => [
            'Byggår, användning och storlek',
            'Tidigare utredningar, ritningar och underhållshistorik',
            'Vilket beslut besiktningen ska ge underlag för',
        ],
        'sections' => [
            [
                'h2' => 'När passar en statusbesiktning?',
                'body' => [
                    'En statusbesiktning är användbar när du behöver prioritera underhåll eller förstå ett äldre hus bättre. Den kan riktas mot hela byggnaden eller valda delar, exempelvis tak, fasad, grund eller gemensamma utrymmen.',
                    'För en bostadsrättsförening blir resultatet ofta ett underlag för styrelsens nästa beslut. För en villaägare kan det hjälpa att skilja mellan brådskande frågor, planerat underhåll och sådant som behöver undersökas närmare.',
                ],
            ],
            [
                'h2' => 'Från iakttagelse till prioritering',
                'body' => [
                    'Bestäm innan besiktningen hur resultaten ska redovisas. Ett användbart underlag beskriver plats, iakttagelse, osäkerhet och rekommenderat nästa steg. Fotografier kan underlätta när flera personer ska följa upp samma punkt.',
                    'Skickbedömning, projektering och entreprenadkostnad är olika leveranser. Om du också vill ha en flerårig underhållsplan eller hjälp att upphandla åtgärder ska det framgå av offerten.',
                ],
            ],
            [
                'h2' => 'Pris och förberedelser',
                'body' => [
                    'Antal byggnader, omfattning, tillträde och mängden dokument påverkar arbetsinsatsen. Berätta om syftet: planerad renovering, styrelsebeslut, allmän överblick eller ett problem i en viss del.',
                    'En riktad takbesiktning eller fuktutredning kan vara mer lämplig om frågan redan är avgränsad. Vi hjälper dig att precisera förfrågan innan ett uppdrag beställs.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Vad är skillnaden mot överlåtelsebesiktning?',
                'a' => 'En statusbesiktning utformas vanligen för skick och underhåll. Överlåtelsebesiktning är knuten till ett husköp eller en försäljning och har egna uppdragsvillkor.',
            ],
            [
                'q' => 'Kan en BRF beställa statusbesiktning?',
                'a' => 'Ja. Ange vilka byggnader och delar som ska granskas och vad styrelsen behöver kunna besluta efteråt.',
            ],
            [
                'q' => 'Ingår en underhållsplan?',
                'a' => 'Bara om det avtalas. En underhållsplan behöver även tidshorisont, mängder, åtgärder och kostnadsunderlag.',
            ],
            [
                'q' => 'Går det att besiktiga enbart fasaden eller balkonger?',
                'a' => 'Beskriv den önskade delen. Metod, åtkomst och eventuellt specialistbehov behöver bedömas inför offerten.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'underhallsplan',
            'takbesiktning',
            'fuktutredning',
        ],
        'guides' => [
            'underhallsplan-checklista',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'badrumsbesiktning' => [
        'path' => '/badrumsbesiktning/',
        'title' => 'Badrumsbesiktning',
        'navLabel' => 'Badrumsbesiktning',
        'cluster' => 'fukt',
        'parent' => null,
        'seoTitle' => 'Badrumsbesiktning i Stockholm',
        'metaDescription' => 'Badrumsbesiktning i Stockholm vid renovering, bostadsköp eller misstänkta fel. Läs om kontrollens begränsningar, dokument och offert för ditt badrum.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Badrumsbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Kontrollera ett renoverat badrum, ett våtrum inför köp eller synliga brister. Få iakttagelserna dokumenterade och klarhet i vad som behöver undersökas vidare.',
        ],
        'includes' => [
            'Okulär kontroll av åtkomliga våtrumsdetaljer enligt uppdrag',
            'Genomgång av tillgängliga kvalitetsdokument och avvikelser',
            'Utlåtande med iakttagelser och begränsningar',
        ],
        'excludes' => [
            'Ett dolt tätskikt kan inte godkännas enbart genom okulär kontroll',
            'Destruktiva ingrepp, provtagning och mätning avtalas separat',
            'Besiktning ersätter inte entreprenörens kvalitetsdokument',
        ],
        'weNeed' => [
            'År för byggnation eller renovering',
            'Avtal, fakturor, foton och tillgängliga våtrumsdokument',
            'Beskrivning av brister, lukt eller fukt och när de upptäcktes',
        ],
        'sections' => [
            [
                'h2' => 'Vad kan kontrolleras i ett badrum?',
                'body' => [
                    'Uppdraget kan omfatta synliga anslutningar, genomföringar, golvbrunn och andra åtkomliga detaljer. Vilka kontroller och mätningar som görs ska bestämmas utifrån badrummets utförande och den fråga du vill få besvarad.',
                    'En färdig yta visar inte hur varje dolt moment har utförts. Därför är dokumentation från renoveringen viktig. Det kan också behövas en fortsatt undersökning om det finns tecken på skada eller en avvikelse som inte kan bedömas utan ingrepp.',
                ],
            ],
            [
                'h2' => 'Badrum efter renovering och inför bostadsköp',
                'body' => [
                    'Efter en renovering behöver kontrollen kopplas till beställning, underlag och vad som avtalats. Ska hela entreprenaden avslutas kan en slutbesiktning vara rätt uppdrag. Inför ett bostadsköp kan badrummet ingå i en större genomgång av huset eller lägenheten.',
                    'Byggkeramikrådet beskriver kvalitetsdokument som ett dokument från den utförande entreprenören. Saknas det bör du i första hand be entreprenören om en kopia. Ett besiktningsutlåtande är en annan typ av underlag.',
                ],
            ],
            [
                'h2' => 'Fuktindikering eller fuktutredning?',
                'body' => [
                    'En indikation kan vara en anledning att undersöka vidare men bevisar inte ensam en skada. Be om redovisning av metod, mätplatser och begränsningar om mätning ingår. Vid återkommande fukt eller oklar skadeorsak behövs ofta en mer riktad fuktutredning.',
                    'Ange badrummets ungefärliga ålder, kommun och syfte i formuläret. Bifoga inte känsliga uppgifter; dokument och foton kan efterfrågas i nästa steg.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Kan ett gammalt badrum besiktigas?',
                'a' => 'Ja, men bedömningen behöver ta hänsyn till ålder, konstruktion, underlag och avtalad omfattning. En äldre lösning ska inte automatiskt bedömas som om den byggts idag.',
            ],
            [
                'q' => 'Ingår kontroll av fall mot golvbrunnen?',
                'a' => 'Det kan ingå om det avtalas. Be om tydlighet kring kontrollmetod, åtkomliga ytor och dokumentation.',
            ],
            [
                'q' => 'Vad gör jag om kvalitetsdokument saknas?',
                'a' => 'Kontakta först den entreprenör som utförde arbetet. Ange vilka dokument du har när du begär besiktning.',
            ],
            [
                'q' => 'Vad kostar en badrumsbesiktning?',
                'a' => 'Antal våtrum, dokumentgenomgång, mätningar och syfte påverkar priset. Begär en specificerad offert.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'fuktmatning',
            'fuktutredning',
            'slutbesiktning',
        ],
        'guides' => [
            'badrumsrenovering-dokument',
            'reklamera-renovering',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
        'sources' => [
            [
                'label' => 'Byggkeramikrådet: kvalitetsdokument',
                'url' => 'https://www.bkr.se/regler/kvalitetsdokument',
            ],
        ],
    ],
    'fuktutredning' => [
        'path' => '/fuktutredning/',
        'title' => 'Fuktutredning',
        'navLabel' => 'Fuktutredning',
        'cluster' => 'fukt',
        'parent' => null,
        'seoTitle' => 'Fuktutredning i Stockholm',
        'metaDescription' => 'Fuktutredning i Stockholm vid lukt, missfärgning eller misstänkt fuktskada. Läs om skadeorsak, mätning och utredning i hus och BRF. Begär offert.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Fuktutredning i Stockholm',
            'h2' => '',
            'lead' => 'När fukten återkommer eller orsaken är oklar behöver frågan utredas. Beskriv vad du ser, var det finns och när problemet började.',
        ],
        'includes' => [
            'Genomgång av skadehistorik och åtkomliga konstruktioner',
            'Val av relevanta mätningar och fortsatta undersökningar enligt offert',
            'Dokumentation av resultat, osäkerheter och rekommenderade nästa steg',
        ],
        'excludes' => [
            'Sanering, uttorkning och återställning ingår inte automatiskt',
            'Ingen bedömning av hälsotillstånd eller diagnos av mögel från ett foto',
            'Provtagning och öppning av konstruktion kräver särskilt avtal',
        ],
        'weNeed' => [
            'Var och när lukt eller synliga förändringar uppträder',
            'Information om läckage, ventilation och tidigare åtgärder',
            'Ritningar, byggår och relevanta protokoll',
        ],
        'sections' => [
            [
                'h2' => 'Fuktbesiktning eller skadeutredning?',
                'body' => [
                    'En riktad fuktutredning söker svar på varför en konstruktion påverkas och hur problemet kan avgränsas. Den börjar med dina observationer och byggnadens förutsättningar. Vilka mätningar eller prov som behövs beror på frågan, inte på ett standardpaket som passar alla.',
                    'Skadeutredning kan behövas efter ett läckage eller när samma problem återkommer trots åtgärder. Ett användbart utlåtande skiljer mellan vad som har observerats, vad som har mätts och vad som fortfarande är osäkert.',
                ],
            ],
            [
                'h2' => 'Fukt i källare, vind, badrum och krypgrund',
                'body' => [
                    'Liknande symtom kan ha olika orsaker. Kondens, inträngande vatten, läckage och materialens fuktbelastning behöver bedömas i sitt sammanhang. En ytlig mätning eller en luktupplevelse räcker inte för att fastställa hela skadeförloppet.',
                    'Vid ett pågående läckage ska du först begränsa skadan och kontakta berörd fastighetsägare eller försäkringsbolag. Dokumentera tidpunkt och synliga förändringar. Vänta inte på en offert om vatten fortsätter att komma in.',
                ],
            ],
            [
                'h2' => 'Resultat som går att följa upp',
                'body' => [
                    'Be om ett tydligt undersökningssyfte och redovisning av mätmetoder, platser och begränsningar. Om en konstruktion måste öppnas behöver ansvar, tillträde och återställning bestämmas i förväg.',
                    'Berätta om tidigare reparationer och om ärendet gäller en villa, lägenhet eller gemensamma delar i en BRF. För ett avgränsat mätbehov kan fuktmätning räcka; vid oklar orsak är utredningen ett annat uppdrag.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Kan ni avgöra om det är mögel från ett foto?',
                'a' => 'Ett foto kan visa en missfärgning men räcker inte för att säkert fastställa material, orsak eller omfattning. Beskriv observationerna för att avgränsa undersökningen.',
            ],
            [
                'q' => 'Vad är skillnaden mot fuktmätning?',
                'a' => 'Fuktmätning mäter eller indikerar fukttillstånd med en viss metod. En fuktutredning använder flera underlag för att undersöka orsak och omfattning.',
            ],
            [
                'q' => 'Ingår reparation av skadan?',
                'a' => 'Nej, inte utan separat avtal. Utredning, sanering, uttorkning och återställning är olika arbeten.',
            ],
            [
                'q' => 'Kan en BRF beställa en utredning?',
                'a' => 'Ja. Ange byggnadsdel, omfattning, tidigare åtgärder och vem som kan ordna tillträde.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'fuktmatning',
            'badrumsbesiktning',
            'statusbesiktning',
        ],
        'guides' => [
            'tecken-pa-fukt',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'fuktmatning' => [
        'path' => '/fuktmatning/',
        'title' => 'Fuktmätning',
        'navLabel' => 'Fuktmätning',
        'cluster' => 'fukt',
        'parent' => null,
        'seoTitle' => 'Fuktmätning i Stockholm',
        'metaDescription' => 'Fuktmätning i Stockholm för badrum, trä och betong. Förstå skillnaden mellan indikering och mätning och begär offert på rätt metod för ditt uppdrag.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Fuktmätning i Stockholm',
            'h2' => '',
            'lead' => 'Behöver du kontrollera fukttillstånd i ett visst material eller utrymme? Beskriv syftet så att metod, mätpunkter och rapportering kan väljas rätt.',
        ],
        'includes' => [
            'Avgränsning av material, mätområde och frågeställning',
            'Mätning eller indikering med avtalad metod',
            'Dokumentation av mätplatser, resultat och metodens begränsningar',
        ],
        'excludes' => [
            'En indikation är ingen fullständig skadeutredning',
            'Ett mätvärde godkänner inte automatiskt tätskikt eller konstruktion',
            'Håltagning, provtagning och återställning avtalas separat',
        ],
        'weNeed' => [
            'Material och plats som ska undersökas',
            'Om kontrollen gäller läckage, uttorkning eller golvläggning',
            'Tidigare mätvärden och relevanta materialanvisningar',
        ],
        'sections' => [
            [
                'h2' => 'Fuktindikering och fuktmätning är olika saker',
                'body' => [
                    'En indikering kan användas för att söka avvikande områden. En materialanpassad mätning ska besvara en tydligare fråga om fukttillståndet. Olika instrument och metoder mäter olika egenskaper; siffror från två metoder kan inte utan vidare jämföras.',
                    'Be om att rapporten anger metod, material, mätplatser och förutsättningar. Resultatet behöver tolkas tillsammans med konstruktionen och undersökningens syfte. En enstaka kontroll säger inte hur förhållandena har varierat över tid.',
                ],
            ],
            [
                'h2' => 'Fuktmätning i badrum, trä och betong',
                'body' => [
                    'I ett badrum kan det vara aktuellt att undersöka en misstänkt avvikelse. Trämaterial och betong kräver andra överväganden. Inför golvläggning behöver mätuppdraget anpassas till materialleverantörens krav och den aktuella konstruktionen.',
                    'Ange om du behöver en orienterande kontroll eller ett dokumenterat underlag för en bestämd åtgärd. Tillträde, antal punkter, metod och eventuell påverkan på ytskikt ska framgå av offerten.',
                ],
            ],
            [
                'h2' => 'När behövs en utredning i stället?',
                'body' => [
                    'Om du vill förstå en återkommande lukt, ett läckage eller varför material skadas behöver mätningen ofta ingå i en fuktutredning. Ett mätvärde identifierar inte ensam skadeorsaken.',
                    'Beskriv kommunen, byggnadsdelen och vad du ska använda resultatet till. Då blir det lättare att få ett pris på rätt insats och undvika att beställa en kontroll som inte besvarar din fråga.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Kan man mäta utan att göra hål?',
                'a' => 'Vissa metoder är ytliga och kan ge indikationer. Andra kräver ingrepp. Metoden behöver väljas efter materialet och frågan.',
            ],
            [
                'q' => 'Vilket fuktvärde är godkänt?',
                'a' => 'Det finns inget enda värde för alla material och metoder. Resultatet måste bedömas mot rätt konstruktion, användning och aktuella materialkrav.',
            ],
            [
                'q' => 'Ingår en rapport?',
                'a' => 'Bestäm rapportens omfattning före bokning. Be om mätplatser, metod och tolkning, inte enbart ett fristående tal.',
            ],
            [
                'q' => 'Vad påverkar priset?',
                'a' => 'Material, antal mätpunkter, metod, resor och behov av återbesök påverkar omfattningen.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'fuktutredning',
            'badrumsbesiktning',
            'overlatelsebesiktning',
        ],
        'guides' => [
            'tecken-pa-fukt',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'takbesiktning' => [
        'path' => '/takbesiktning/',
        'title' => 'Takbesiktning',
        'navLabel' => 'Takbesiktning',
        'cluster' => 'kop',
        'parent' => null,
        'seoTitle' => 'Takbesiktning i Stockholm',
        'metaDescription' => 'Takbesiktning i Stockholm för villa och BRF inför underhåll, takbyte eller vid misstänkt läckage. Läs om åtkomst, dokumentation och begär offert.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Takbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Få takets synliga skick och nästa undersökningsbehov dokumenterade inför underhåll eller takbyte. Ange taktyp och hur taket kan nås.',
        ],
        'includes' => [
            'Kontroll av åtkomliga takdelar och anslutningar enligt avtal',
            'Genomgång av synliga brister och tillgängligt underlag',
            'Dokumentation med rekommendationer för nästa steg',
        ],
        'excludes' => [
            'Ingen garanti om kvarvarande livslängd utifrån enbart yttre kontroll',
            'Ställning, lift och särskild takåtkomst ingår bara om avtalat',
            'Dolda skikt och läckageorsak kan kräva en fördjupad undersökning',
        ],
        'weNeed' => [
            'Takmaterial, uppskattad ålder och tidigare arbeten',
            'Bilder eller uppgifter om misstänkt läckage',
            'Tillträde till vind och information om säker åtkomst',
        ],
        'sections' => [
            [
                'h2' => 'Besiktning av tak inför underhåll eller takbyte',
                'body' => [
                    'Ett tak är mer än takpannorna eller den synliga beläggningen. Anslutningar, genomföringar, avvattning och åtkomliga delar av underliggande konstruktion kan vara relevanta för bedömningen. Vilka delar som kan undersökas beror på säker åtkomst och avtalad metod.',
                    'Syftet bör vara tydligt: bedöma skick, undersöka ett problem eller kontrollera en utförd takentreprenad. En besiktning inför planering och en slutbesiktning av ett nytt tak är olika uppdrag.',
                ],
            ],
            [
                'h2' => 'Misstänkt takläckage',
                'body' => [
                    'Beskriv var vatten eller missfärgning syns och när det brukar uppträda. Ta bilder från en säker plats och anteckna om observationen hänger samman med regn, snösmältning eller vind. Gå inte upp på taket för att samla underlag.',
                    'En synlig fuktfläck visar inte alltid var vatten kommit in. Om skadeorsaken är oklar kan takkontrollen behöva kombineras med en fuktutredning och granskning av vinden.',
                ],
            ],
            [
                'h2' => 'Takbesiktning för villa och bostadsrättsförening',
                'body' => [
                    'För en villa behövs ofta en avgränsad skickbedömning. En BRF kan också behöva ett underlag för etappindelning, underhållsplan eller upphandling. Ange antal byggnader och ungefärlig takyta om den är känd.',
                    'Pris påverkas bland annat av takets omfattning, höjd, konstruktion, tillgängliga handlingar och åtkomst. Säkerhetslösning, eventuella hjälpmedel och dokumentation ska specificeras före beställning.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Ingår besiktning från vinden?',
                'a' => 'Det kan ingå när det är relevant och säkert tillgängligt. Bestäm vilka delar som ska granskas i uppdraget.',
            ],
            [
                'q' => 'Kan taket kontrolleras utan att någon går upp?',
                'a' => 'Ibland kan delar bedömas från mark, vind eller annan säker position. Metodens begränsningar behöver framgå.',
            ],
            [
                'q' => 'Kan jag få hjälp efter ett takbyte?',
                'a' => 'Ja, beskriv entreprenaden och vilket avtal den utförts mot. En entreprenad- eller slutbesiktning kan då vara rätt tjänst.',
            ],
            [
                'q' => 'Vad kostar en takbesiktning?',
                'a' => 'Takets storlek, höjd, metod och säker åtkomst påverkar priset. Ange taktyp, kommun och syfte för offert.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'statusbesiktning',
            'fuktutredning',
            'slutbesiktning',
        ],
        'guides' => [
            'underhallsplan-checklista',
            'jamfora-besiktningsoffert',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'entreprenadbesiktning' => [
        'path' => '/entreprenadbesiktning/',
        'title' => 'Entreprenadbesiktning',
        'navLabel' => 'Entreprenadbesiktning',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'Entreprenadbesiktning Stockholm',
        'metaDescription' => 'Entreprenadbesiktning i Stockholm för byggprojekt, renovering och BRF. Kontroll mot avtal, dokumentation och uppföljning av fel. Begär en offert.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Entreprenadbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Få en avtalad entreprenad granskad med tydlig koppling till beställning och handlingar. För privatpersoner, fastighetsägare och bostadsrättsföreningar.',
        ],
        'includes' => [
            'Genomgång av relevanta avtal och entreprenadhandlingar',
            'Kontroll av avtalade arbeten och åtkomligt utförande',
            'Besiktningsutlåtande med dokumenterade iakttagelser enligt uppdrag',
        ],
        'excludes' => [
            'Ingen automatisk projektering eller löpande byggledning',
            'Dolda moment kan inte alltid kontrolleras efter att de byggts in',
            'Besiktning är ingen garanti att alla fel upptäcks',
        ],
        'weNeed' => [
            'Avtal, omfattningsbeskrivning och ritningar',
            'Egenkontroller, ändringsbeställningar och tidigare utlåtanden',
            'Kontaktpersoner, tidplan och tillträde',
        ],
        'sections' => [
            [
                'h2' => 'Rätt besiktning under entreprenaden',
                'body' => [
                    'Entreprenadbesiktning är ett samlingsbegrepp. En förbesiktning kan vara relevant innan ett moment byggs in. Slutbesiktning hör till färdigställandet. Efterbesiktning används för att följa upp antecknade punkter och garantibesiktning har ett annat syfte.',
                    'Välj uppdrag efter projektets skede och de frågor som ska prövas. För större arbeten kan en plan för flera kontroller vara mer användbar än en enstaka genomgång när allt redan är färdigt.',
                ],
            ],
            [
                'h2' => 'Kontroll mot avtal och rätt underlag',
                'body' => [
                    'Besiktningen behöver utgå från vad som faktiskt har beställts. Samla avtal, ritningar, beskrivningar och godkända ändringar. Ange också vilket regelverk eller vilka uppdragsvillkor parterna har avtalat.',
                    'Avtal mellan företag och konsumenter har andra förutsättningar än många kommersiella entreprenader. Alla projekt använder inte samma standardavtal. Utföraren behöver därför få tillgång till rätt handlingar före besiktningen.',
                ],
            ],
            [
                'h2' => 'För BRF, hus och renovering',
                'body' => [
                    'För en BRF kan uppdraget gälla exempelvis tak, fasad eller gemensamma utrymmen. För en privat beställare kan det vara en tillbyggnad eller större renovering. Beskriv vilka delar som ska omfattas och vem som företräder beställaren.',
                    'Be offerten beskriva genomgång av handlingar, besiktning, utlåtande och eventuell uppföljning. Behöver du hjälp med upphandling och samordning under arbetet är byggprojektledning ett separat uppdrag.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Är entreprenadbesiktning samma sak som slutbesiktning?',
                'a' => 'Slutbesiktning är en typ av entreprenadbesiktning. Tidpunkt, syfte och vilka avtalade frågor som ska prövas skiljer sig mellan olika besiktningstyper.',
            ],
            [
                'q' => 'Kan ni kontrollera innan arbetet täcks över?',
                'a' => 'En förbesiktning kan avtalas för sådana moment. Planera kontrollen med entreprenören innan tillträdet försvinner.',
            ],
            [
                'q' => 'Ingår efterbesiktning?',
                'a' => 'Bara om det avtalas. Be om pris och omfattning för eventuell uppföljning av antecknade punkter.',
            ],
            [
                'q' => 'Vilka handlingar behövs?',
                'a' => 'Avtal, tekniska beskrivningar, ritningar, ändringar och relevanta egenkontroller är bra utgångspunkter.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'slutbesiktning',
            'garantibesiktning',
            'byggprojektledning',
        ],
        'guides' => [
            'infor-slutbesiktning',
            'reklamera-renovering',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'slutbesiktning' => [
        'path' => '/slutbesiktning/',
        'title' => 'Slutbesiktning',
        'navLabel' => 'Slutbesiktning',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'Slutbesiktning i Stockholm',
        'metaDescription' => 'Slutbesiktning i Stockholm av hus, lägenhet och renovering. Förbered rätt avtal och dokument, förstå omfattningen och begär offert för ditt projekt.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Slutbesiktning i Stockholm',
            'h2' => '',
            'lead' => 'När bygget eller renoveringen ska avslutas: få arbetena granskade mot avtal och underlag och samla kvarstående frågor i ett tydligt utlåtande.',
        ],
        'includes' => [
            'Genomgång av uppdragets avtal och handlingar',
            'Besiktning av avtalade, åtkomliga arbeten',
            'Utlåtande och redovisning av noterade punkter enligt villkor',
        ],
        'excludes' => [
            'Ingen automatisk kontroll av varje dolt arbetsmoment',
            'Slutbesiktning ersätter inte entreprenörens egenkontroller',
            'Kommunens slutbesked är ett separat beslut',
        ],
        'weNeed' => [
            'Avtal, ritningar och överenskomna ändringar',
            'Kvalitetsdokument, egenkontroller och installationsunderlag',
            'Tidigare besiktningar och uppgift om färdigställande',
        ],
        'sections' => [
            [
                'h2' => 'Slutbesiktning av hus, lägenhet och renovering',
                'body' => [
                    'En slutbesiktning kan vara aktuell för ett nytt hus, en tillbyggnad eller en beställd renovering. Det centrala är att kontrollen utgår från det avtalade arbetet. Inför besiktningen behöver det vara tydligt vilka delar som är färdiga och vilka handlingar som saknas.',
                    'Vid ett lägenhetsköp är en allmän skickbedömning något annat än slutbesiktning av en entreprenad. Ange därför om du är köpare, beställare eller representant för en BRF och vilket projekt det gäller.',
                ],
            ],
            [
                'h2' => 'Så förbereder du överlämningen',
                'body' => [
                    'Samla kontrakt, ritningar, materialval, ändringar och egenkontroller. Skriv en egen lista över frågor och platser du vill få granskade. Kom överens om tillträde och vilka parter som behöver delta.',
                    'Be om tydliga hänvisningar för antecknade punkter så att de kan följas upp. Utlåtandet, kommunikationen om åtgärder och en eventuell efterbesiktning är olika steg; följ villkoren i ditt avtal.',
                ],
            ],
            [
                'h2' => 'Slutbesiktning är inte kommunens slutbesked',
                'body' => [
                    'En besiktning av entreprenaden och byggnadsnämndens handläggning fyller olika funktioner. Kontrollansvarig, entreprenadbesiktningsman och kommun kan ha separata uppgifter i samma byggprojekt.',
                    'Ange projektets omfattning och önskad tidpunkt i förfrågan. Be om pris för både dokumentgenomgång, platsbesök, utlåtande och eventuell uppföljning för att kunna jämföra offerter.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'När ska slutbesiktningen göras?',
                'a' => 'Tidpunkten behöver stämmas av mot färdigställande och aktuellt avtal. Planera i god tid så att handlingar och tillträde finns.',
            ],
            [
                'q' => 'Kan ett badrum slutbesiktigas?',
                'a' => 'Ja, en avtalad badrumsrenovering kan granskas. Ange vilket arbete som beställts och vilka dokument som finns.',
            ],
            [
                'q' => 'Vad händer med noterade fel?',
                'a' => 'Åtgärder och uppföljning hanteras enligt avtalet och utlåtandet. Be om tydliga besked om ansvar, återkoppling och eventuell efterbesiktning.',
            ],
            [
                'q' => 'Ingår kommunens slutbesked?',
                'a' => 'Nej. Slutbesked och entreprenadbesiktning är separata saker.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'entreprenadbesiktning',
            'garantibesiktning',
            'kontrollansvarig',
        ],
        'guides' => [
            'infor-slutbesiktning',
            'badrumsrenovering-dokument',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'garantibesiktning' => [
        'path' => '/garantibesiktning/',
        'title' => 'Garantibesiktning',
        'navLabel' => 'Garantibesiktning',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'Garantibesiktning i Stockholm',
        'metaDescription' => 'Garantibesiktning i Stockholm för hus, renovering och BRF. Planera kontroll utifrån ditt avtal, samla tidigare protokoll och begär offert här.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Garantibesiktning i Stockholm',
            'h2' => '',
            'lead' => 'Följ upp en avslutad entreprenad och dokumentera frågor som uppstått under användningen. Kontrollens tidpunkt och omfattning ska utgå från ditt avtal.',
        ],
        'includes' => [
            'Genomgång av tidigare utlåtanden och relevanta avtalsvillkor',
            'Kontroll av överenskomna delar och anmälda iakttagelser',
            'Dokumentation för fortsatt hantering av noterade punkter',
        ],
        'excludes' => [
            'Ingen universell garanti gäller för alla entreprenader',
            'Bedömning av juridiskt ansvar kräver rätt avtal och omständigheter',
            'Kontrollen ersätter inte en reklamation till entreprenören',
        ],
        'weNeed' => [
            'Entreprenadavtal och datum för färdigställande',
            'Slutbesiktningsutlåtande och tidigare åtgärdslistor',
            'Foton, observationer och eventuell felanmälan',
        ],
        'sections' => [
            [
                'h2' => 'Planera efter avtalet, inte en generell kalender',
                'body' => [
                    'Sökningar om tvåårsbesiktning och femårsbesiktning avser ofta olika avtalsupplägg. Rätt tidpunkt, omfattning och underrättelser behöver kontrolleras i det avtal som gäller för ditt projekt. Det finns inget enda schema som passar alla byggarbeten.',
                    'Ta fram färdigställandedatum och tidigare utlåtanden innan du begär offert. Skriv om det finns en känd tidsgräns så att möjlig tid kan stämmas av.',
                ],
            ],
            [
                'h2' => 'Samla observationer från den som använder byggnaden',
                'body' => [
                    'Notera var och när en förändring syns och om den återkommer. För en BRF kan styrelsen samla in konkreta observationer från boende och förvaltning. Sortera uppgifterna efter byggnad, lägenhet eller gemensam del för att underlätta genomgången.',
                    'En notering innebär inte automatiskt att entreprenören är ansvarig. Utlåtandet behöver skilja mellan iakttagelse, teknisk bedömning och frågor som kräver ytterligare underlag.',
                ],
            ],
            [
                'h2' => 'Garantibesiktning och efterbesiktning',
                'body' => [
                    'En efterbesiktning följer vanligen upp punkter från en tidigare besiktning. En garantibesiktning har ett annat syfte kopplat till uppföljning under en avtalad period. Beskriv därför både projektet och vad du vill få kontrollerat.',
                    'Om du upptäcker ett fel ska du inte enbart vänta på besiktning. Kontakta entreprenören och dokumentera kommunikationen. För konsumentärenden finns generell vägledning hos Konsumentverket.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Ska besiktningen göras efter två eller fem år?',
                'a' => 'Det beror på avtal, entreprenad och vilka villkor som gäller. Kontrollera handlingarna; en generell tidsangivelse är inte tillräcklig.',
            ],
            [
                'q' => 'Kan en BRF beställa garantibesiktning?',
                'a' => 'Ja. Samla avtal, tidigare utlåtanden och en tydlig lista över observationer från byggnaden.',
            ],
            [
                'q' => 'Vad är skillnaden mot efterbesiktning?',
                'a' => 'Efterbesiktning följer upp tidigare noterade punkter. Garantibesiktning avser en annan avtalad uppföljning av entreprenaden.',
            ],
            [
                'q' => 'Kan jag vänta med att reklamera?',
                'a' => 'Vänta inte på en planerad besiktning för att dokumentera och kontakta entreprenören om ett upptäckt fel. Följ ditt avtal och relevant konsumentvägledning.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'slutbesiktning',
            'entreprenadbesiktning',
            'brf',
        ],
        'guides' => [
            'infor-slutbesiktning',
            'reklamera-renovering',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'brf' => [
        'path' => '/brf/',
        'title' => 'Besiktning för BRF',
        'navLabel' => 'Besiktning för BRF',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'BRF-besiktning i Stockholm',
        'metaDescription' => 'Besiktning för BRF i Stockholm: fastighetens skick, renovering och entreprenad. Få rätt underlag för styrelsens beslut och begär offert för föreningen.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Besiktning för BRF i Stockholm',
            'h2' => '',
            'lead' => 'För styrelser och förvaltare som behöver tekniskt underlag inför underhåll, upphandling eller uppföljning av en entreprenad.',
        ],
        'includes' => [
            'Avgränsning av byggnader, gemensamma delar och styrelsens frågor',
            'Relevant besiktning med dokumentation enligt beställning',
            'Underlag för prioritering eller fortsatt utredning',
        ],
        'excludes' => [
            'Lägenhetsköparens privata besiktning är ett separat uppdrag',
            'Ingen automatisk ekonomisk eller juridisk förvaltning',
            'OVK och andra särskilda kontroller ingår inte i en allmän skickbedömning',
        ],
        'weNeed' => [
            'Antal byggnader och ungefärlig storlek',
            'Underhållsplan, ritningar och tidigare protokoll',
            'Styrelsens syfte, tidplan och kontaktperson',
        ],
        'sections' => [
            [
                'h2' => 'Välj uppdrag efter styrelsens beslut',
                'body' => [
                    'Behöver föreningen förstå fastighetens skick? Då kan statusbesiktning vara lämplig. Ska styrelsen planera flera års underhåll behövs en underhållsplan. Har en entreprenad avslutats bör kontrollen utformas efter avtal och projektets skede.',
                    'En tydlig beställning sparar arbete för både styrelse och utförare. Ange vilka byggnadsdelar som ska omfattas, vilket underlag som finns och vad föreningen ska kunna besluta när utlåtandet levererats.',
                ],
            ],
            [
                'h2' => 'Tak, fasad, balkonger och gemensamma utrymmen',
                'body' => [
                    'En fastighetsbesiktning kan avgränsas till valda delar. Åtkomst, metod och eventuellt specialistbehov ska stämmas av inför offert. En okulär genomgång ersätter inte alla särskilda kontroller som kan behövas för installationer eller konstruktioner.',
                    'Vid projekt som takbyte eller större renovering kan föreningen behöva hjälp med flera steg: förstudie, upphandling, byggprojektledning, besiktning och uppföljning. Dessa insatser ska beskrivas var för sig.',
                ],
            ],
            [
                'h2' => 'Underlag som nästa styrelse kan använda',
                'body' => [
                    'Be om en dokumentation som går att återfinna och följa upp. Byggnad, plats, iakttagelse, åtgärdsbehov och ansvar för nästa steg bör framgå. Samla handlingar på ett sätt som fungerar även efter ett styrelsebyte.',
                    'Söker du som privat köpare hjälp med en bostadsrätt? Välj lägenhetsbesiktning. Här gäller förfrågan föreningens fastighet och styrelsens beställning.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Vad kostar en fastighetsbesiktning för BRF?',
                'a' => 'Antal byggnader, omfattning, åtkomst och tillgängliga handlingar påverkar priset. Beskriv föreningens behov och ungefärliga storlek.',
            ],
            [
                'q' => 'Kan vi besiktiga endast ett tak eller en fasad?',
                'a' => 'Ja, en riktad kontroll kan avtalas. Metod och eventuellt behov av specialist behöver bedömas utifrån byggnaden.',
            ],
            [
                'q' => 'Ingår underhållsplan?',
                'a' => 'Bara om den beställs. En plan kräver mer än en besiktningslista, bland annat tidshorisont och kostnadsunderlag.',
            ],
            [
                'q' => 'Är sidan för lägenhetsköpare?',
                'a' => 'Sidan avser styrelsens fastighetsuppdrag. För en enskild bostadsrätt finns tjänsten lägenhetsbesiktning.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'underhallsplan',
            'statusbesiktning',
            'byggprojektledning',
            'entreprenadbesiktning',
        ],
        'guides' => [
            'underhallsplan-checklista',
            'infor-slutbesiktning',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'underhallsplan' => [
        'path' => '/brf/underhallsplan/',
        'title' => 'Underhållsplan för BRF',
        'navLabel' => 'Underhållsplan för BRF',
        'cluster' => 'bygg',
        'parent' => 'brf',
        'seoTitle' => 'Underhållsplan BRF i Stockholm',
        'metaDescription' => 'Underhållsplan för BRF i Stockholm med byggnadsdelar, åtgärder och prioriteringar. Läs om underlag, uppdatering och offert för bostadsrättsföreningen.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Underhållsplan för BRF i Stockholm',
            'h2' => '',
            'lead' => 'Gör fastighetens underhåll lättare att planera och följa upp. Få en plan utifrån föreningens byggnader, skick, befintliga handlingar och beslut.',
        ],
        'includes' => [
            'Inventering av avtalade byggnadsdelar och underlag',
            'Åtgärder, tidshorisont och kostnadsunderlag enligt beställning',
            'Prioriteringar och en överenskommen leverans som kan uppdateras',
        ],
        'excludes' => [
            'En mall ersätter inte bedömning av föreningens fastighet',
            'Kostnadsbedömningar är inte bindande entreprenadofferter',
            'Ekonomisk rådgivning och projektering beställs separat',
        ],
        'weNeed' => [
            'Byggår, antal byggnader, ytor och tidigare renoveringar',
            'Befintlig plan, ritningar, protokoll och driftuppgifter',
            'Önskad tidshorisont, filformat och styrelsens budgetprocess',
        ],
        'sections' => [
            [
                'h2' => 'Vad bör en underhållsplan innehålla?',
                'body' => [
                    'En användbar plan kopplar varje åtgärd till en byggnadsdel och ett bedömt behov. Den bör visa mängd eller omfattning, planerat år eller intervall, prioritet och kostnadsunderlag. Notera även osäkerheter och datum för inventeringen.',
                    'Planen behöver kunna användas i styrelsens arbete. Bestäm hur den ska levereras, hur årsvisa åtgärder ska summeras och hur en ny styrelse kan uppdatera den. En fastighetsspecifik plan är mer än en lista över generella livslängder.',
                ],
            ],
            [
                'h2' => 'Inventering och prioritering för föreningens fastighet',
                'body' => [
                    'Tak, fasad, fönster och installationer har olika förutsättningar. Samla tidigare åtgärder och kända problem så att planen inte utgår från ett antaget ursprungligt skick. Det kan behövas riktade undersökningar innan vissa åtgärder går att bedöma.',
                    'Kostnader behöver knytas till vad bedömningen omfattar och när den gjordes. Separera preliminära underhållsbedömningar från senare upphandling och entreprenadpris. Det gör planens osäkerhet lättare att hantera i budgetarbetet.',
                ],
            ],
            [
                'h2' => 'Uppdatera planen när förutsättningarna ändras',
                'body' => [
                    'Gå igenom planen i samband med föreningens budget och efter större åtgärder. Markera vad som faktiskt utförts, justera årtal och dokumentera nya beslut. Om fastighetens skick har förändrats kan en ny inventering behövas.',
                    'Priset på en underhållsplan påverkas av antal byggnader, dokumentens kvalitet, behovet av platsbesök och leveransens omfattning. Ange också om uppdraget gäller en helt ny plan eller uppdatering av en befintlig.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Hur lång ska planen vara?',
                'a' => 'Tidshorisonten behöver anpassas till föreningen och uppdragets syfte. Be om tydlighet kring långsiktig överblick och de närmaste årens mer konkreta åtgärder.',
            ],
            [
                'q' => 'Kan vi använda en underhållsplanmall?',
                'a' => 'En mall kan hjälpa med struktur. Byggnadsdelar, skick, mängder och åtgärder måste ändå anpassas till er fastighet.',
            ],
            [
                'q' => 'Kan en befintlig plan uppdateras?',
                'a' => 'Ja. Ange filformat, datum för senaste inventering och vilka arbeten som utförts sedan dess.',
            ],
            [
                'q' => 'Ingår priser på entreprenader?',
                'a' => 'Planen kan innehålla kostnadsbedömningar enligt avtal. Bindande pris för ett genomförande behöver tas fram i en separat upphandling.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'brf',
            'statusbesiktning',
            'byggprojektledning',
        ],
        'guides' => [
            'underhallsplan-checklista',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
    'kontrollansvarig' => [
        'path' => '/kontrollansvarig/',
        'title' => 'Kontrollansvarig',
        'navLabel' => 'Kontrollansvarig',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'Kontrollansvarig i Stockholm',
        'metaDescription' => 'Kontrollansvarig i Stockholm för nybyggnad, tillbyggnad och andra byggprojekt. Läs om KA:s roll, certifiering och underlag och begär offert här.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Kontrollansvarig i Stockholm',
            'h2' => '',
            'lead' => 'Behöver ditt byggprojekt en kontrollansvarig? Beskriv byggåtgärden och kommunens besked så att rätt roll och omfattning kan stämmas av.',
        ],
        'includes' => [
            'Avgränsning av KA-uppdrag utifrån projekt och kommunens krav',
            'Stöd med kontrollplan och uppföljning enligt avtalad roll',
            'Dokumentation för byggprocessen enligt uppdrag',
        ],
        'excludes' => [
            'KA är inte automatiskt byggprojektledare eller entreprenadbesiktningsman',
            'KA utför inte själv alla kontroller i projektet',
            'Sajten garanterar inte bygglov, startbesked eller slutbesked',
        ],
        'weNeed' => [
            'Kommun, typ av åtgärd och projektets skede',
            'Lovhandlingar, ritningar och kommunens beslut om de finns',
            'Tidplan och planerade entreprenörer',
        ],
        'sections' => [
            [
                'h2' => 'Vad gör en kontrollansvarig?',
                'body' => [
                    'Kontrollansvarig, ofta förkortat KA, är en särskild roll i byggprocessen. Rollen omfattar bland annat att hjälpa byggherren med kontrollplanen och följa upp att den hanteras. Boverket beskriver också krav på certifiering och självständig ställning i förhållande till den som utför åtgärden.',
                    'Kontrollera den föreslagna utförarens aktuella certifiering och uppdragets omfattning före beställning. Vi anger inga personliga behörigheter för en utförare innan de är bekräftade.',
                ],
            ],
            [
                'h2' => 'När behövs KA vid nybyggnad eller tillbyggnad?',
                'body' => [
                    'Behovet avgörs av den aktuella åtgärden och byggnadsnämndens bedömning. Utgå från kommunens information för ditt ärende. En fråga om en liten tillbyggnad ska inte få samma standardbeskrivning som ett större nybyggnadsprojekt.',
                    'Ange var bygget ska göras och om bygglov eller anmälan redan har hanterats. Ju tydligare handlingar som finns, desto lättare blir det att avgränsa uppdraget och priset.',
                ],
            ],
            [
                'h2' => 'KA, byggledning och slutbesiktning har olika roller',
                'body' => [
                    'KA:s uppdrag i byggprocessen ersätter inte beställarens behov av projektledning eller en kontroll mot entreprenadavtalet. Om du vill ha stöd med ekonomi, tidplan och samordning behöver byggprojektledning beskrivas separat.',
                    'Be offerten ange vilka möten, besök och dokument som omfattas samt hur ändringar och extra insatser debiteras. Det gör det lättare att jämföra erbjudanden som annars kan se lika ut.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Är kontrollansvarig samma sak som besiktningsman?',
                'a' => 'Nej. KA har en särskild roll i byggprocessen. En entreprenadbesiktningsman granskar ett uppdrag mot avtalade handlingar.',
            ],
            [
                'q' => 'Behöver min tillbyggnad kontrollansvarig?',
                'a' => 'Kontrollera det med byggnadsnämnden i projektets kommun. Behovet beror på åtgärden och ärendet.',
            ],
            [
                'q' => 'Måste KA vara certifierad?',
                'a' => 'Boverket beskriver certifieringskrav för kontrollansvariga. Kontrollera aktuellt certifikat för den person som föreslås.',
            ],
            [
                'q' => 'Vad påverkar priset?',
                'a' => 'Projektets omfattning, antal möten och platsbesök, handlingar, tidplan och eventuella ändringar påverkar uppdraget.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'byggprojektledning',
            'slutbesiktning',
            'entreprenadbesiktning',
        ],
        'guides' => [
            'infor-slutbesiktning',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
        'sources' => [
            [
                'label' => 'Boverket: kontrollansvariga',
                'url' => 'https://www.boverket.se/sv/PBL-kunskapsbanken/lov--byggande/byggprocessen/kontrollansvariga/',
            ],
        ],
    ],
    'byggprojektledning' => [
        'path' => '/byggprojektledning/',
        'title' => 'Byggprojektledning',
        'navLabel' => 'Byggprojektledning',
        'cluster' => 'bygg',
        'parent' => null,
        'seoTitle' => 'Byggprojektledning i Stockholm',
        'metaDescription' => 'Byggprojektledning i Stockholm för renovering, hus och BRF. Stöd med omfattning, upphandling, tidplan och uppföljning. Beskriv projektet för offert.',
        'hero' => [
            'eyebrow' => 'Besiktning i Stockholms län',
            'h1' => 'Byggprojektledning i Stockholm',
            'h2' => '',
            'lead' => 'Få hjälp att hålla ihop ett byggprojekt från behov och upphandling till uppföljning. För styrelser, fastighetsägare och privata beställare.',
        ],
        'includes' => [
            'Avgränsning av uppdrag, mandat och rapportering',
            'Stöd med underlag, upphandling och samordning enligt offert',
            'Uppföljning av tidplan, beslut och ekonomi enligt överenskommen omfattning',
        ],
        'excludes' => [
            'Ingen obegränsad rätt att beställa arbeten utan överenskommet mandat',
            'Projektering och specialistutredningar ingår bara om avtalat',
            'KA och entreprenadbesiktning är separata roller',
        ],
        'weNeed' => [
            'Projektets mål, omfattning och ungefärliga tidplan',
            'Befintliga ritningar, budgetram och eventuella offerter',
            'Kontaktperson, beslutsordning och behov av hjälp',
        ],
        'sections' => [
            [
                'h2' => 'Projektledning för bygg och renovering',
                'body' => [
                    'Byggprojektledning kan börja innan en entreprenör upphandlas. Först behöver behovet och omfattningen bli tydliga: vilka arbeten ska göras, vad finns för underlag och vem fattar beslut? Ett sådant förarbete gör offerter lättare att jämföra.',
                    'Uppdraget kan sedan omfatta upphandlingsstöd, planering, möten och uppföljning. Be om en tydlig ansvarsfördelning och hur rapporteringen ska ske. Rollen behöver anpassas till ett mindre husprojekt eller en större fastighetsrenovering.',
                ],
            ],
            [
                'h2' => 'Byggkonsult och projektledare för BRF',
                'body' => [
                    'Styrelser kan behöva stöd när en åtgärd kräver mer teknisk tid än det löpande föreningsarbetet medger. Exempel är planering inför takbyte, fasadarbeten eller ombyggnad av gemensamma utrymmen. Projektledaren kan hjälpa styrelsen att dokumentera alternativ och beslut.',
                    'Bestäm vem som får beställa tillägg, hur ändringar godkänns och hur ekonomin rapporteras. Skilj mellan styrelsens mandat, konsultens uppdrag och entreprenörens ansvar.',
                ],
            ],
            [
                'h2' => 'Från byggledning till överlämning',
                'body' => [
                    'Under genomförandet behöver tidplan, ändringar och dokumentation följas upp. När arbetet ska avslutas bör överlämning och eventuell besiktning planeras i tid. Dessa moment kan samordnas men behöver ha tydliga roller.',
                    'Ange projektets skede i formuläret: idé, upphandling, pågående bygge eller ett arbete som behöver avslutas. Be om prisform, omfattning, rapportering och hur extra insatser hanteras.',
                ],
            ],
        ],
        'benefits' => [

        ],
        'faq' => [
            [
                'q' => 'Vad är skillnaden mellan byggkonsult och byggprojektledare?',
                'a' => 'Byggkonsult är ett bredare begrepp. Projektledning avser ett avgränsat ansvar för planering, samordning och uppföljning enligt uppdraget.',
            ],
            [
                'q' => 'Kan en BRF få stöd inför upphandling?',
                'a' => 'Ja, beskriv vad som ska göras och vilka tekniska underlag som finns. Upphandlingsstödet behöver avgränsas i offerten.',
            ],
            [
                'q' => 'Ingår besiktning och KA?',
                'a' => 'Inte automatiskt. Dessa uppdrag behöver beskrivas separat med tydliga roller och villkor.',
            ],
            [
                'q' => 'Kan ni hjälpa ett projekt som redan pågår?',
                'a' => 'Beskriv nuvarande skede, handlingar och problem. Det går då att bedöma vilken avgränsad hjälp som behövs.',
            ],
        ],
        'cta' => [
            'label' => 'Begär offert',
        ],
        'related' => [
            'brf',
            'kontrollansvarig',
            'entreprenadbesiktning',
        ],
        'guides' => [
            'underhallsplan-checklista',
            'jamfora-besiktningsoffert',
        ],
        'articles' => [

        ],
        'toolLinks' => [
            [
                'path' => '/priser/',
                'label' => 'Vad påverkar priset?',
                'text' => 'Jämför omfattning, dokumentation och tillägg innan du bokar.',
            ],
        ],
        'lastReviewed' => '2026-10-10',
    ],
];
