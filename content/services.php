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
        'metaDescription' => 'Besiktning av hus inför köp eller försäljning i Stockholms län. Certifierad besiktningsman, skriftligt protokoll med foton och fast pris i offerten.',
        'hero' => [
            'eyebrow' => 'Köpa eller sälja hus',
            'h1'      => 'Besiktning av hus inför köp – överlåtelsebesiktning',
            'h2'      => 'Vet vad du köper innan kontraktet är påskrivet.',
            'lead'    => 'En överlåtelsebesiktning hjälper dig att uppfylla undersökningsplikten. Besiktningsmannen går igenom huset och förklarar vilka risker som finns.',
        ],
        'includes' => [
            'Genomgång av handlingar, ritningar och säljarens uppgifter',
            'Okulär besiktning av alla åtkomliga utrymmen, från tak och fasad till källare eller krypgrund',
            'Fuktindikering i våtrum, källare och andra riskkonstruktioner',
            'Kontroll av installationer som el, vatten, avlopp och ventilation i den omfattning som är möjlig utan ingrepp',
            'Skriftligt protokoll med foton, bedömning av skick och prioriterade åtgärder',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (provhål) utan säljarens medgivande',
            'Provtagning, laboratorieanalys och kostnadsberäkning av åtgärder, om inget annat avtalats',
            'Besiktning av delar som inte går att komma åt eller som är dolda bakom ytskikt',
        ],
        'weNeed'   => [
            'Adress, tillträde till huset och kontaktuppgift till säljaren eller mäklaren',
            'Objektsbeskrivning, ritningar och tidigare protokoll, om de finns',
            'Uppgifter om gjorda renoveringar, särskilt badrum, tak och dränering',
            'Din tidsram – visningar och budgivning går ofta fort',
        ],
        'sections' => [
            [
                'h2' => 'Vad ingår i en överlåtelsebesiktning?',
                'body' => [
                    'En överlåtelsebesiktning, ofta kallad husbesiktning, är en oberoende genomgång av huset i samband med köp eller försäljning. Besiktningsmannen går igenom byggnadens skick utifrån det som går att se och mäta utan att öppna upp konstruktionen: tak, fasad, grund, våtrum, ytskikt, installationer och utrymmen som vind, källare eller krypgrund.',
                    'Fokus ligger på fel och risker som kan bli dyra – fukt, bristfälligt utförda renoveringar, byggnadstekniska brister och utrymmen där skador ofta uppstår. Resultatet är ett skriftligt protokoll där varje anmärkning beskrivs, fotodokumenteras och bedöms, så att du kan väga in dem i budgivningen eller i förhandlingen om priset.',
                ],
            ],
            [
                'h2' => 'Köpare eller säljare – vem beställer besiktningen?',
                'body' => [
                    'Den vanligaste beställaren är köparen, som vill veta vad som döljer sig bakom de snygga ytorna innan kontraktet skrivs. Besiktningsmannen arbetar oberoende och är inte mäklarens eller säljarens ombud – det är du som köpare som har beställt uppdraget och som äger protokollet.',
                    'Även säljare kan beställa en besiktning i förväg. Då får både säljare och spekulanter ett gemensamt underlag, och eventuella brister kan åtgärdas eller prissättas innan visning. En säljarbesiktning ersätter inte alltid köparens egen besiktning, eftersom köparen ofta vill ha en besiktningsman som han eller hon själv har valt.',
                ],
            ],
            [
                'h2' => 'Undersökningsplikt och vad den innebär för dig',
                'body' => [
                    'När du köper en fastighet av en privatperson har du som köpare en undersökningsplikt. Det betyder att du förväntas undersöka huset noga före köpet, och att du i regel inte kan göra anspråk mot säljaren för fel som en normal undersökning hade avslöjat. Säljaren har å sin sida en upplysningsplikt om fel som han eller hon känner till.',
                    'En överlåtelsebesiktning är ett sätt att fullgöra undersökningsplikten på ett dokumenterat sätt. Observera att en besiktning inte ger någon garanti för att huset är fritt från fel, utan är ett underlag som minskar risken för obehagliga överraskningar. Vilka rättsliga konsekvenser ett visst fel får avgörs i det enskilda fallet.',
                ],
            ],
            [
                'h2' => 'Före eller efter kontrakt? Besiktningsklausul',
                'body' => [
                    'Besiktningen bör göras innan du skriver under köpekontraktet. Ibland hinner man inte det före budgivningen. Då går det att skriva in en besiktningsklausul i köpeavtalet, som gör köpet beroende av att en besiktning inte visar allvarliga fel. Hur klausulen ska utformas bör du stämma av med din mäklare eller en jurist.',
                    'Hör av dig så fort du vet vilket hus det gäller. Ju tidigare vi får adress och visningsdatum, desto lättare är det att hitta en tid som passar innan budgivningen avgörs.',
                ],
            ],
            [
                'h2' => 'Efter besiktningen – så använder du protokollet',
                'body' => [
                    'Du får protokollet skriftligt, med foton, bedömning av varje anmärkning och en prioritering av vad som är akut och vad som kan vänta. Besiktningsmannen går gärna igenom resultatet med dig, så att du förstår vad som är en normal åldersanmärkning och vad som är ett verkligt problem.',
                    'Om protokollet visar att något behöver utredas närmare, till exempel misstänkt fukt i en källarvägg eller ett badrum med osäkert tätskikt, kan du gå vidare med en fuktutredning eller badrumsbesiktning. Protokollet kan också ligga till grund för att be om prisavdrag eller åtgärder, men beslutet om hur du går vidare är ditt.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Oberoende bedömning',
                'text' => 'Besiktningsmannen arbetar för dig som beställare, inte för mäklaren eller säljaren.',
            ],
            [
                'title' => 'Skriftligt protokoll med foton',
                'text' => 'Varje anmärkning beskrivs och dokumenteras, så att du kan använda underlaget i budgivning och förhandling.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se våra riktpriser på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Kan man köpa hus utan besiktning?',
                'a' => 'Ja, men som köpare har du undersökningsplikt och kan sällan kräva ersättning för fel som en normal undersökning hade upptäckt. Därför väljer många att besikta huset före köpet.',
            ],
            [
                'q' => 'Ska besiktningen göras före eller efter kontraktet?',
                'a' => 'Helst före. Hinner du inte det går det att skriva in en besiktningsklausul i köpeavtalet som gör köpet beroende av besiktningen. Stäm av formuleringen med mäklare eller jurist.',
            ],
            [
                'q' => 'Vad kostar en överlåtelsebesiktning?',
                'a' => 'Priset beror på husets storlek, ålder och var det ligger. Vi visar riktpriser och en kalkylator på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
            [
                'q' => 'Hur lång tid tar en husbesiktning?',
                'a' => 'Det beror på husets storlek och skick, men räkna med några timmar på plats. Protokollet skickas därefter skriftligt.',
            ],
            [
                'q' => 'Kan säljaren beställa besiktningen i stället?',
                'a' => 'Ja, men en säljarbesiktning ger ett gemensamt underlag till alla spekulanter. Många köpare väljer ändå att beställa en egen besiktning av en besiktningsman de själva har valt.',
            ],
            [
                'q' => 'Går ni att anlita utanför Stockholms län?',
                'a' => 'Uppdrag i övriga Sverige kan göras efter överenskommelse. Skriv i formuläret var huset ligger så återkommer vi med ett förslag.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på husbesiktning'],
        'related'   => ['statusbesiktning', 'badrumsbesiktning', 'fuktutredning'],
        'guides'    => ['mogel-i-hus', 'fuktskada-kallare', 'fuktmatning-betong'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'statusbesiktning' => [
        'path'            => '/statusbesiktning/',
        'keyword'         => 'statusbesiktning',
        'title'           => 'Statusbesiktning',
        'navLabel'        => 'Statusbesiktning',
        'cluster'         => 'kop',
        'parent'          => null,
        'seoTitle'        => 'Statusbesiktning av hus och lägenhet',
        'metaDescription' => 'Statusbesiktning av villa, lägenhet eller fastighet: en genomgång av skicket och vad som behöver åtgärdas. Certifierad besiktningsman i Stockholms län.',
        'hero' => [
            'eyebrow' => 'Skick och underhåll',
            'h1'      => 'Statusbesiktning av hus, lägenhet och fastighet',
            'h2'      => 'En samlad bild av skicket – och vad som behöver göras.',
            'lead'    => 'Statusbesiktningen passar när du vill veta hur huset mår, planera underhåll eller inför en försäljning.',
        ],
        'includes' => [
            'Genomgång av tak, fasad, grund och installationer',
            'Kontroll av våtrum och fuktutsatta delar, med fuktindikering där det behövs',
            'Besiktning av tak och takavvattning i den omfattning som är säkert åtkomlig',
            'Prioriterad lista över åtgärder, indelad efter hur bråttom de är',
            'Skriftligt protokoll med foton',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (provhål) utan ägarens medgivande',
            'Provtagning, laboratorieanalys och detaljerad kostnadsberäkning av åtgärder, om inget annat avtalats',
            'Besiktning av delar som inte går att komma åt eller som är dolda bakom ytskikt',
            'Utförande av åtgärder, reparation och underhåll',
        ],
        'weNeed'   => [
            'Adress och tillträde till byggnaden, även vind, källare eller krypgrund',
            'Byggår och uppgifter om gjorda renoveringar och åtgärder',
            'Ritningar, tidigare besiktningsprotokoll och underhållsplan, om de finns',
            'Vad du vill ha ut av besiktningen – planera underhåll, inför försäljning eller som underlag för föreningen',
        ],
        'sections' => [
            [
                'h2' => 'Vad är en statusbesiktning?',
                'body' => [
                    'En statusbesiktning är en genomgång av byggnadens skick vid en viss tidpunkt. Besiktningsmannen går igenom det som går att se och mäta utan att öppna upp konstruktionen, till exempel tak, fasad, grund, våtrum och installationer, och bedömer skicket på varje del. Resultatet är en samlad bild av vad som är i gott skick, vad som visar tecken på slitage och vad som behöver åtgärdas.',
                    'Skillnaden mot en överlåtelsebesiktning är syftet. En överlåtelsebesiktning görs i samband med köp och försäljning, medan en statusbesiktning av hus eller fastighet passar när du äger byggnaden och vill veta hur den mår, planera underhåll eller ha ett underlag inför en försäljning. Du får ett skriftligt protokoll med foton, bedömningar och en prioriterad lista över åtgärder.',
                ],
            ],
            [
                'h2' => 'Statusbesiktning av hus, lägenhet och fastighet',
                'body' => [
                    'För en villa är statusbesiktningen ett sätt att få överblick över byggnaden innan större beslut ska fattas, till exempel om du funderar på att renovera, bygga om eller sälja. Du ser vilka delar som snart behöver underhåll och kan fördela kostnaderna över tid i stället för att överraskas av en akut skada.',
                    'En statusbesiktning av lägenhet gäller de delar som ingår i lägenheten, framför allt våtrum, kök, ytskikt och installationer som är åtkomliga. Vilka delar som är bostadsrättshavarens ansvar och vilka som är föreningens framgår av föreningens stadgar. Statusbesiktning av fastighet är aktuell för den som äger flerbostadshus, kommersiella lokaler eller en mindre fastighet och behöver ett strukturerat underlag för underhåll och planering.',
                ],
            ],
            [
                'h2' => 'Besiktning av tak',
                'body' => [
                    'Taket är en av de delar som oftast påverkar husets skick, och en liten skada kan ge fukt i underliggande konstruktion innan du märker något inifrån. Därför ingår besiktning av tak i statusbesiktningen. Besiktningsmannen tittar på takbeläggningen, takfot, hängrännor, stuprör, genomföringar, skorsten och anslutningar och bedömer skick, tecken på läckage och återstående livslängd i grova drag.',
                    'Du kan också beställa en besiktning av taket för sig, till exempel om du vill besikta tak inför ett köp eller en försäljning, eller när du misstänker en skada efter oväder. Om du ska renovera taket kan en oberoende besiktningsman tak vara ett stöd: före arbetet för att få underlag till upphandlingen, och efter arbetet för att kontrollera att takrenoveringen är fackmässigt utförd. Se även slutbesiktning, som används för den typen av kontroll av utförda arbeten.',
                    'Besiktningen av taket görs i den utsträckning taket är säkert åtkomligt. Är lutningen, höjden eller underlaget en säkerhetsrisk bedömer besiktningsmannen från mark, stege, vind eller takfot i stället, och beskriver det som inte kunnat kontrolleras i protokollet.',
                ],
            ],
            [
                'h2' => 'Statusbesiktning i BRF och som underlag för underhållsplan',
                'body' => [
                    'För bostadsrättsföreningar är statusbesiktningen ofta första steget i arbetet med underhållet. Styrelsen får en genomgång av fastighetens skick, från tak och fasad till källare, gemensamma utrymmen och installationer, och kan på det underlaget planera åtgärder och avsätta medel över flera år.',
                    'Statusbesiktningen kan därefter ligga till grund för en underhållsplan, där åtgärderna fördelas per år och får en kostnadsuppskattning. Har föreningen redan en underhållsplan kan en statusbesiktning användas för att kontrollera att planen fortfarande stämmer med verkligheten. Skicka gärna med årsredovisning och tidigare utredningar när du hör av dig.',
                ],
            ],
            [
                'h2' => 'Efter besiktningen – så använder du protokollet',
                'body' => [
                    'Protokollet beskriver varje anmärkning med foto, bedömning av skicket och en prioritering av vad som är akut och vad som kan vänta. Besiktningsmannen går gärna igenom resultatet med dig, så att du förstår skillnaden mellan normalt slitage och något som behöver åtgärdas.',
                    'Visar protokollet något som behöver utredas närmare, till exempel misstänkt fukt eller ett badrum med osäkert tätskikt, kan du gå vidare med en fuktutredning eller en badrumsbesiktning. Beslutet om hur du går vidare med åtgärderna är alltid ditt.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Samlad bild av skicket',
                'text' => 'Tak, fasad, grund, våtrum och installationer bedöms i ett och samma protokoll.',
            ],
            [
                'title' => 'Prioriterade åtgärder',
                'text' => 'Du ser vad som är akut och vad som kan vänta, vilket underlättar planering av underhåll och budget.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se våra riktpriser på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är skillnaden mellan statusbesiktning och överlåtelsebesiktning?',
                'a' => 'Överlåtelsebesiktningen görs i samband med köp och försäljning av ett hus. Statusbesiktningen görs när du äger byggnaden och vill veta skicket, planera underhåll eller ha ett underlag inför en försäljning. Genomgången är likartad, men syftet och användningen skiljer sig åt.',
            ],
            [
                'q' => 'När är en statusbesiktning av hus lämplig?',
                'a' => 'Till exempel när du vill planera underhåll, inför en renovering eller försäljning, eller när du övertagit en byggnad och vill veta vad den behöver. För bostadsrättsföreningar är den ofta underlag för underhållsplanen.',
            ],
            [
                'q' => 'Kan ni besikta bara taket?',
                'a' => 'Ja, du kan beställa en besiktning av taket för sig, till exempel inför köp, efter en skada eller efter en takrenovering. Skriv i formuläret vad du vill ha kontrollerat så får du en offert.',
            ],
            [
                'q' => 'Kan jag få en statusbesiktning av en lägenhet?',
                'a' => 'Ja, besiktningen gäller de delar av lägenheten som går att komma åt, till exempel våtrum, kök, ytskikt och installationer. Vad som är ditt ansvar och vad som är föreningens framgår av föreningens stadgar.',
            ],
            [
                'q' => 'Vad kostar en statusbesiktning?',
                'a' => 'Priset beror på byggnadens typ, storlek och omfattning. Vi visar riktpriser och en kalkylator på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
            [
                'q' => 'Får jag en lista på vad som behöver åtgärdas?',
                'a' => 'Ja, protokollet innehåller en prioriterad lista över åtgärder med foton och bedömning av skicket. Det är ett underlag för planering – utförandet och en detaljerad kostnadsberäkning ingår inte om inget annat avtalats.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på statusbesiktning'],
        'related'   => ['overlatelsebesiktning', 'brf', 'underhallsplan'],
        'guides'    => ['mogel-i-hus', 'fuktskada-kallare'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'badrumsbesiktning' => [
        'path'            => '/badrumsbesiktning/',
        'keyword'         => 'badrumsbesiktning',
        'title'           => 'Badrumsbesiktning',
        'navLabel'        => 'Badrumsbesiktning',
        'cluster'         => 'fukt',
        'parent'          => null,
        'seoTitle'        => 'Badrumsbesiktning – badrum och våtrum',
        'metaDescription' => 'Badrumsbesiktning före köp, efter renovering eller för BRF. Kontroll av tätskikt, golvbrunn och fukt, med protokoll. Stockholms län.',
        'hero' => [
            'eyebrow' => 'Badrum och våtrum',
            'h1'      => 'Badrumsbesiktning',
            'h2'      => 'Kontroll av badrummet före köp eller efter renovering.',
            'lead'    => 'Ett badrum med fel i tätskiktet kan ge stora fuktskador. Vi kontrollerar badrummet och mäter fukt där det behövs.',
        ],
        'includes' => [
            'Okulär kontroll av golv, väggar, golvbrunn, fall mot brunn och anslutningar',
            'Kontroll av tätskikt och genomföringar i den mån de går att bedöma utan ingrepp',
            'Fuktmätning i angränsande väggar och golv där det behövs',
            'Genomgång av dokumentation om renoveringen, till exempel kvalitetsdokument eller våtrumsintyg',
            'Bedömning mot branschregler för våtrum',
            'Skriftligt protokoll med foton och rekommenderade åtgärder',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (till exempel att bryta upp kakel) utan ägarens medgivande',
            'Besiktning av dolda skikt som inte går att bedöma utan ingrepp',
            'Sanering, reparation och renovering',
            'Provtagning och laboratorieanalys, om inget annat avtalats',
        ],
        'weNeed'   => [
            'Adress och tillträde till badrummet',
            'Våtrumsintyg eller kvalitetsdokument om de finns, samt uppgift om när badrummet renoverades och vem som gjorde det',
            'Uppgift om du ska köpa, har renoverat eller misstänker fukt, så att besiktningen kan anpassas',
            'Vid bostadsrätt: kontakt till styrelse eller förvaltare om föreningen ställer krav',
        ],
        'sections' => [
            [
                'h2' => 'Badrumsbesiktning före köp',
                'body' => [
                    'Badrummet är ofta den dyraste delen att åtgärda om något är fel. Ett läckage eller ett bristfälligt tätskikt kan ge fuktskador i golv och väggar innan något syns på ytan. Därför vill många köpare besikta badrum innan de lägger bud, särskilt när badrummet är renoverat och ytorna ser fina ut.',
                    'Vid en badrumsbesiktning före köp går besiktningsmannen igenom skicket på golv, väggar, golvbrunn, silikonfogar och genomföringar, kontrollerar fall mot brunn och mäter fukt i angränsande konstruktioner där det behövs. Du får veta om badrummet ser ut att vara fackmässigt utfört, om det finns tecken på fukt och vad som behöver åtgärdas. Badrumsbesiktningen kan göras för sig eller som en del av en överlåtelsebesiktning.',
                ],
            ],
            [
                'h2' => 'Besiktning av badrum efter renovering',
                'body' => [
                    'Har du låtit renovera badrummet kan en besiktning efter renoveringen visa om arbetet är utfört fackmässigt innan du godkänner och betalar. Eftersom tätskiktet döljs bakom kakel eller plastmatta går det inte att kontrollera det när arbetet är färdigt, och därför är dokumentationen från hantverkaren viktig.',
                    'Besiktningsmannen bedömer det som går att se och mäta och jämför med de branschregler för våtrum som gäller för utförandet. Vi går också igenom hantverkarens dokumentation, till exempel kvalitetsdokument eller våtrumsintyg om sådant finns. Hittar vi brister kan de användas som underlag i dialogen med hantverkaren. Är renoveringen en större entreprenad kan en slutbesiktning av badrumsrenoveringen vara ett lämpligt sätt att göra kontrollen.',
                ],
            ],
            [
                'h2' => 'Badrumsbesiktning i bostadsrätt och BRF',
                'body' => [
                    'För bostadsrättshavare och föreningar är badrummet extra känsligt, eftersom ett läckage lätt drabbar grannlägenheter och föreningens fastighet. Många föreningar ställer krav på dokumentation eller kontroll när en medlem renoverar badrum. Vilka krav som gäller i just din förening framgår av föreningens stadgar och regler, och du bör kontrollera dem med styrelsen innan du renoverar.',
                    'Som köpare av en bostadsrätt kan du beställa en besiktning av badrummet i lägenheten innan budgivningen. Styrelser kan beställa besiktning av medlemmars badrumsrenoveringar eller en genomgång av flera badrum i fastigheten. Besiktningsmannen arbetar oberoende och rapporterar till den som beställt uppdraget.',
                ],
            ],
            [
                'h2' => 'Tecken på att badrummet behöver kontrolleras',
                'body' => [
                    'Det finns några signaler som är värda att ta på allvar: missfärgade eller mjuka fogar, sprickor i kakel eller klinker, lukt av instängdhet, fläckar på väggen bredvid badrummet eller golvet i hallen, golvbrunnen som rinner långsamt samt fuktig luft som inte försvinner. Inget av detta behöver betyda att tätskiktet är trasigt, men det är skäl att undersöka saken, särskilt innan en köpare eller en förening ställer frågan.',
                    'Är du osäker på om det behövs en besiktning eller en fuktutredning kan du beskriva läget i formuläret, så föreslår vi vad som passar. Vid en befintlig fuktskada är en fuktutredning oftast rätt väg, medan badrumsbesiktningen är en kontroll av skicket.',
                ],
            ],
            [
                'h2' => 'Så går våtrumsbesiktningen till',
                'body' => [
                    'Besiktningen börjar med en genomgång av vad du vet om badrummet: byggår, renovering och eventuella tidigare skador. Därefter undersöker besiktningsmannen badrummet på plats, tittar på ytskikt, fogar, golvbrunn och installationer och mäter fukt i golv och väggar där det finns skäl att misstänka problem. Ibland görs fuktmätningen även i angränsande rum och i utrymmen under eller bakom badrummet, om de går att komma åt.',
                    'Efteråt får du ett skriftligt protokoll med foton, mätvärden och en bedömning av skicket, samt rekommendationer om åtgärder. Visar mätningarna förhöjd fukt eller om orsaken är oklar kan du gå vidare med en fuktutredning, där orsak och omfattning undersöks närmare. Vi utför inte själva sanering eller reparation.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Kontroll av det som döljs',
                'text' => 'Fuktmätning och genomgång av dokumentation ger en bild av skicket även när tätskiktet inte syns.',
            ],
            [
                'title' => 'Underlag före köp och efter renovering',
                'text' => 'Protokollet med foton och mätvärden kan användas i budgivning, mot hantverkare eller i dialog med föreningen.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se våra riktpriser på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är en badrumsbesiktning?',
                'a' => 'En oberoende kontroll av badrummets skick, där besiktningsmannen går igenom golv, väggar, golvbrunn, fall mot brunn och anslutningar och mäter fukt där det behövs. Du får ett skriftligt protokoll med foton och bedömning.',
            ],
            [
                'q' => 'Kan man besikta badrum innan man köper?',
                'a' => 'Ja. En besiktning av badrum före köp ger dig en bild av skicket innan du lägger bud, och kan göras för sig eller som en del av en överlåtelsebesiktning. Hör av dig så snart du vet vilket objekt det gäller.',
            ],
            [
                'q' => 'Kan ni besikta badrummet efter renovering?',
                'a' => 'Ja. Besiktningen visar om arbetet verkar vara fackmässigt utfört och om hantverkarens dokumentation stämmer. Eftersom tätskiktet är dolt går det inte att bedöma alla delar utan ingrepp.',
            ],
            [
                'q' => 'Krävs badrumsbesiktning i en bostadsrätt?',
                'a' => 'Det avgörs av föreningens stadgar och regler. Många föreningar ställer krav på dokumentation vid badrumsrenovering. Fråga din styrelse eller förvaltare vilka krav som gäller.',
            ],
            [
                'q' => 'Vad är skillnaden mellan badrumsbesiktning och fuktutredning?',
                'a' => 'Badrumsbesiktningen är en kontroll av badrummets skick, ofta före köp eller efter renovering. En fuktutredning görs när det redan finns misstänkt fukt eller skada och syftar till att hitta orsak och omfattning.',
            ],
            [
                'q' => 'Vad kostar en badrumsbesiktning?',
                'a' => 'Priset beror på antal badrum och omfattning, till exempel om fuktmätning behövs. Vi visar riktpriser och en kalkylator på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på badrumsbesiktning'],
        'related'   => ['fuktutredning', 'slutbesiktning', 'brf'],
        'guides'    => ['fuktskada-badrum', 'mogel-i-hus'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'fuktutredning' => [
        'path'            => '/fuktutredning/',
        'keyword'         => 'fuktskada',
        'title'           => 'Fuktutredning och skadeutredning',
        'navLabel'        => 'Fuktutredning och skadeutredning',
        'cluster'         => 'fukt',
        'parent'          => null,
        'seoTitle'        => 'Fuktskada? Fuktutredning i Stockholm',
        'metaDescription' => 'Misstänkt fuktskada eller mögel? Fuktutredning och skadeutredning med fuktmätning och skriftlig rapport, av certifierad besiktningsman.',
        'hero' => [
            'eyebrow' => 'Fukt, mögel och skador',
            'h1'      => 'Fuktskada i huset – fuktutredning och skadeutredning',
            'h2'      => 'Hitta orsaken innan du river eller renoverar.',
            'lead'    => 'Lukt, missfärgningar eller en vattenskada? En fuktutredning visar var fukten finns, varifrån den kommer och vad som behöver göras.',
        ],
        'includes' => [
            'Samtal om vad du har sett, känt eller luktat och om tidigare skador och åtgärder',
            'Okulär undersökning och fuktmätning på de platser som är aktuella',
            'Bedömning av orsak och omfattning, i den mån det går att avgöra utan större ingrepp',
            'Förslag på åtgärder och vad som bör göras i vilken ordning',
            'Skriftlig rapport med foton och mätvärden, användbar som underlag mot försäkringsbolag',
        ],
        'excludes' => [
            'Sanering och reparation – vi utför inte åtgärderna',
            'Ingrepp i konstruktionen (till exempel borrhål eller att öppna väggar) utan ägarens medgivande',
            'Provtagning och laboratorieanalys, om inget annat avtalats',
            'Bedömning av hälsoeffekter – vid besvär hänvisar vi till vården och myndigheter',
        ],
        'weNeed'   => [
            'Adress och tillträde till det aktuella området, även vind, källare eller krypgrund',
            'En beskrivning av vad du har sett eller känt – lukt, missfärgning, fläckar, bubblande färg eller en vattenskada',
            'Foton och uppgift om när det upptäcktes och om något redan har åtgärdats',
            'Kontakt med försäkringsbolaget och skadeärendet om ett sådant redan finns',
        ],
        'sections' => [
            [
                'h2' => 'Tecken på fuktskada',
                'body' => [
                    'En fuktskada märks inte alltid direkt. Vanliga tecken är lukt av källare eller instängdhet, missfärgningar och fläckar på vägg eller tak, färg och tapeter som släpper, buckliga golv eller parkett, korrosion samt fukt som kommer tillbaka efter att du torkat. Ibland syns ingenting alls, men fuktmätning visar något annat.',
                    'Fuktskador i hus uppstår av olika orsaker: läckande rör, bristfälligt tätskikt i badrum, otät fasad eller tak, dåligt fungerande dränering, kondens eller markfukt som tränger in i källare och krypgrund. Det är orsaken som avgör vad som behöver göras, och därför är det viktigt att utreda den innan du river eller renoverar. En fuktskada i vägg som torkas upp utan att källan åtgärdas kommer ofta tillbaka.',
                ],
            ],
            [
                'h2' => 'Så går en fuktutredning till',
                'body' => [
                    'En fuktutredning, ofta kallad skadeutredning, börjar med ett samtal om vad du har upptäckt och vilka åtgärder som redan gjorts. Därefter undersöker besiktningsmannen platsen: tittar på byggnadens konstruktion, möjliga fuktkällor och skadans utbredning, och mäter fukt med instrument där det finns skäl. Beroende på skadan kan undersökningen även omfatta intilliggande rum, vind, källare eller krypgrund.',
                    'Målet är att hitta orsaken, bedöma hur omfattande skadan är och föreslå åtgärder. Ibland räcker det med mätning utan ingrepp. I andra fall behövs borrhål eller mindre öppningar för att komma åt mätpunkter, och det görs i så fall bara efter att du har godkänt det. Det är också så en besiktning av fuktskada skiljer sig från en vanlig husbesiktning: fokus ligger på en specifik skada och dess orsak.',
                ],
            ],
            [
                'h2' => 'Fuktmätning',
                'body' => [
                    'Fuktmätning visar var materialet är fuktigt och hur mycket. Mätvärdena jämförs med vad som är normalt för materialet, och mätningar på flera ställen visar hur fuktskadan breder ut sig. Metoden varierar med materialet. Trä, gips och betong mäts på olika sätt, och betongplattor kräver ofta särskild mätmetod.',
                    'Egna fuktmätare kan ge en fingervisning, men värdena är lätta att feltolka. En mätning i en yta säger inte hela sanningen om vad som döljs bakom eller under. Därför är en fuktmätning av en besiktningsman, tillsammans med en bedömning av byggnaden, mer tillförlitlig än en ensam mätning.',
                ],
            ],
            [
                'h2' => 'Försäkring och ansvar',
                'body' => [
                    'Vid en vattenskada eller fuktskada vill många veta om hemförsäkringen eller fastighetsförsäkringen täcker skadan. Det avgörs av ditt försäkringsbolag utifrån försäkringsvillkoren och vad som orsakat skadan. Vi kan inte avgöra försäkringsfrågan, men en rapport från en oberoende besiktningsman med foton och mätvärden är ett användbart underlag när du kontaktar bolaget.',
                    'Anmäl gärna skadan till försäkringsbolaget tidigt och spara foton och kvitton. Ansvarsfrågor, till exempel mellan dig och en tidigare ägare, en hantverkare eller en bostadsrättsförening, avgörs i det enskilda fallet. Rapporten kan vara ett underlag, men den ersätter inte juridisk rådgivning.',
                ],
            ],
            [
                'h2' => 'Rapporten och vad som händer sedan',
                'body' => [
                    'Du får en skriftlig rapport med foton, mätvärden, bedömning av orsak och omfattning samt förslag på åtgärder i prioriterad ordning. Besiktningsmannen går gärna igenom den med dig.',
                    'Vi utför inte sanering eller reparation. Rapporten visar vad som behöver göras, och du anlitar själv det företag som utför åtgärderna. Rapporten kan användas som underlag för upphandling av åtgärder, i kontakt med försäkringsbolaget och, vid behov, som dokumentation vid en försäljning. Misstänker du mögel kan fuktutredningen visa om förutsättningarna för mikrobiell tillväxt finns, men vi ger ingen medicinsk rådgivning. Har du hälsobesvär hänvisar vi till vården.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Orsaken före åtgärden',
                'text' => 'Du får veta var fukten kommer ifrån innan du river eller renoverar.',
            ],
            [
                'title' => 'Rapport med foton och mätvärden',
                'text' => 'Ett skriftligt underlag som du kan använda mot försäkringsbolag, hantverkare och i dialog med föreningen.',
            ],
            [
                'title' => 'Oberoende utredare',
                'text' => 'Vi utför inte sanering eller reparation och har därför inget intresse av vilka åtgärder som väljs.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är skillnaden mellan fuktutredning och skadeutredning?',
                'a' => 'I praktiken menas ofta samma sak: en undersökning som tar reda på var fukten finns, var den kommer ifrån och hur omfattande skadan är. Skadeutredning används oftare när det redan har uppstått en synlig skada.',
            ],
            [
                'q' => 'Täcker hemförsäkringen en fuktskada?',
                'a' => 'Det avgörs av ditt försäkringsbolag utifrån villkoren och vad som orsakat skadan. Kontakta bolaget och ställ frågan. En skriftlig rapport från en oberoende besiktningsman kan vara ett underlag i ärendet, men vi kan inte garantera något utfall.',
            ],
            [
                'q' => 'Kan ni sanera fuktskadan?',
                'a' => 'Nej, vi utför inte sanering eller reparation. Rapporten visar orsak, omfattning och förslag på åtgärder, och du anlitar själv det företag som utför arbetet.',
            ],
            [
                'q' => 'Hur vet jag om jag har en fuktskada i väggen?',
                'a' => 'Vanliga tecken är lukt, missfärgningar, bubblande färg eller tapet som släpper. Det är inte säkert att något syns, och det är mätning på plats som visar om väggen är fuktig. Hör av dig om du är osäker.',
            ],
            [
                'q' => 'Behöver ni öppna upp väggen eller golvet?',
                'a' => 'Ibland räcker mätning utan ingrepp. I andra fall behövs borrhål eller mindre öppningar för att komma åt mätpunkter, och det görs bara efter att du har godkänt det.',
            ],
            [
                'q' => 'Vad kostar en fuktutredning?',
                'a' => 'Priset beror på skadans omfattning och byggnaden. Vi visar riktpriser och en kalkylator på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på fuktutredning'],
        'related'   => ['badrumsbesiktning', 'statusbesiktning', 'overlatelsebesiktning'],
        'guides'    => ['mogel-i-hus', 'fuktskada-badrum', 'fuktskada-parkett', 'fuktskada-kallare', 'fuktmatning-betong'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'slutbesiktning' => [
        'path'            => '/slutbesiktning/',
        'keyword'         => 'slutbesiktning',
        'title'           => 'Slutbesiktning',
        'navLabel'        => 'Slutbesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Slutbesiktning av renovering och nybygge',
        'metaDescription' => 'Slutbesiktning av nybyggt hus, tillbyggnad eller renovering. Oberoende besiktningsman som kontrollerar att arbetet är fackmässigt utfört.',
        'hero' => [
            'eyebrow' => 'Bygg och renovering',
            'h1'      => 'Slutbesiktning',
            'h2'      => 'Kontroll av arbetet innan du godkänner och betalar.',
            'lead'    => 'Vid slutbesiktningen kontrolleras att entreprenaden är utförd enligt avtal och fackmässigt. Fel som noteras ska åtgärdas av entreprenören.',
        ],
        'includes' => [
            'Genomgång av entreprenadavtal, ritningar, beskrivningar och eventuella ändrings- och tilläggsarbeten',
            'Besiktning på plats av det utförda arbetet, så långt det är åtkomligt och möjligt att bedöma utan ingrepp',
            'Okulär kontroll av ytskikt, snickerier, tätskikt, installationer och andra delar som ingår i entreprenaden',
            'Besiktningsutlåtande där noterade fel och brister beskrivs, fotodokumenteras och bedöms',
            'Efterbesiktning av åtgärdade fel vid behov',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (provhål) utan medgivande från den som äger byggnaden',
            'Besiktning av arbeten som inte ingår i entreprenaden eller som är dolda bakom färdiga ytskikt',
            'Åtgärder, reparation och rådgivning om hur felen ska rättas – det ansvarar entreprenören för',
            'Juridisk prövning av avtalsfrågor, ersättningskrav eller tvist',
        ],
        'weNeed'   => [
            'Adress och tillträde till bostaden eller byggnaden, samt kontaktuppgift till entreprenören',
            'Avtal med entreprenören, inklusive eventuella bilagor och ändringar',
            'Ritningar, beskrivningar och tidigare protokoll, till exempel egenkontroller, om de finns',
            'Uppgift om vilka arbeten som ingår och vilka delar du redan vet är oklara eller ofullständiga',
        ],
        'sections' => [
            [
                'h2' => 'Vad är en slutbesiktning?',
                'body' => [
                    'En slutbesiktning är en oberoende kontroll av ett byggnads- eller renoveringsarbete när entreprenören anser sig vara klar. Besiktningsmannen går igenom det utförda arbetet och jämför det med avtalet och handlingarna, och bedömer om det är fackmässigt utfört. Syftet är att du som beställare ska ha ett dokumenterat underlag innan du godkänner arbetet och betalar den sista delen av entreprenaden.',
                    'Det är alltså inte samma sak som en överlåtelsebesiktning, där ett befintligt hus granskas inför köp. Slutbesiktningen gäller ett avgränsat arbete som någon har utfört åt dig, och frågan är om resultatet motsvarar det som avtalades.',
                ],
            ],
            [
                'h2' => 'Slutbesiktning av nybyggt hus',
                'body' => [
                    'Vid slutbesiktning av ett nybyggt hus granskas huset som helhet: grund och stomme så långt de går att bedöma, tak och fasad, fönster och dörrar, våtrum, ytskikt, installationer och utvändiga arbeten som är en del av entreprenaden. Besiktningsmannen utgår från kontrakt, ritningar och beskrivningar och noterar avvikelser, brister i utförandet och sådant som är ofärdigt.',
                    'Slutbesiktningen görs när arbetet är klart enligt entreprenören, och innan du flyttar in eller godkänner entreprenaden. Har du redan flyttat in går det oftast fortfarande att besikta, men det kan göra det svårare att avgöra vad som är byggfel och vad som är slitage.',
                ],
            ],
            [
                'h2' => 'Slutbesiktning vid renovering och tillbyggnad',
                'body' => [
                    'Slutbesiktning är lika relevant efter en renovering eller tillbyggnad som efter ett nybygge. Det kan gälla ett nytt kök, en ombyggd källare, en tillbyggnad på villan eller en större renovering i en lägenhet. Besiktningsmannen kontrollerar det arbete som ingår i uppdraget och hur det ansluter mot den befintliga byggnaden, till exempel i skarvar, anslutningar och genomföringar.',
                    'Våtrum är ett område där fel ofta syns först efter en tid. Har du låtit renovera badrum kan en slutbesiktning kombineras med en badrumsbesiktning, där tätskikt och utförande kontrolleras mer ingående. Gäller det en lägenhet i en bostadsrättsförening är det bra att kontrollera vad föreningens regler säger om besiktning efter renovering.',
                ],
            ],
            [
                'h2' => 'Efterbesiktning – kontroll av åtgärdade fel',
                'body' => [
                    'Om slutbesiktningen visar fel som entreprenören ska rätta görs efter åtgärderna en efterbesiktning, ibland kallad fortsatt eller kompletterande slutbesiktning. Här kontrolleras endast de punkter som noterats, så att du vet att felen verkligen är åtgärdade innan arbetet godkänns. Med efterbesiktning menas här alltså besiktning inom bygg, inte besiktning av fordon.',
                    'Ju tydligare anmärkningarna är beskrivna i utlåtandet, desto enklare blir det för entreprenören att åtgärda dem och för dig att se att de är utförda.',
                ],
            ],
            [
                'h2' => 'Checklista inför slutbesiktningen',
                'body' => [
                    'En enkel checklista inför slutbesiktningen av din villa eller bostad: samla avtalet med bilagor, ritningar och beskrivningar, och be entreprenören om eventuella egenkontroller och dokumentation. Se till att besiktningsmannen får tillträde till alla utrymmen, även vind, källare och krypgrund om de ingår i arbetet.',
                    'Skriv ner det du själv har lagt märke till, till exempel sprickor, dörrar som kärvar, ojämna ytor eller lukt, och ta med fotografier. Avtala med entreprenören om tid så att båda parter kan vara på plats om du vill det. Tänk på att besiktningsmannen bara bedömer det som går att se och mäta utan ingrepp.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Oberoende kontroll före godkännande',
                'text' => 'Besiktningsmannen är inte entreprenörens ombud. Du får en bedömning av arbetet innan du godkänner det och betalar.',
            ],
            [
                'title' => 'Dokumenterade fel som entreprenören ska åtgärda',
                'text' => 'Varje anmärkning beskrivs och fotodokumenteras i utlåtandet, vilket ger ett tydligt underlag i dialogen med entreprenören.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se riktpriserna på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad händer om något inte godkänns vid slutbesiktningen?',
                'a' => 'Felen och bristerna förs in i besiktningsutlåtandet. Entreprenören får därefter åtgärda dem, och när det är gjort kontrolleras de i en efterbesiktning. Vilka rättigheter du har, till exempel att hålla inne betalning för felen, beror på avtalet och vilka regler som gäller för just din entreprenad. Stäm av med en jurist eller konsumentvägledare om du är osäker.',
            ],
            [
                'q' => 'När ska slutbesiktningen göras?',
                'a' => 'När entreprenören meddelar att arbetet är klart, och innan du godkänner entreprenaden. Vilka tidsfrister som gäller styrs av ditt avtal. Kontrollera därför avtalet innan du bokar en tid.',
            ],
            [
                'q' => 'Behöver jag slutbesiktning av ett nybyggt hus?',
                'a' => 'Det finns inget som hindrar dig från att besikta ett nybyggt hus, och många gör det för att få fel dokumenterade innan de godkänner arbetet. Om slutbesiktning ingår som ett krav styrs av ditt entreprenadavtal.',
            ],
            [
                'q' => 'Kan jag få slutbesiktning av en lägenhet efter renovering?',
                'a' => 'Ja. Slutbesiktning av lägenhet efter till exempel badrums- eller köksrenovering fungerar på samma sätt som för en villa. Är du medlem i en bostadsrättsförening bör du också kontrollera föreningens regler.',
            ],
            [
                'q' => 'Vad kostar en slutbesiktning?',
                'a' => 'Priset beror på byggnadens storlek och arbetets omfattning. Vi visar riktpriser och en kalkylator på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
            [
                'q' => 'Vad är skillnaden mellan slutbesiktning och garantibesiktning?',
                'a' => 'Slutbesiktningen görs när arbetet är klart och innan du godkänner det. Garantibesiktning görs en tid efteråt, under garantitiden, för att dokumentera fel som visat sig sedan dess.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på slutbesiktning'],
        'related'   => ['entreprenadbesiktning', 'garantibesiktning', 'badrumsbesiktning'],
        'guides'    => ['tvist-med-hantverkare', 'fuktskada-badrum'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'entreprenadbesiktning' => [
        'path'            => '/entreprenadbesiktning/',
        'keyword'         => 'entreprenadbesiktning',
        'title'           => 'Entreprenadbesiktning',
        'navLabel'        => 'Entreprenadbesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Entreprenadbesiktning AB 04 och ABT 06',
        'metaDescription' => 'Entreprenadbesiktning enligt AB 04, ABT 06 och ABS 18: förbesiktning, slutbesiktning och särskild besiktning för beställare och BRF.',
        'hero' => [
            'eyebrow' => 'För beställare och BRF',
            'h1'      => 'Entreprenadbesiktning och förbesiktning',
            'h2'      => 'Besiktningsförrättare enligt AB 04, ABT 06 och ABS 18.',
            'lead'    => 'Från förbesiktning till slutbesiktning och garantibesiktning – en oberoende besiktningsförrättare för hela entreprenaden.',
        ],
        'includes' => [
            'Förbesiktning och syn innan arbetet börjar eller under pågående arbete, till exempel av underlag och dolda arbeten',
            'Slutbesiktning och efterbesiktning av entreprenaden',
            'Särskild besiktning vid behov, till exempel när en del av entreprenaden ska kontrolleras separat',
            'Genomgång av kontrakt och handlingar för att fastställa vad som ska besiktas',
            'Besiktningsutlåtande enligt de standardavtal som gäller för entreprenaden, med noterade fel och anmärkningar',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (provhål eller liknande) utan beställarens medgivande, om inget annat avtalats',
            'Projektledning, kontrollansvar och byggledning',
            'Juridisk prövning av avtalsfrågor, ersättningskrav eller tvist',
            'Besiktning av delar som inte är tillgängliga eller som är dolda bakom färdiga ytskikt',
        ],
        'weNeed'   => [
            'Entreprenadkontrakt, förfrågningsunderlag och eventuella ändrings- och tilläggsarbeten (ÄTA)',
            'Uppgift om vilket standardavtal som gäller, till exempel AB 04, ABT 06 eller ABS 18',
            'Tidplan för entreprenaden, så att förbesiktning och slutbesiktning kan planeras in',
            'Kontaktuppgifter till beställare, entreprenör och eventuell fastighetsansvarig eller styrelseföreträdare',
        ],
        'sections' => [
            [
                'h2' => 'Vad är en entreprenadbesiktning?',
                'body' => [
                    'En entreprenadbesiktning är en oberoende besiktning av ett byggentreprenadarbete, utförd av en besiktningsförrättare som inte företräder varken beställare eller entreprenör. Besiktningen kan avse en nybyggnation, en renovering, ett stambyte eller en tillbyggnad, och den kan ske vid flera tillfällen under entreprenadens gång.',
                    'För beställare, till exempel en privatperson som låter bygga eller en bostadsrättsförening med en större entreprenad, är syftet att få fel och brister dokumenterade på ett sätt som båda parter kan förhålla sig till. Eftersom besiktningsmannen är oberoende finns det ett underlag som inte bygger på någon av parternas egna bedömningar.',
                ],
            ],
            [
                'h2' => 'AB 04, ABT 06 och ABS 18 – vilket avtal gäller?',
                'body' => [
                    'Många byggentreprenader bygger på standardavtal. AB 04 används vanligen för utförandeentreprenader, där beställaren har tagit fram handlingarna och entreprenören utför arbetet. ABT 06 används vanligen för totalentreprenader, där entreprenören också svarar för projekteringen. ABS 18 är ett standardavtal som används vid entreprenader mellan en konsument och en entreprenör, till exempel när en privatperson låter bygga eller bygga om sin bostad.',
                    'Vilket avtal som gäller för din entreprenad framgår av kontraktet. Det påverkar hur besiktningen går till: vem som kallar, vilka besiktningstillfällen som finns och hur utlåtandet ska utformas. Därför bör du skicka kontraktet i god tid innan du bokar. Är du osäker på vilket avtal som gäller kan besiktningsmannen hjälpa dig att se vad kontraktet hänvisar till.',
                ],
            ],
            [
                'h2' => 'Förbesiktning – kontroll innan det är för sent',
                'body' => [
                    'En förbesiktning, ibland kallad förbesiktning entreprenad, görs innan arbetet är helt klart. Den används ofta för att kontrollera sådant som senare blir dolt, till exempel armering, tätskikt, rörinstallationer eller underlag som ska täckas av ytskikt. Fel som upptäcks i det skedet går att åtgärda utan att något behöver rivas upp.',
                    'Förbesiktningen kan också användas för att kontrollera arbetets framskridande och att entreprenaden följer handlingarna. Ett bra läge att boka den är när det finns något som snart ska byggas in. Hör av dig i god tid, så att besiktningen kan ske före inbyggnad.',
                ],
            ],
            [
                'h2' => 'Slutbesiktning och särskild besiktning',
                'body' => [
                    'Slutbesiktningen görs när entreprenören meddelar att arbetet är färdigt. Besiktningsförrättaren går igenom entreprenaden mot handlingarna och noterar fel och brister, och resultatet sammanställs i ett besiktningsutlåtande. Om fel ska åtgärdas görs en efterbesiktning av de punkterna. Läs mer om detta på sidan om slutbesiktning.',
                    'En särskild besiktning är en besiktning som sker vid sidan av de ordinarie tillfällena, till exempel när en viss del av entreprenaden ska kontrolleras separat eller när det finns misstanke om fel i ett visst moment. Standardavtalen, bland annat ABT 06, beskriver särskild besiktning som ett möjligt moment. När den kan begäras och hur den ska genomföras avgörs av avtalet.',
                ],
            ],
            [
                'h2' => 'För beställare och bostadsrättsföreningar',
                'body' => [
                    'För en bostadsrättsförening är entreprenadbesiktning ofta aktuellt vid stambyte, fasadrenovering, takbyte eller andra större projekt. Styrelsen har ett ansvar mot medlemmarna för entreprenaden, och en oberoende besiktningsförrättare ger underlag för att kunna godkänna arbetet eller kräva rättelse. Läs mer om vår besiktning för bostadsrättsföreningar på sidan om BRF.',
                    'För dig som privat beställare gäller samma princip i mindre skala: du får en oberoende granskning av entreprenaden innan du godkänner den. Efter att entreprenaden har godkänts finns möjligheten att göra en garantibesiktning, som beskrivs på en egen sida.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Oberoende besiktningsförrättare',
                'text' => 'Besiktningen utförs av någon som varken företräder beställaren eller entreprenören, och utlåtandet blir ett gemensamt underlag.',
            ],
            [
                'title' => 'Besiktning genom hela entreprenaden',
                'text' => 'Från förbesiktning och särskild besiktning till slutbesiktning och efterbesiktning, med samma oberoende bedömning.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se riktpriserna på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är en entreprenadbesiktning?',
                'a' => 'En oberoende besiktning av ett byggentreprenadarbete, som kan ske vid flera tillfällen under entreprenaden, till exempel som förbesiktning, slutbesiktning och efterbesiktning. Den utförs av en besiktningsförrättare som inte företräder någon av parterna.',
            ],
            [
                'q' => 'Vad är skillnaden mellan AB 04 och ABT 06?',
                'a' => 'AB 04 används vanligen när beställaren tagit fram handlingarna och entreprenören utför arbetet, medan ABT 06 används vanligen vid totalentreprenad, där entreprenören också projekterar. Kontraktet visar vilket avtal som gäller för din entreprenad.',
            ],
            [
                'q' => 'Vad är en förbesiktning?',
                'a' => 'En besiktning som görs innan arbetet är klart, ofta för att kontrollera sådant som senare byggs in eller döljs. Fel som upptäcks då går att åtgärda utan att det som är färdigt behöver rivas upp.',
            ],
            [
                'q' => 'Vad är en särskild besiktning?',
                'a' => 'En besiktning som genomförs vid sidan av de ordinarie besiktningstillfällena, till exempel för en viss del av entreprenaden eller när det finns misstanke om fel. Vad som gäller för särskild besiktning, till exempel enligt ABT 06, framgår av avtalet.',
            ],
            [
                'q' => 'Behöver en BRF anlita en entreprenadbesiktningsman?',
                'a' => 'Det styrs av det avtal föreningen har med entreprenören och av föreningens egna rutiner. Många föreningar anlitar en oberoende besiktningsman vid större entreprenader för att få ett säkert underlag inför godkännande.',
            ],
            [
                'q' => 'Vad kostar en entreprenadbesiktning?',
                'a' => 'Priset beror på entreprenadens omfattning och antal besiktningstillfällen. Vi visar riktpriser på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på entreprenadbesiktning'],
        'related'   => ['slutbesiktning', 'garantibesiktning', 'brf'],
        'guides'    => ['tvist-med-hantverkare'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/', 'label' => 'Se priser på besiktning', 'text' => 'Riktpriser för alla tjänster. Uppdrag för föreningar och entreprenader får offert efter omfattning.'],
        ],
    ],

    'garantibesiktning' => [
        'path'            => '/garantibesiktning/',
        'keyword'         => 'garantibesiktning',
        'title'           => 'Garantibesiktning',
        'navLabel'        => 'Garantibesiktning',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Garantibesiktning efter 2 och 5 år',
        'metaDescription' => 'Garantibesiktning två eller fem år efter slutbesiktningen, för villaägare och BRF. Fel som visat sig under garantitiden dokumenteras.',
        'hero' => [
            'eyebrow' => 'Garantitid',
            'h1'      => 'Garantibesiktning',
            'h2'      => '2-årsbesiktning och 5-årsbesiktning.',
            'lead'    => 'Innan garantitiden går ut ska fel som visat sig dokumenteras, annars kan rätten att kräva åtgärd gå förlorad.',
        ],
        'includes' => [
            'Genomgång av slutbesiktningsutlåtandet och entreprenadavtalet, inklusive vad som gäller för garantitiden',
            'Besiktning av fel och brister som har uppkommit under garantitiden, så långt de går att se och mäta utan ingrepp',
            'Kontroll av tidigare noterade anmärkningar och om de har åtgärdats',
            'Utlåtande med foton som underlag för krav mot entreprenören',
        ],
        'excludes' => [
            'Ingrepp i konstruktionen (provhål) utan medgivande från den som äger byggnaden, om inget annat avtalats',
            'Åtgärder och reparation av felen – det ansvarar entreprenören för',
            'Juridisk prövning av garantifrågor, ersättningskrav eller tvist',
            'Besiktning av delar som inte ingick i den ursprungliga entreprenaden eller som är dolda bakom ytskikt',
        ],
        'weNeed'   => [
            'Slutbesiktningsutlåtandet och entreprenadavtalet, så att garantitiden och tidigare anmärkningar kan kontrolleras',
            'Datum för godkänd slutbesiktning eller överlämnande, eftersom garantitiden räknas från det',
            'Lista över kända fel, med foton om du har, och uppgift om vilka du redan har anmält till entreprenören',
            'Adress, tillträde till byggnaden och kontaktuppgift till entreprenören eller bostadsrättsföreningens styrelse',
        ],
        'sections' => [
            [
                'h2' => 'Vad är en garantibesiktning?',
                'body' => [
                    'En garantibesiktning är en oberoende besiktning som görs en tid efter att en entreprenad har godkänts, under den garantitid som gäller för arbetet. Syftet är att hitta och dokumentera fel och brister som har visat sig sedan slutbesiktningen, till exempel sättningar, sprickor, otäta anslutningar, fuktproblem eller fel i installationer, så att de kan åtgärdas av entreprenören.',
                    'Garantibesiktning är aktuell för dig som har fått ett hus byggt, har låtit göra en större renovering eller tillbyggnad, eller som är styrelse i en bostadsrättsförening efter en entreprenad. Den bygger på samma underlag som slutbesiktningen, och därför är slutbesiktningsutlåtandet en viktig handling.',
                ],
            ],
            [
                'h2' => 'Tidslinje: 2-årsbesiktning och 5-årsbesiktning',
                'body' => [
                    'Garantitiden räknas normalt från att entreprenaden godkändes eller överlämnades, och vilka tider som gäller anges i entreprenadavtalet. Det är vanligt att man i praktiken talar om två tillfällen: garantibesiktning efter två år, ofta kallad 2-årsbesiktning, och garantibesiktning efter fem år, ofta kallad 5-årsbesiktning. Vilken tidpunkt som passar beror på ditt avtal och vilka standardavtal som ligger till grund, till exempel AB 04 eller ABT 06.',
                    'Börja med att läsa avtalet för att se när garantitiden går ut, och boka besiktningen i god tid före det datumet. Ett fel som inte har dokumenterats och anmälts i tid kan vara svårt att kräva åtgärd för i efterhand. Räkna med att behöva tid för både besiktning och för att entreprenören ska hinna reagera.',
                ],
            ],
            [
                'h2' => 'För villaägare',
                'body' => [
                    'Som villaägare med ett nybyggt hus eller en större entreprenad kan garantibesiktningen vara det tillfälle då du går igenom huset med fokus på det som har visat sig efter en tid. Har du själv noterat något, till exempel fuktfläckar, sprickor i fasaden eller dörrar som har dragit sig, är det bra att ha det nedskrivet och fotograferat inför besiktningen.',
                    'Utlåtandet kan du använda när du kontaktar entreprenören och begär att felen åtgärdas. Om du är osäker på vilka regler som gäller för din entreprenad kan du vända dig till en jurist eller konsumentvägledare.',
                ],
            ],
            [
                'h2' => 'För bostadsrättsföreningar',
                'body' => [
                    'För en bostadsrättsförening är garantibesiktningen ofta ett viktigt moment efter nybyggnation, stambyte eller annan större entreprenad. Styrelsen kan då gå igenom fastigheten, dokumentera fel som har visat sig och samla underlaget innan garantitiden går ut. Det är också ett tillfälle att kontrollera att fel som noterades vid slutbesiktningen verkligen har åtgärdats.',
                    'Eftersom föreningen ansvarar mot medlemmarna för fastigheten är det bra att planera in garantibesiktningen i förväg och hålla koll på garantitidens slutdatum. Läs mer om vår besiktning för bostadsrättsföreningar på sidan om BRF.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Fel dokumenteras innan garantitiden går ut',
                'text' => 'Du får ett skriftligt utlåtande med foton över fel som har visat sig, att använda i kontakten med entreprenören.',
            ],
            [
                'title' => 'Oberoende bedömning',
                'text' => 'Besiktningsmannen arbetar för dig som beställare och är inte entreprenörens ombud.',
            ],
            [
                'title' => 'Fast pris i offerten',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Se riktpriserna på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är en garantibesiktning?',
                'a' => 'En oberoende besiktning som görs under garantitiden efter en entreprenad, för att dokumentera fel och brister som har visat sig sedan arbetet godkändes. Utlåtandet kan användas som underlag för krav mot entreprenören.',
            ],
            [
                'q' => 'När ska garantibesiktningen göras, efter 2 eller 5 år?',
                'a' => 'Det beror på garantitiden i ditt avtal. Det är vanligt att besiktning görs efter två och efter fem år, men kontrollera avtalet och boka i god tid innan garantitiden går ut.',
            ],
            [
                'q' => 'Vad är en 2-årsbesiktning?',
                'a' => 'Det är en garantibesiktning som görs ungefär två år efter att entreprenaden godkändes. Då kontrolleras sådant som har visat sig sedan slutbesiktningen och att tidigare anmärkningar har åtgärdats.',
            ],
            [
                'q' => 'Vad är en 5-årsbesiktning, och gäller den för BRF?',
                'a' => 'Det är en garantibesiktning som görs ungefär fem år efter godkänd entreprenad, innan en längre garantitid går ut. Den är relevant för bostadsrättsföreningar efter nybyggnad eller större entreprenad, men gäller även villaägare. Tiden styrs av avtalet.',
            ],
            [
                'q' => 'Vad händer om jag missar garantitiden?',
                'a' => 'Då kan det bli svårare att kräva att entreprenören åtgärdar fel. Vilka regler som gäller beror på avtalet, så ta reda på garantitidens slutdatum i god tid och stäm av med en jurist om du är osäker.',
            ],
            [
                'q' => 'Vad kostar en garantibesiktning?',
                'a' => 'Priset beror på byggnadens storlek och entreprenadens omfattning. Vi visar riktpriser på prissidan, och du får ett fast pris i offerten innan du bokar.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på garantibesiktning'],
        'related'   => ['entreprenadbesiktning', 'slutbesiktning', 'brf'],
        'guides'    => ['tvist-med-hantverkare'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/', 'label' => 'Se priser på besiktning', 'text' => 'Riktpriser för alla tjänster. Uppdrag för föreningar och entreprenader får offert efter omfattning.'],
        ],
    ],

    'brf' => [
        'path'            => '/brf/',
        'keyword'         => 'besiktningsman bostadsrätt',
        'title'           => 'Besiktning för BRF och bostadsrätt',
        'navLabel'        => 'BRF och bostadsrätt',
        'cluster'         => 'bygg',
        'parent'          => null,
        'seoTitle'        => 'Besiktning för BRF och bostadsrätt',
        'metaDescription' => 'Besiktningsman för bostadsrättsföreningar och bostadsrättsköpare: statusbesiktning, stambyte, garantibesiktning och besiktning inför köp.',
        'hero' => [
            'eyebrow' => 'Bostadsrättsföreningar',
            'h1'      => 'Besiktning av bostadsrätt och BRF',
            'h2'      => 'För styrelser och för dig som köper lägenhet.',
            'lead'    => 'Styrelsen behöver koll på fastigheten och på renoveringar i lägenheterna. Köparen vill veta skicket på badrum och kök innan budgivningen.',
        ],
        'includes' => [
            'Besiktning av bostadsrättslägenhet inför köp: ytskikt, våtrum, fönster, ventilation och synliga installationer',
            'Fuktindikering i badrum och andra våtrum i lägenheten',
            'Statusbesiktning av föreningens byggnader, gemensamma utrymmen, tak och fasad',
            'Besiktning vid stambyte och andra entreprenader, från förbesiktning till slutbesiktning',
            'Garantibesiktning inför att garantitiden går ut',
            'Skriftligt protokoll med foton, bedömning och prioriterade åtgärder',
        ],
        'excludes' => [
            'Juridisk rådgivning om ansvarsfördelning mellan förening och medlem eller om stadgetolkning',
            'Ingrepp i konstruktionen, till exempel provhål, utan medgivande från ägaren eller föreningen',
            'Besiktning av delar som inte går att komma åt eller som är dolda bakom ytskikt',
            'Åtgärder eller sanering – vi besiktigar och dokumenterar, vi utför inte arbetena',
        ],
        'weNeed'   => [
            'Adress och tillträde till lägenheten eller fastigheten',
            'Köpare: kontaktuppgift till mäklaren, och om möjligt årsredovisning, stadgar och uppgifter om gjorda renoveringar',
            'Styrelse: befintlig underhållsplan, ritningar, tidigare protokoll och kontaktuppgift till fastighetsansvarig',
            'Entreprenad: kontrakt, förfrågningsunderlag och tidplan',
            'Din tidsram – visningar och budgivning går ofta fort',
        ],
        'sections' => [
            [
                'h2' => 'Besiktningsman för bostadsrätt – två målgrupper, två behov',
                'body' => [
                    'Den här sidan vänder sig till två olika läsare. Dels du som är på väg att köpa en bostadsrätt eller redan är medlem och vill veta skicket på din lägenhet. Dels du som sitter i styrelsen och ansvarar för föreningens fastighet, renoveringar och underhåll.',
                    'Besiktningen följer samma princip i båda fallen: en oberoende genomgång på plats, ett skriftligt protokoll med foton och en bedömning av vad som är akut och vad som kan vänta. Hoppa till det avsnitt som gäller dig.',
                ],
            ],
            [
                'h2' => 'Köper du bostadsrätt? Besikta lägenheten innan köp',
                'body' => [
                    'Många tänker att besiktning hör till husköp, men även en lägenhet kan dölja brister. Vid en besiktning av bostadsrätt inför köp går besiktningsmannen igenom lägenhetens skick: golv, väggar och tak, fönster och dörrar, ventilation, kök och synliga installationer. Särskild uppmärksamhet ägnas åt badrummet, eftersom fuktskador i våtrum är bland de dyraste felen att åtgärda.',
                    'Du kan också låta besikta lägenheten om du redan är medlem och inför en försäljning, eller om du misstänker en skada. Resultatet får du som ett skriftligt protokoll med foton. Det ger dig ett underlag inför budgivningen, och du ser om det finns behov av en fördjupad utredning, till exempel en badrumsbesiktning eller fuktutredning.',
                    'Tänk på att du köper en andel i en förening och inte bara en lägenhet. Föreningens ekonomi, underhållsplan och planerade renoveringar spelar stor roll för din boendekostnad framöver, men dem bedömer vi inte i en lägenhetsbesiktning. Gå igenom årsredovisning och stadgar, och fråga mäklaren eller en jurist om det är något du undrar över.',
                ],
            ],
            [
                'h2' => 'Badrum i bostadsrätt – renovering, kontroll och ansvar',
                'body' => [
                    'Badrumsrenoveringar är vanliga i bostadsrättsföreningar, och de görs ofta av medlemmen själv. Gränsen mellan vad medlemmen och föreningen ansvarar för styrs av bostadsrättslagen och föreningens stadgar, och den kan skilja sig mellan föreningar. Det är därför klokt att ta reda på vad som gäller hos just er innan en skada uppstår.',
                    'En badrumsbesiktning efter renovering kontrollerar bland annat tätskikt, golvbrunn, fall mot brunn och fukt i angränsande konstruktioner. Som köpare kan du använda besiktningen för att få bedömt hur badrummet ser ut i dag. Som medlem kan du låta besikta arbetet efter en renovering och samla dokumentation som du kan visa föreningen eller en framtida köpare.',
                ],
            ],
            [
                'h2' => 'För styrelser: statusbesiktning av föreningens fastighet',
                'body' => [
                    'Styrelsen behöver en tydlig bild av fastighetens skick för att kunna planera underhåll och ekonomi. En statusbesiktning går igenom tak, fasad, fönster, gemensamma utrymmen, källare, vind och synliga delar av installationer och stammar. Resultatet blir ett protokoll med foton och en prioriterad åtgärdslista som styrelsen kan arbeta vidare med.',
                    'Statusbesiktningen är också grunden för en underhållsplan. Har ni ingen plan, eller en som börjar bli gammal, kan besiktningen ligga till grund för en ny eller uppdaterad. Läs mer på sidan om underhållsplan för BRF.',
                ],
            ],
            [
                'h2' => 'Stambyte, entreprenader och garantibesiktning i BRF',
                'body' => [
                    'Större projekt som stambyte, fasadrenovering eller takbyte bör följas av en oberoende besiktningsman som företräder föreningen. En förbesiktning inför arbetet, slutbesiktning när det är klart och eventuell efterbesiktning ger styrelsen ett dokumenterat underlag för att godkänna eller reklamera arbetet. Vilka regler som gäller beror på entreprenadkontraktet, ofta ett av de standardavtal som används i branschen.',
                    'När garantitiden på en entreprenad närmar sig sitt slut är det dags för en garantibesiktning. Då går besiktningsmannen igenom arbetet för att hitta fel som uppkommit under garantitiden, så att styrelsen kan ställa krav innan tiden löper ut. Kontrollera datum och villkor i kontraktet, och boka i god tid.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Oberoende bedömning',
                'text' => 'Vi arbetar för dig som beställare – köpare, medlem eller styrelse – och inte för mäklare, säljare eller entreprenör.',
            ],
            [
                'title' => 'Skriftligt protokoll med foton',
                'text' => 'Varje anmärkning beskrivs, dokumenteras och prioriteras, så att du eller styrelsen kan fatta beslut utifrån ett tydligt underlag.',
            ],
            [
                'title' => 'Offert med fast pris',
                'text' => 'Du vet kostnaden innan uppdraget bokas. Riktpriser finns på prissidan, slutligt pris anges i offerten.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Behöver man besikta en bostadsrätt innan man köper?',
                'a' => 'Det är inget krav, men en besiktning av lägenheten inför köp ger dig ett oberoende underlag om skick och eventuella fuktrisker, särskilt i badrummet. Besiktningen bedömer lägenheten, inte föreningens ekonomi.',
            ],
            [
                'q' => 'Kan ni göra en överlåtelsebesiktning av bostadsrätt?',
                'a' => 'Ja, en besiktning av lägenhet vid köp eller försäljning kallas ofta överlåtelsebesiktning. Du får ett skriftligt protokoll som du kan använda i budgivning och förhandling.',
            ],
            [
                'q' => 'Vem ansvarar för fuktskador i bostadsrätten – jag eller föreningen?',
                'a' => 'Det beror på vad som skadats och vad föreningens stadgar säger, tillsammans med bostadsrättslagen. Vi kan utreda orsaken och dokumentera skadan, men ansvarsfrågan bör du stämma av med styrelsen eller en jurist.',
            ],
            [
                'q' => 'Vad kostar besiktning för en bostadsrättsförening?',
                'a' => 'Priset beror på fastighetens storlek, antal byggnader och vad uppdraget omfattar. Du får en offert med fast pris innan du bokar. Riktpriser och en kalkylator finns på prissidan.',
            ],
            [
                'q' => 'Vad är skillnaden mellan statusbesiktning och underhållsplan?',
                'a' => 'Statusbesiktningen kartlägger fastighetens skick här och nu. En underhållsplan bygger vidare på den och beskriver vilka åtgärder som behövs över tid och ungefär vad de kostar.',
            ],
            [
                'q' => 'Kan ni besikta stambyte och garantibesiktning för vår förening?',
                'a' => 'Ja. Vi kan följa stambyte och andra entreprenader med förbesiktning, slutbesiktning och efterbesiktning, och göra garantibesiktning innan garantitiden går ut. Skicka kontraktet så återkommer vi med en offert.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert för föreningen'],
        'related'   => ['underhallsplan', 'garantibesiktning', 'badrumsbesiktning'],
        'guides'    => ['fuktskada-badrum', 'mogel-i-hus'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/kalkylator/', 'label' => 'Räkna ut ett ungefärligt pris', 'text' => 'Välj tjänst, storlek och tillval i priskalkylatorn och få ett prisintervall på en minut.'],
        ],
    ],

    'underhallsplan' => [
        'path'            => '/brf/underhallsplan/',
        'keyword'         => 'underhållsplan brf',
        'title'           => 'Underhållsplan för BRF',
        'navLabel'        => 'Underhållsplan för BRF',
        'cluster'         => 'bygg',
        'parent'          => 'brf',
        'seoTitle'        => 'Underhållsplan BRF – krav och pris',
        'metaDescription' => 'Underhållsplan för bostadsrättsförening: statusbesiktning av fastigheten, planerat underhåll per år och kostnader. Offert för din BRF.',
        'hero' => [
            'eyebrow' => 'Bostadsrättsföreningar',
            'h1'      => 'Underhållsplan för BRF',
            'h2'      => 'Underlag för avgifter, fonder och styrelsens beslut.',
            'lead'    => 'En underhållsplan visar vad som behöver göras i fastigheten, när och vad det kostar. Den bygger på en statusbesiktning på plats.',
        ],
        'includes' => [
            'Statusbesiktning av fastigheten på plats: tak, fasad, fönster, gemensamma utrymmen, källare, vind och synliga installationer',
            'Genomgång av befintlig underhållsplan, årsredovisning, ritningar och tidigare utredningar',
            'Plan för underhåll år för år, med åtgärder sorterade efter prioritet',
            'Kostnadsuppskattning per åtgärd',
            'Genomgång av planen med styrelsen',
        ],
        'excludes' => [
            'Juridisk rådgivning om stadgar, bostadsrättslagen eller föreningens avsättningar',
            'Ekonomisk rådgivning, avgiftsberäkning och budget – planen är ett underlag för styrelsen',
            'Ingrepp i konstruktionen och provtagning utan särskild överenskommelse',
            'Besiktning av delar som inte går att komma åt eller som är dolda bakom ytskikt',
            'Nedladdningsbar mall – vi erbjuder inte det i dagsläget',
        ],
        'weNeed'   => [
            'Fastighetens adress, byggår och antal byggnader och lägenheter',
            'Befintlig underhållsplan och senaste årsredovisningen',
            'Ritningar, tidigare besiktningar, utredningar och uppgifter om genomförda åtgärder',
            'Kontaktuppgift till styrelsen eller fastighetsansvarig och tillträde till gemensamma utrymmen',
        ],
        'sections' => [
            [
                'h2' => 'Underhållsplan för BRF – vad är det och vad används den till?',
                'body' => [
                    'En underhållsplan för en bostadsrättsförening beskriver vilka underhållsåtgärder fastigheten behöver under kommande år, ungefär när de bör göras och vad de beräknas kosta. Den används av styrelsen som underlag för att planera renoveringar, bedöma behovet av avsättningar och tänka igenom framtida avgifter.',
                    'Planen blir också ett viktigt dokument för medlemmar och för den som överväger att köpa en lägenhet i föreningen, eftersom den visar vad som väntar i fastigheten. Vi bygger planen på en statusbesiktning på plats, så att den utgår från fastighetens verkliga skick och inte bara från byggår och schabloner.',
                    'Resultatet är ett skriftligt underlag med foton från besiktningen, en prioriterad åtgärdslista och en plan som du kan presentera för medlemmarna på stämman eller använda i dialogen med föreningens ekonomiska förvaltare.',
                ],
            ],
            [
                'h2' => 'Krav på underhållsplan – vad säger lagen och stadgarna?',
                'body' => [
                    'Frågan om krav på underhållsplan för brf dyker ofta upp. Allmänt kan sägas att bostadsrättslagen ställer krav på att en förening sköter sin fastighet och sin ekonomi, och att underhållsplanering hör till det som styrelsen förväntas ha koll på. Hur långtgående kraven är, och om de gäller själva planen eller bara det underliggande ansvaret, ska du inte avgöra utifrån en webbtext.',
                    'Många föreningars stadgar innehåller dessutom egna regler om underhåll, om hur planen ska följas upp och om avsättning till en fond för yttre underhåll. Läs därför era egna stadgar, och rådgör med en jurist eller föreningens ekonomiska förvaltare om ni är osäkra på vad som gäller för er. Vi besiktigar och tar fram underlaget men ger inte juridisk rådgivning.',
                ],
            ],
            [
                'h2' => 'Innehåll och exempel på upplägg – mall för underhållsplan',
                'body' => [
                    'Vi erbjuder ingen nedladdningsbar mall för underhållsplan i dagsläget. I stället kan du se vad en plan brukar innehålla, så att du vet vad du bör begära eller kontrollera i en befintlig plan.',
                    'En underhållsplan består vanligen av en beskrivning av fastigheten med byggår, antal byggnader och lägenheter, och en genomgång av byggnadsdelarna: tak, fasad, fönster och dörrar, balkonger, stammar och avlopp, ventilation, el, hissar, tvättstuga, garage och utemiljö. För varje byggnadsdel anges skick, förväntad återstående livslängd, föreslagen åtgärd och tidpunkt.',
                    'Exempel på upplägg: åtgärderna sorteras år för år, ofta över en period på tio till femtio år. Varje rad har ett årtal, en åtgärd, en uppskattad kostnad och en prioritet. De närmaste åren planeras mer detaljerat, och senare år mer översiktligt. Längst bak brukar en sammanställning visa kostnaderna per år, så att styrelsen kan jämföra dem med föreningens ekonomi.',
                    'En plan är inte statisk. Den bör följas upp och uppdateras när åtgärder genomförts, när priser förändrats eller när en ny besiktning visar något oväntat.',
                ],
            ],
            [
                'h2' => 'Underhållsplan för liten brf och kostnad',
                'body' => [
                    'Underhållsplan för liten brf kräver inte mindre noggrannhet, men upplägget kan vara enklare. En förening med en eller ett par byggnader behöver ofta en kortare plan med färre byggnadsdelar att följa upp. Samtidigt blir en enskild stor åtgärd, till exempel ett takbyte, proportionellt tyngre för en liten förening, vilket gör det extra viktigt att se den komma i god tid.',
                    'Kostnaden för att ta fram en underhållsplan beror på fastighetens storlek, antal byggnader, skick, hur mycket underlag som redan finns och hur detaljerad planen ska vara. Därför anger vi inget fast belopp här. Beskriv föreningen i offertformuläret så återkommer vi med en offert och ett fast pris innan du bokar. Riktpriser för våra övriga tjänster finns på prissidan.',
                ],
            ],
        ],
        'benefits' => [
            [
                'title' => 'Utgår från fastighetens verkliga skick',
                'text' => 'Planen bygger på en statusbesiktning på plats, inte bara på byggår och schabloner.',
            ],
            [
                'title' => 'Underlag för styrelsens beslut',
                'text' => 'Åtgärder, tidpunkter och kostnadsuppskattningar samlas i ett dokument som du kan arbeta vidare med.',
            ],
            [
                'title' => 'Offert med fast pris',
                'text' => 'Du vet kostnaden innan uppdraget bokas, och prissidan visar riktpriser för våra tjänster.',
            ],
        ],
        'faq' => [
            [
                'q' => 'Måste en bostadsrättsförening ha en underhållsplan?',
                'a' => 'Styrelsen förväntas planera underhållet av fastigheten, och många föreningars stadgar innehåller regler om det. Exakt vad som krävs bör du kontrollera i föreningens stadgar och med en jurist eller ekonomisk förvaltare.',
            ],
            [
                'q' => 'Vad ska en underhållsplan för brf innehålla?',
                'a' => 'Vanligen en beskrivning av fastigheten, skick och förväntad livslängd per byggnadsdel, föreslagna åtgärder med årtal, kostnadsuppskattning per åtgärd och en sammanställning av kostnaderna över tid.',
            ],
            [
                'q' => 'Finns det en mall för underhållsplan som jag kan ladda ner?',
                'a' => 'Inte hos oss i dagsläget. På den här sidan beskriver vi i stället vad en plan brukar innehålla och hur den kan läggas upp, så att du kan granska en befintlig plan eller veta vad du ska begära.',
            ],
            [
                'q' => 'Vad kostar en underhållsplan för brf?',
                'a' => 'Priset beror på fastighetens storlek, antal byggnader och hur detaljerad planen ska vara. Du får en offert med fast pris innan du bokar. Se prissidan för riktpriser på våra tjänster.',
            ],
            [
                'q' => 'Hur ser en underhållsplan för en liten brf ut?',
                'a' => 'Den följer samma princip som i en större förening, men omfattar oftast färre byggnader och byggnadsdelar och kan därför vara kortare. Beskriv fastigheten i offertformuläret så anpassar vi upplägget.',
            ],
            [
                'q' => 'Hur ofta bör underhållsplanen uppdateras?',
                'a' => 'Planen bör följas upp löpande och uppdateras när större åtgärder genomförts eller när en ny besiktning visar något nytt. Hur ofta ni vill göra en genomgång kan vi diskutera i samband med uppdraget.',
            ],
        ],
        'cta'       => ['label' => 'Begär offert på underhållsplan'],
        'related'   => ['brf', 'statusbesiktning', 'entreprenadbesiktning'],
        'guides'    => ['fuktskada-kallare'],
        'articles'  => [],
        'toolLinks' => [
            ['path' => '/priser/', 'label' => 'Se priser på besiktning', 'text' => 'Riktpriser för alla tjänster. Uppdrag för föreningar och entreprenader får offert efter omfattning.'],
        ],
    ],
];
