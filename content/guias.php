<?php
/** Practical Swedish guides. Last-reviewed means source and editorial review, not a named expert certification. */
declare(strict_types=1);
return array_merge(require __DIR__ . '/legacy-guides.php', [
    'infor-husbesiktning' => [
        'path' => '/guider/infor-husbesiktning/',
        'title' => 'Checklista inför husbesiktning',
        'navLabel' => 'Checklista inför husbesiktning',
        'seoTitle' => 'Checklista inför husbesiktning',
        'metaDescription' => 'Förbered en husbesiktning med rätt handlingar, tillträde och frågor. Checklista för villa, radhus och fritidshus inför besiktning och genomgång.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Checklista inför husbesiktning',
            'lead' => 'En bra förberedelse gör det lättare att få ett användbart protokoll och förstå vad som behöver undersökas vidare.',
        ],
        'intro' => [
            'Börja med syftet: ska huset säljas, köpas eller undersökas inför underhåll? En överlåtelsebesiktning har ett annat sammanhang än en statusbesiktning. Berätta vem som beställer och vad resultatet ska användas till.',
            'Listan hjälper dig att samla underlag. Den är inte en teknisk instruktion att själv kontrollera riskfyllda eller svåråtkomliga konstruktioner.',
        ],
        'steps' => [
            [
                'title' => 'Bestäm omfattningen innan du bokar',
                'body' => [
                    'Be om ett skriftligt uppdrag med byggnader, utrymmen och tillägg. Fråga vilka installationer som ligger utanför och hur otillgängliga delar redovisas. Bestäm hur protokollet och genomgången levereras.',
                ],
            ],
            [
                'title' => 'Samla husets handlingar',
                'body' => [
                    'Lägg fram ritningar, byggår, uppgifter om renoveringar, säljarens frågelista och tidigare protokoll. Markera dokument du saknar. Äldre uppgifter är användbara om det framgår vad de gäller och när de togs fram.',
                ],
            ],
            [
                'title' => 'Ordna tillträde',
                'body' => [
                    'Stäm av vilka utrymmen som ska vara tillgängliga och vem som öppnar. Flytta bara sådant som kan flyttas säkert. Besiktningsmannen behöver själv bedöma åtkomst; gå inte in i riskfyllda utrymmen för att förbereda kontrollen.',
                ],
            ],
            [
                'title' => 'Skriv en konkret frågelista',
                'body' => [
                    'Anteckna plats och observation: exempelvis en fläck i ett visst rum eller återkommande lukt vid en viss tid. Fråga vad varje risknotering betyder och om den kräver en separat undersökning. Undvik att utgå från en färdig diagnos.',
                ],
            ],
            [
                'title' => 'Planera tiden efter besiktningen',
                'body' => [
                    'Avsätt tid för protokollet och eventuella följdfrågor. Vid köp behöver besiktningens tidpunkt och eventuella avtalsvillkor hanteras med mäklaren. En bokad kontroll innebär inte automatiskt att alla tidsfrister i affären är lösta.',
                ],
            ],
            [
                'title' => 'Läs även begränsningarna',
                'body' => [
                    'Kontrollera vad som faktiskt undersöktes och vad som inte kunde undersökas. Skilj mellan iakttagelser, riskbedömningar och rekommenderade fortsatta undersökningar. Beställ inte en åtgärd utan att först förstå vilken fråga den ska lösa.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Behöver huset vara helt tömt?',
                'a' => 'Inte vanligtvis, men överenskomna ytor och utrymmen behöver kunna nås. Stäm av tillträdet med utföraren.',
            ],
            [
                'q' => 'Kan jag använda säljarens protokoll?',
                'a' => 'Läs uppdragsvillkoren och kontrollera vem protokollet gäller för. En köpargenomgång eller ett eget uppdrag kan behöva diskuteras.',
            ],
        ],
        'relatedService' => 'overlatelsebesiktning',
        'toolLink' => null,
        'related' => [
            'jamfora-besiktningsoffert',
            'tecken-pa-fukt',
            'undersokningsplikt',
        ],
        'example' => false,
    ],
    'underhallsplan-checklista' => [
        'path' => '/guider/underhallsplan-checklista/',
        'title' => 'Underhållsplan BRF: checklista och mall',
        'navLabel' => 'Underhållsplan BRF: checklista och mall',
        'seoTitle' => 'Underhållsplan BRF: checklista och mall',
        'metaDescription' => 'Checklista och redigerbar mall för underhållsplan i BRF. Samla byggnadsdelar, åtgärder, årtal och kostnadsunderlag inför föreningens planering.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Underhållsplan BRF: checklista och mall',
            'lead' => 'Bygg en struktur som styrelsen kan uppdatera. Mallen ger kolumnerna; föreningens byggnad och skick måste fortfarande bedömas.',
        ],
        'intro' => [
            'En underhållsplan ska hjälpa föreningen att fatta och följa upp beslut. Generella livslängder eller exempelbelopp ersätter inte information om er fastighet.',
            'CSV-mallen kan öppnas i Excel eller annan kalkylprogramvara. Exempelraderna innehåller inga antagna årtal eller priser. Kopiera, byt ut eller ta bort dem efter föreningens behov.',
        ],
        'steps' => [
            [
                'title' => 'Inventera byggnadsdelarna',
                'body' => [
                    'Lista byggnad, del och plats: tak, fasad, fönster, gemensamma utrymmen och relevanta installationer. Dela upp poster som har olika skick eller åtgärdstid. Ange mängd och enhet där underlaget finns.',
                ],
            ],
            [
                'title' => 'Samla historik och skick',
                'body' => [
                    'Dokumentera byggår, genomförda åtgärder, tidigare utlåtanden och datum för bedömningen. Markera osäkra uppgifter. En post utan tillförlitligt skickunderlag kan behöva en riktad besiktning innan år och åtgärd bestäms.',
                ],
            ],
            [
                'title' => 'Beskriv åtgärd och prioritet',
                'body' => [
                    'Skriv vad som behöver göras, varför och om frågan behöver utredas först. Skilj en förebyggande åtgärd från ett redan identifierat problem. Koppla varje post till ett underlag som nästa styrelse kan återfinna.',
                ],
            ],
            [
                'title' => 'Lägg till år och kostnadsunderlag',
                'body' => [
                    'Ange planerat år eller intervall och vad kostnadsbedömningen omfattar. Notera prisdatum och om moms ingår. En bedömning i underhållsplanen är inte en bindande offert från entreprenören.',
                ],
            ],
            [
                'title' => 'Samordna åtgärder innan upphandling',
                'body' => [
                    'Granska om arbeten påverkar varandra och om åtkomst eller etablering kan samordnas. Samordning ska utredas utifrån fastigheten; den innebär inte att alla poster alltid ska utföras samtidigt.',
                ],
            ],
            [
                'title' => 'Gör planen till ett levande underlag',
                'body' => [
                    'Bestäm ansvarig, datum för nästa genomgång och var originalfilen finns. Efter utförd åtgärd registrerar ni datum och nytt underlag. Använd planen i budgetarbetet och uppdatera den när fastighetens förutsättningar ändras.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Är mallen en färdig underhållsplan?',
                'a' => 'Nej. Den ger en struktur. Bedömning av skick, omfattning och tid behöver anpassas till fastigheten.',
            ],
            [
                'q' => 'Hur undviker vi att planen blir inaktuell?',
                'a' => 'Bestäm återkommande genomgång, ansvarig och var aktuell fil sparas. Uppdatera efter större arbeten och dokumentera nya beslut.',
            ],
        ],
        'relatedService' => 'underhallsplan',
        'toolLink' => null,
        'related' => [
            'jamfora-besiktningsoffert',
            'infor-slutbesiktning',
        ],
        'example' => false,
        'download' => [
            'path' => '/assets/downloads/underhallsplan-brf-mall.csv',
            'label' => 'Ladda ner underhållsplanmall (CSV)',
            'text' => 'Redigerbar struktur utan påhittade kostnader. Öppna i Excel och välj semikolon som avgränsare om det behövs.',
        ],
    ],
    'tecken-pa-fukt' => [
        'path' => '/guider/tecken-pa-fukt/',
        'title' => 'Tecken på fukt i hus: vad gör du?',
        'navLabel' => 'Tecken på fukt i hus: vad gör du?',
        'seoTitle' => 'Tecken på fukt i hus: vad gör du?',
        'metaDescription' => 'Se hur du dokumenterar lukt, fläckar och andra tecken på fukt i hus. Förstå när fuktmätning eller fuktutredning behövs och vilka uppgifter du ska samla.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Tecken på fukt i hus: vad gör du?',
            'lead' => 'Dokumentera vad du faktiskt ser och när det händer. Observationer hjälper en utredning, men fastställer inte själva orsaken.',
        ],
        'intro' => [
            'Missfärgning, lukt eller förändrade ytor kan vara skäl att undersöka byggnaden. Samma observation kan ha flera orsaker. Ett foto eller en ytlig kontroll räcker inte för att avgöra hela omfattningen.',
            'Guiden gäller byggnadens tillstånd. Den bedömer inte människors hälsa, identifierar mögelarter eller anger säkra nivåer för olika material.',
        ],
        'steps' => [
            [
                'title' => 'Hantera ett pågående läckage först',
                'body' => [
                    'Om vatten fortsätter att komma in behöver skadan begränsas och berörd fastighetsägare eller försäkringsbolag kontaktas. Dokumentera utan att utsätta dig för risk. Vänta inte på en besiktningsoffert för att hantera ett aktivt läckage.',
                ],
            ],
            [
                'title' => 'Anteckna plats och tid',
                'body' => [
                    'Skriv rum, byggnadsdel, datum och om förändringen är ny eller återkommande. Notera om den märks efter regn, vid viss användning eller under en viss årstid. Beskriv observationen utan att slå fast orsaken.',
                ],
            ],
            [
                'title' => 'Fotografera från en säker plats',
                'body' => [
                    'Ta en översiktsbild och en närbild som går att koppla till samma plats. Spara datum. Öppna inte en konstruktion eller gå in i riskfyllda utrymmen för att få bättre bilder.',
                ],
            ],
            [
                'title' => 'Samla tidigare åtgärder',
                'body' => [
                    'Lista kända läckage, renoveringar, ventilation och eventuell tidigare mätning. Ange vilken metod som använts om du känner till den. Ett fristående värde utan material och metod är svårt att tolka.',
                ],
            ],
            [
                'title' => 'Välj frågeställning för undersökningen',
                'body' => [
                    'Vill du kontrollera fukttillstånd i ett visst material kan fuktmätning vara rätt uppdrag. Vill du förstå varför ett problem uppstår eller hur stort området är kan en fuktutredning behövas.',
                ],
            ],
            [
                'title' => 'Be om tydligt dokumenterade nästa steg',
                'body' => [
                    'Rapporten bör skilja mellan observation, mätning, tolkning och kvarstående osäkerhet. Fråga vilka vidare undersökningar som rekommenderas och vad de ska besvara innan åtgärder beställs.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Betyder lukt alltid att det finns mögel?',
                'a' => 'Nej. Lukt är en observation och behöver bedömas i sitt sammanhang. Orsak och omfattning kan kräva en utredning.',
            ],
            [
                'q' => 'Visar en fuktindikator om ett badrum är godkänt?',
                'a' => 'Nej. En indikering godkänner inte hela konstruktionen eller ett dolt tätskikt.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink' => null,
        'related' => [
            'badrumsrenovering-dokument',
            'infor-husbesiktning',
            'fukt-i-krypgrund',
        ],
        'example' => false,
    ],
    'infor-slutbesiktning' => [
        'path' => '/guider/infor-slutbesiktning/',
        'title' => 'Checklista inför slutbesiktning',
        'navLabel' => 'Checklista inför slutbesiktning',
        'seoTitle' => 'Checklista inför slutbesiktning',
        'metaDescription' => 'Förbered slutbesiktningen av hus, lägenhet eller BRF-projekt. Samla avtal, egenkontroller och frågor och planera dokumentation och uppföljning.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Checklista inför slutbesiktning',
            'lead' => 'Samla rätt underlag och gör överlämningen lättare att följa upp. Utgå från ditt projekts avtal och färdigställande.',
        ],
        'intro' => [
            'En slutbesiktning behöver en tydlig omfattning och relevanta entreprenadhandlingar. Slutbesiktning av avtalade arbeten och kommunens slutbesked är separata frågor.',
            'Checklistan kan användas av en privat beställare eller BRF-styrelse. Avtalsvillkor, roller och tidpunkter behöver stämmas av för just ditt projekt.',
        ],
        'steps' => [
            [
                'title' => 'Bekräfta vad som ska besiktigas',
                'body' => [
                    'Lista byggnader, rum och arbeten som omfattas. Ange vad som är färdigt och om någon del fortfarande saknar tillträde. Stäm av uppdrag och tidpunkt med utföraren och berörda parter.',
                ],
            ],
            [
                'title' => 'Samla avtal och ändringar',
                'body' => [
                    'Ha kontrakt, ritningar, tekniska beskrivningar och godkända ändringsbeställningar tillgängliga. Undvik att bedöma en ändring mot ett äldre underlag som inte längre gäller.',
                ],
            ],
            [
                'title' => 'Ordna dokumentationen från arbetet',
                'body' => [
                    'Samla relevanta egenkontroller, produktunderlag, driftinstruktioner och våtrumsdokument. Markera det som ännu saknas och vem som ska lämna in det.',
                ],
            ],
            [
                'title' => 'Skriv egna observationer',
                'body' => [
                    'Beskriv plats och vad du har sett. En tydlig lista hjälper genomgången. Låt besiktningsmannen skilja dina observationer från sin bedömning och från frågor som inte ingår i uppdraget.',
                ],
            ],
            [
                'title' => 'Planera utlåtande och åtgärdsdialog',
                'body' => [
                    'Fråga hur protokollet levereras och hur punkterna ska identifieras. Dokumentera kommunikationen efter besiktningen. Åtgärdstider och ansvar ska hanteras enligt det avtal som gäller.',
                ],
            ],
            [
                'title' => 'Avtala om uppföljningen',
                'body' => [
                    'Bestäm om en efterbesiktning behöver beställas och vad den ska omfatta. Spara originalutlåtande, underlag och senare återkoppling tillsammans så att historiken blir begriplig.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Behöver alla parter delta?',
                'a' => 'Stäm av vilka som bör delta enligt uppdrag och avtal. Ordna tillträde och en tydlig kontaktperson.',
            ],
            [
                'q' => 'Kan checklistan användas för ett badrum?',
                'a' => 'Ja, anpassa underlagen till våtrumsarbetet och den avtalade omfattningen.',
            ],
        ],
        'relatedService' => 'slutbesiktning',
        'toolLink' => null,
        'related' => [
            'badrumsrenovering-dokument',
            'reklamera-renovering',
        ],
        'example' => false,
    ],
    'badrumsrenovering-dokument' => [
        'path' => '/guider/badrumsrenovering-dokument/',
        'title' => 'Dokument efter badrumsrenovering',
        'navLabel' => 'Dokument efter badrumsrenovering',
        'seoTitle' => 'Dokument efter badrumsrenovering',
        'metaDescription' => 'Samla dokument efter badrumsrenovering: avtal, foton, egenkontroller och våtrumsdokument. Förbered besiktning och följ upp saknat underlag.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Dokument efter badrumsrenovering',
            'lead' => 'Ordna handlingarna medan det fortfarande är lätt att få svar från entreprenören. Tydligt underlag hjälper vid besiktning och senare frågor.',
        ],
        'intro' => [
            'Vilka dokument som ska lämnas beror på arbetet, systemet och vad som avtalats. Samla både beställningen och handlingarna från genomförandet.',
            'Ett kvalitetsdokument och ett besiktningsutlåtande är olika dokument. Det ena ska inte presenteras som en automatisk ersättning för det andra.',
        ],
        'steps' => [
            [
                'title' => 'Spara beställning och ändringar',
                'body' => [
                    'Samla offert, avtal, materialval och skriftligt godkända ändringar. Ange vilket badrum handlingarna gäller och när arbetet utfördes.',
                ],
            ],
            [
                'title' => 'Begär dokument från utföraren',
                'body' => [
                    'För keramiska våtrum beskriver BKR att kvalitetsdokument utfärdas av entreprenören. Saknar du dokumentet bör du först be den entreprenör som utförde arbetet om en kopia. Andra arbeten och system kan ha andra dokument.',
                ],
            ],
            [
                'title' => 'Ordna foton och egenkontroller',
                'body' => [
                    'Koppla bilder till plats och arbetsmoment där informationen finns. Spara relevanta egenkontroller och materialunderlag. Ett foto bevisar inte i sig att ett helt system är korrekt utfört.',
                ],
            ],
            [
                'title' => 'Notera avvikelser och saknade uppgifter',
                'body' => [
                    'Skriv vilka handlingar som saknas och vilka frågor du har. Dokumentera vem du kontaktat och svaret. Undvik att tolka ett saknat dokument som en fullständig teknisk diagnos.',
                ],
            ],
            [
                'title' => 'Beställ en kontroll med tydligt syfte',
                'body' => [
                    'Ska färdigställandet bedömas mot avtalet kan slutbesiktning vara rätt uppdrag. Gäller frågan synliga våtrumsdetaljer eller en misstänkt skada behöver omfattning och metod anpassas.',
                ],
            ],
            [
                'title' => 'Spara ett sammanhållet underlag',
                'body' => [
                    'Förvara beställning, utförandedokument och besiktningsutlåtande tillsammans. Vid en bostadsförsäljning blir det lättare att förklara vad som gjorts och vilka uppgifter som faktiskt finns.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Kan BKR ge mig entreprenörens dokument?',
                'a' => 'BKR hänvisar i första hand till den utförande entreprenören. Se deras aktuella vägledning om kvalitetsdokument.',
            ],
            [
                'q' => 'Gör besiktningen att badrummet blir certifierat?',
                'a' => 'Nej. Bestäm vilken kontroll som ska göras och vilket utlåtande du får. Den ersätter inte automatiskt dokument från utföraren.',
            ],
        ],
        'relatedService' => 'badrumsbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-slutbesiktning',
            'tecken-pa-fukt',
        ],
        'example' => false,
        'sources' => [
            [
                'label' => 'BKR: kvalitetsdokument',
                'url' => 'https://www.bkr.se/regler/kvalitetsdokument',
            ],
        ],
    ],
    'reklamera-renovering' => [
        'path' => '/guider/reklamera-renovering/',
        'title' => 'Fel i renovering: dokumentera och reklamera',
        'navLabel' => 'Fel i renovering: dokumentera och reklamera',
        'seoTitle' => 'Fel i renovering: så reklamerar du',
        'metaDescription' => 'Fel efter renovering? Dokumentera observationer, samla avtal och kontakta hantverkaren. Läs när ett besiktningsutlåtande kan vara ett underlag.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Fel i renovering: dokumentera och reklamera',
            'lead' => 'Gör händelseförloppet tydligt innan fler arbeten utförs. Skilj mellan din observation, en teknisk bedömning och din reklamation.',
        ],
        'intro' => [
            'Konsumentverket rekommenderar att du kontaktar företaget så snart som möjligt när du upptäcker ett fel och beskriver det tydligt, gärna skriftligt. Guiden ersätter inte en bedömning av ditt avtal eller ärende.',
            'Ett besiktningsutlåtande kan ge tekniskt underlag. Det avgör inte automatiskt en tvist eller vilken ersättning någon har rätt till.',
        ],
        'steps' => [
            [
                'title' => 'Samla avtalet',
                'body' => [
                    'Leta fram beställning, omfattning, ändringar, fakturor och relevant kommunikation. Skriv en tidslinje med utförande, överlämning och när du upptäckte problemet.',
                ],
            ],
            [
                'title' => 'Beskriv vad du faktiskt har sett',
                'body' => [
                    'Ange plats och observation. Ta daterade bilder från en säker position. Undvik att börja med en slutsats om ansvar om orsaken ännu är oklar.',
                ],
            ],
            [
                'title' => 'Kontakta entreprenören',
                'body' => [
                    'Beskriv felet tydligt och spara din skriftliga kommunikation. Följ Konsumentverkets aktuella vägledning för konsumentärenden. BRF och andra juridiska personer behöver utgå från sitt avtal och andra förutsättningar.',
                ],
            ],
            [
                'title' => 'Avgränsa en teknisk undersökning',
                'body' => [
                    'Fråga vad som behöver bedömas: utförande mot avtal, skadeorsak eller omfattning. Skicka de handlingar som utföraren behöver. För en dold konstruktion kan en särskild undersökning behövas.',
                ],
            ],
            [
                'title' => 'Spara utlåtande och återkoppling',
                'body' => [
                    'Ett tydligt utlåtande beskriver underlag, observationer, metod och begränsningar. Bevara också entreprenörens svar och senare åtgärder så att historiken går att följa.',
                ],
            ],
            [
                'title' => 'Sök rätt vägledning om ni inte kommer överens',
                'body' => [
                    'Konsumentverket ger generell information om rättigheter och vägar vidare för konsumenter. Vid en tvist behöver avtal, omständigheter och tillämpliga regler bedömas; en teknisk besiktning är en del av underlaget.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Kan besiktningsmannen avgöra tvisten?',
                'a' => 'En besiktning kan beskriva tekniska förhållanden. Den ersätter inte prövning av avtalsrättsligt ansvar eller en tvist.',
            ],
            [
                'q' => 'Gäller konsumentvägledningen även en BRF?',
                'a' => 'En BRF är en juridisk person och behöver utgå från sitt avtal. Konsumentinformation för privatpersoner kan inte användas som generell regel för föreningen.',
            ],
        ],
        'relatedService' => 'entreprenadbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-slutbesiktning',
            'badrumsrenovering-dokument',
        ],
        'example' => false,
        'sources' => [
            [
                'label' => 'Konsumentverket: reklamera hantverkare',
                'url' => 'https://www.konsumentverket.se/varor-och-tjanster/reklamera-hantverkare/',
            ],
        ],
    ],
    'jamfora-besiktningsoffert' => [
        'path' => '/guider/jamfora-besiktningsoffert/',
        'title' => 'Jämför offert på besiktning',
        'navLabel' => 'Jämför offert på besiktning',
        'seoTitle' => 'Jämför offert på besiktning',
        'metaDescription' => 'Jämför besiktningsofferter med en konkret checklista för omfattning, utförare, dokumentation, moms, resor och tillägg innan du beställer uppdraget.',
        'lastReviewed' => '2026-10-10',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Jämför offert på besiktning',
            'lead' => 'Två offerter kan ha samma rubrik men omfatta olika arbete. Jämför vad du faktiskt får och hur resultatet ska användas.',
        ],
        'intro' => [
            'Utgå från samma beskrivning när du begär flera offerter: byggnad, kommun, storlek, syfte och tillgängligt underlag. Då minskar risken att jämföra helt olika uppdrag.',
            'Den här checklistan anger inga exempelpriser. Ett pris behöver knytas till en verklig omfattning och en utförare.',
        ],
        'steps' => [
            [
                'title' => 'Beskriv beslutet du ska fatta',
                'body' => [
                    'Är syftet ett husköp, renovering, underhåll eller uppföljning? Be om en tjänst som besvarar rätt fråga. Mer text i en offert innebär inte automatiskt att fler kontroller ingår.',
                ],
            ],
            [
                'title' => 'Jämför omfattningen rad för rad',
                'body' => [
                    'Kontrollera byggnader, rum, konstruktioner och installationer. Markera begränsningar, otillgängliga delar och moment som kräver tillägg. Fråga om dokumentgenomgång och mätningar ingår.',
                ],
            ],
            [
                'title' => 'Kontrollera utföraren',
                'body' => [
                    'Be om namn på den som ska utföra uppdraget, relevant erfarenhet, eventuella behörigheter och ansvarsförsäkring. Kontrollera särskild certifiering när rollen kräver det. Utgå från bekräftade uppgifter.',
                ],
            ],
            [
                'title' => 'Jämför hela priset',
                'body' => [
                    'Be om tydlighet kring moms, resor, extra besök och separat uppföljning. Fråga hur tillägg beställs och hur priset påverkas om omfattningen förändras. Skilj fast pris från löpande debitering.',
                ],
            ],
            [
                'title' => 'Bestäm dokumentation och genomgång',
                'body' => [
                    'Fråga hur utlåtandet ser ut, när det levereras och hur du kan ställa frågor. Mätningar behöver beskriva metod och plats. Ett protokoll ska inte lova större säkerhet än undersökningen ger.',
                ],
            ],
            [
                'title' => 'Läs villkoren före bokning',
                'body' => [
                    'Stäm av tid, tillträde, avbokning och ansvar. Förfrågan på denna webbplats är ingen beställning; du tar ställning till den konkreta offerten innan du bokar.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Ska jag välja billigaste offerten?',
                'a' => 'Jämför först omfattning och leverans. Ett lägre pris kan avse mindre arbete eller sakna tillägg du behöver.',
            ],
            [
                'q' => 'Ingår moms i ett angivet pris?',
                'a' => 'Be om ett uttryckligt besked. Priset och villkoren ska vara tydliga för den som beställer.',
            ],
        ],
        'relatedService' => 'statusbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-husbesiktning',
            'underhallsplan-checklista',
            'certifierad-besiktningsman',
        ],
        'example' => false,
    ],
    'undersokningsplikt' => [
        'path' => '/guider/undersokningsplikt/',
        'title' => 'Undersökningsplikt – vid köp av hus och bostadsrätt',
        'navLabel' => 'Undersökningsplikt vid köp',
        'seoTitle' => 'Undersökningsplikt vid köp av bostad',
        'metaDescription' => 'Vad är undersökningsplikt vid köp av hus och bostadsrätt? Så fungerar köparens plikt, säljarens upplysningsplikt och vad en besiktning ger dig.',
        'lastReviewed' => '2026-10-20',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Undersökningsplikt – vid köp av hus och bostadsrätt',
            'lead' => 'Som köpare förväntas du undersöka bostaden innan du köper. Här går vi igenom vad undersökningsplikten innebär för hus och för bostadsrätt.',
        ],
        'intro' => [
            'Undersökningsplikten innebär att du som köpare inte i efterhand kan klaga på fel som du borde ha upptäckt vid en noggrann undersökning före köpet. Den gäller både vid husköp och vid köp av bostadsrätt, men reglerna och det som är viktigast att granska skiljer sig åt.',
            'Texten är allmän information och ersätter inte juridisk rådgivning. Har du en konkret tvist bör du vända dig till konsumentvägledning, en jurist eller ditt rättsskydd.',
        ],
        'steps' => [
            [
                'title' => 'Det här är undersökningsplikt',
                'body' => [
                    'Undersökningsplikt är ett sätt att fördela ansvaret mellan säljare och köpare. Fel som du som köpare borde ha upptäckt vid en undersökning kan du normalt inte åberopa mot säljaren efter köpet. Det som du inte kunde upptäcka, ett så kallat dolt fel, kan du däremot i vissa fall rikta anspråk för.',
                    'Hur långt plikten sträcker sig beror på bostaden, dess ålder och skick och på vad du fått veta under köpet. Det finns ingen färdig checklista i lagen; det handlar om vad en noggrann köpare rimligen hade sett.',
                ],
            ],
            [
                'title' => 'Undersökningsplikt vid husköp enligt jordabalken',
                'body' => [
                    'Vid köp av hus, alltså fastighet, gäller jordabalken. Enligt 4 kap. 19 § kan du som köpare inte göra gällande fel som du borde ha upptäckt vid en undersökning av fastigheten före köpet. Enligt Hallå konsument omfattar undersökningen hela fastigheten: tomten, byggnaderna och installationer som el, värme, vatten och avlopp. Du kan göra den själv eller anlita en sakkunnig.',
                    'Plikten kan bli större om du fått uppgifter eller sett något som tyder på ett fel, till exempel en fuktfläck eller en anmärkning i ett tidigare protokoll. Då räcker det sällan att bara titta; misstanken behöver följas upp. Att säljaren har låtit besikta huset gör inte att din egen undersökningsplikt försvinner.',
                ],
            ],
            [
                'title' => 'Undersökningsplikt vid köp av bostadsrätt',
                'body' => [
                    'En bostadsrätt räknas som lös egendom, så här gäller köplagen i stället för jordabalken. Köplagen innehåller ingen generell undersökningsplikt, men du kan inte åberopa fel som du borde ha upptäckt om du undersökt bostaden eller om säljaren uppmanat dig att göra det. I praktiken är det därför klokt att undersöka lägenheten ordentligt.',
                    'Fokus ligger på lägenheten, men även på föreningen. Läs årsredovisning, stadgar, underhållsplan och föreningens ekonomi, och fråga om planerade renoveringar och avgiftshöjningar. En bostadsrätt köps ofta i befintligt skick, och då kan du som köpare ha svårare att kräva något för fel som syntes eller borde ha setts.',
                ],
            ],
            [
                'title' => 'Säljarens upplysningsplikt',
                'body' => [
                    'Undersökningsplikten har sin motsvarighet i säljarens upplysningsplikt. Säljaren ska upplysa om sådant som hen känner till och som du rimligen kan förvänta dig att få veta, exempelvis en tidigare fuktskada eller en bristfällig renovering. Gäller det en bostadsrätt kan det även röra föreningens förhållanden, om säljaren känner till dem.',
                    'Om säljaren hållit inne med eller lämnat felaktig information kan säljaren vara ansvarig även för fel som du annars hade kunnat upptäcka. Säg därför till om du ser att uppgifter i objektbeskrivning, säljarens frågelista eller på visningen inte stämmer med det du ser.',
                ],
            ],
            [
                'title' => 'Så hjälper en besiktning dig som köpare',
                'body' => [
                    'En husbesiktning före köpet gör att fler fel upptäcks i tid, när du fortfarande kan förhandla om priset eller avstå. Protokollet visar också vad som undersöktes och vad som inte gick att undersöka, vilket är användbart om en fråga uppstår senare. Besiktningen ersätter dock inte din egen granskning av handlingar och av bostaden.',
                    'Läs protokollets begränsningar och fråga om sådant som kräver en fördjupad undersökning, till exempel fuktmätning eller kontroll av dolda konstruktioner. Det som protokollet pekar ut som en risk kan bli en del av din undersökningsplikt, så följ upp det innan du skriver på.',
                ],
            ],
            [
                'title' => 'Om du hittar ett fel efter köpet',
                'body' => [
                    'Dokumentera felet med bilder och anteckningar, och försök inte åtgärda det innan du pratat med någon som kan bedöma det, eftersom bevisen annars kan försvinna. Reklamera sedan skriftligt till säljaren inom skälig tid efter att du upptäckt felet eller borde ha upptäckt det. Vid husköp kan fel göras gällande upp till tio år efter tillträdet, men det hjälper inte om du väntar för länge med reklamationen.',
                    'Behöver du hjälp kan kommunal konsumentvägledning, Hallå konsument eller ditt hemförsäkringsbolags rättsskydd ge stöd.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Gäller undersökningsplikten även bostadsrätt?',
                'a' => 'Ja, i praktiken. Vid köp av bostadsrätt gäller köplagen, som inte har samma uttryckliga plikt som jordabalken. Du kan ändå inte åberopa fel som du borde ha upptäckt vid en undersökning.',
            ],
            [
                'q' => 'Hur långt går undersökningsplikten vid husköp?',
                'a' => 'Du ska undersöka hela fastigheten noggrant, och plikten blir större om du ser eller får veta något som tyder på ett fel. Det finns ingen fast lista, utan bedömningen görs i varje enskilt fall.',
            ],
            [
                'q' => 'Räcker det att säljaren har låtit besikta huset?',
                'a' => 'Nej. Din undersökningsplikt som köpare finns kvar även om säljaren har ett protokoll. Läs det noga, kontrollera vad det omfattar och vem det riktar sig till.',
            ],
            [
                'q' => 'Vad är skillnaden mellan undersökningsplikt och upplysningsplikt?',
                'a' => 'Undersökningsplikten gäller dig som köpare, upplysningsplikten gäller säljaren. Säljaren ska berätta det hen känner till och du rimligen kan förvänta dig få veta, medan du ska undersöka det som går att upptäcka.',
            ],
        ],
        'relatedService' => 'husbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-husbesiktning',
            'jamfora-besiktningsoffert',
            'tecken-pa-fukt',
            'dolda-fel-hus',
        ],
        'sources' => [
            ['label' => 'Hallå konsument: Köpa hus', 'url' => 'https://www.hallakonsument.se/varor-och-tjanster/bra-att-veta-infor-huskop/'],
            ['label' => 'Hallå konsument: Dolda fel i hus', 'url' => 'https://www.hallakonsument.se/varor-och-tjanster/fel-i-hus/'],
            ['label' => 'Riksdagen: Jordabalk (1970:994)', 'url' => 'https://www.riksdagen.se/sv/dokument-och-lagar/dokument/svensk-forfattningssamling/jordabalk-1970994_sfs-1970-994/'],
        ],
        'example' => false,
    ],
    'dolda-fel-hus' => [
        'path' => '/guider/dolda-fel-hus/',
        'title' => 'Dolda fel i hus – ansvar, försäkring och besiktning',
        'navLabel' => 'Dolda fel i hus',
        'seoTitle' => 'Dolda fel i hus – ansvar och försäkring',
        'metaDescription' => 'Dolda fel i hus: vad lagen menar, hur länge säljaren ansvarar, hur dolda fel-försäkring fungerar och hur du reklamerar. Så hjälper en besiktning.',
        'lastReviewed' => '2026-10-20',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Dolda fel i hus – ansvar, försäkring och besiktning',
            'lead' => 'Ett dolt fel är ett fel du inte kunde upptäcka vid en noggrann undersökning. Här är vad som gäller för ansvar, försäkring och reklamation.',
        ],
        'intro' => [
            'Dolda fel i hus är en av de vanligaste orsakerna till tvister efter husköp. Reglerna står i jordabalken och är samma för villa och andra småhus, men bedömningen beror på husets ålder, skick och på vad du kunde se före köpet.',
            'Texten är allmän information och ersätter inte juridisk rådgivning. Vid en konkret tvist kan du få hjälp av konsumentvägledning, en jurist eller ditt rättsskydd.',
        ],
        'steps' => [
            [
                'title' => 'Vad är ett dolt fel?',
                'body' => [
                    'Ett dolt fel är ett fel i huset som fanns vid köpet, som du som köpare inte kunde upptäcka vid en noggrann undersökning och som du inte hade anledning att räkna med. Det räcker inte att något är trasigt eller dyrt; felet ska ha varit dolt. Att köparen har bevisbördan gör dokumentation viktig.',
                    'Fel som du borde ha sett, eller som är förväntade med tanke på husets konstruktion, ålder och skick, räknas normalt inte som dolda. Därför hänger frågan nära ihop med din undersökningsplikt.',
                ],
            ],
            [
                'title' => 'Säljarens ansvar – hur länge gäller det?',
                'body' => [
                    'Enligt Hallå konsument kan du göra gällande ett dolt fel upp till tio år efter att du tillträdde huset. Tioårsfristen är den yttersta gränsen: du måste dessutom reklamera inom skälig tid efter att du upptäckt felet eller borde ha upptäckt det.',
                    'Det är också den som påstår ett dolt fel som ska kunna visa att felet fanns vid köpet. Ju längre tid som gått, desto svårare är det oftast att visa att felet inte beror på slitage eller senare händelser.',
                ],
            ],
            [
                'title' => 'Dolda fel i gammalt hus',
                'body' => [
                    'I ett gammalt hus får du räkna med slitage och att material och konstruktioner motsvarar sin tid. Det som är normalt för husets ålder, till exempel gamla rör eller bristande isolering, är därför inte automatiskt ett dolt fel. Ett äldre hus kräver ofta också en mer ingående undersökning från köparens sida.',
                    'Det kan ändå finnas fel som går utöver det du hade kunnat förvänta dig, till exempel en dold fuktskada i en konstruktion eller en renovering som utförts bristfälligt. En besiktning kan visa vad som är åldersrelaterat och vad som bör följas upp närmare.',
                ],
            ],
            [
                'title' => 'Dolda fel-försäkring för hus',
                'body' => [
                    'Det finns försäkringar som är kopplade till dolda fel vid husköp. Vanligast är att säljaren tecknar en säljaransvarsförsäkring, och köparen kan i vissa fall teckna en egen dolda fel-försäkring. En sådan försäkring kan typiskt hjälpa till med utredning och kostnader om någon gör gällande ett dolt fel, men omfattningen varierar.',
                    'Villkoren skiljer sig mellan försäkringsbolag, till exempel vad som ingår, självrisk, högsta ersättning, giltighetstid och om det finns krav på besiktning. Jämför villkoren, läs undantagen och fråga hur försäkringen ser på äldre hus innan du förlitar dig på den. Vi rekommenderar inga enskilda bolag.',
                ],
            ],
            [
                'title' => 'Så anmäler du dolda fel',
                'body' => [
                    'Det finns inga formella krav på hur du reklamerar, men Hallå konsument rekommenderar att du kontaktar säljaren skriftligt. Beskriv felet, när du upptäckte det och vad du vill att säljaren ska göra, och bifoga bilder och eventuellt utlåtande. Spara allt du skickar. Har säljaren en försäkring bör hen också meddela försäkringsbolaget.',
                    'Gör det snarast, eftersom en för sen reklamation kan göra att du förlorar rätten att kräva något. Vänta med reparationer tills felet dokumenterats, om det inte brådskar, så att du inte förstör bevis. Godtar inte säljaren kravet kan du få hjälp av konsumentvägledningen eller en jurist.',
                ],
            ],
            [
                'title' => 'Därför är en besiktning före köpet viktig',
                'body' => [
                    'En husbesiktning före köpet minskar risken för överraskningar. Det som besiktningsmannen hittar kan du ta upp i prisförhandlingen eller använda som underlag för att avstå, och protokollet visar vad du kände till vid köpet. Samtidigt gäller att det som protokollet nämner som en risk inte längre är dolt för dig.',
                    'En besiktning är ingen garanti mot alla fel, eftersom dolda konstruktioner inte alltid går att undersöka. Läs därför begränsningarna i protokollet och följ upp det som kräver en fördjupad undersökning.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Hur länge kan jag klaga på dolda fel i ett hus?',
                'a' => 'Du kan göra gällande dolda fel upp till tio år efter tillträdet, men du måste reklamera inom skälig tid efter att du upptäckt felet. Vänta därför inte.',
            ],
            [
                'q' => 'Gäller dolda fel även i villa och i gammalt hus?',
                'a' => 'Ja, reglerna är desamma för villa och andra småhus. I ett gammalt hus är det dock mer som anses förväntat, så det kan vara svårare att visa att ett fel är dolt.',
            ],
            [
                'q' => 'Täcker en dolda fel-försäkring alla fel?',
                'a' => 'Nej. Omfattning, självrisk, tid och undantag varierar mellan försäkringar. Läs villkoren noga och jämför innan du litar på skyddet.',
            ],
            [
                'q' => 'Hur anmäler jag dolda fel till säljaren?',
                'a' => 'Skicka en skriftlig reklamation till säljaren där du beskriver felet och när du upptäckte det, och bifoga bilder. Spara en kopia av allt.',
            ],
        ],
        'relatedService' => 'husbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-husbesiktning',
            'jamfora-besiktningsoffert',
            'tecken-pa-fukt',
            'mogel-i-hus',
            'undersokningsplikt',
        ],
        'sources' => [
            ['label' => 'Hallå konsument: Dolda fel i hus', 'url' => 'https://www.hallakonsument.se/varor-och-tjanster/fel-i-hus/'],
            ['label' => 'Hallå konsument: Köpa hus', 'url' => 'https://www.hallakonsument.se/varor-och-tjanster/bra-att-veta-infor-huskop/'],
            ['label' => 'Riksdagen: Jordabalk (1970:994)', 'url' => 'https://www.riksdagen.se/sv/dokument-och-lagar/dokument/svensk-forfattningssamling/jordabalk-1970994_sfs-1970-994/'],
        ],
        'example' => false,
    ],
    'besiktningsklausul' => [
        'path' => '/guider/besiktningsklausul/',
        'title' => 'Besiktningsklausul vid köp av hus',
        'navLabel' => 'Besiktningsklausul vid köp av hus',
        'seoTitle' => 'Besiktningsklausul – så fungerar den',
        'metaDescription' => 'Vad är en besiktningsklausul i köpekontraktet för en villa? Öppen klausul, tidsfrister, undersökningsplikten och vad som gäller om besiktningen visar fel.',
        'lastReviewed' => '2026-10-20',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Besiktningsklausul vid köp av hus',
            'lead' => 'En besiktningsklausul låter dig besikta huset efter att kontraktet är skrivet. Här går vi igenom hur den fungerar och vad du bör fråga mäklaren om.',
        ],
        'intro' => [
            'En besiktningsklausul är ett villkor i köpekontraktet som kopplar köpets bestånd till resultatet av en besiktning. Med en besiktningsklausul för villa eller annat hus kan du som köpare låta en besiktningsman undersöka huset efter kontraktsskrivningen och därefter avgöra om köpet ska stå fast.',
            'Texten är allmän information och ingen juridisk rådgivning. Exakt vad som gäller för ditt köp styrs av hur klausulen är formulerad i just ditt kontrakt. Är du osäker, fråga mäklaren eller en jurist innan du skriver under.',
        ],
        'steps' => [
            [
                'title' => 'Vad en besiktningsklausul är',
                'body' => [
                    'Klausulen är ett villkor som ska stå i själva köpehandlingen. Den anger vanligtvis att köparen får låta besikta huset inom en viss tid och vad som händer om besiktningen inte godtas. Överenskommelser vid sidan av kontraktet är en dålig grund att stå på.',
                    'Enligt jordabalken får ett villkor för ett köps fullbordan eller bestånd inte gälla längre än två år från att köpehandlingen upprättades. I praktiken är tidsfristerna i en besiktningsklausul mycket kortare.',
                ],
            ],
            [
                'title' => 'Öppen besiktningsklausul eller klausul kopplad till vissa fel',
                'body' => [
                    'Med en öppen besiktningsklausul får köparen göra en besiktning och sedan välja om köpet ska gå tillbaka, utan att besiktningen behöver visa något särskilt fel. En klausul som är kopplad till vissa fel eller en viss kostnadsnivå ger i stället rätt att frångå köpet först när villkoret är uppfyllt.',
                    'Skillnaden spelar roll, eftersom den avgör vad du behöver kunna visa. Be mäklaren förklara vilken sorts klausul som gäller för just ditt kontrakt och be att få se den exakta ordalydelsen.',
                ],
            ],
            [
                'title' => 'Tidsfrister i kontraktet',
                'body' => [
                    'Hur lång tid du har på dig, och hur du ska meddela säljaren, bestäms i kontraktet. Det brukar röra sig om ett slutdatum och ett krav på skriftligt besked. Missar du fristen kan klausulen förlora sin verkan.',
                    'Boka därför besiktningsman direkt efter kontraktsskrivningen, och räkna in tid för protokollet. Läs gärna även om hur du förbereder dig i vår checklista inför husbesiktning.',
                ],
            ],
            [
                'title' => 'Klausulen och undersökningsplikten',
                'body' => [
                    'Som köpare av en fastighet har du en undersökningsplikt: ett fel som du borde ha upptäckt vid en lämplig undersökning kan du normalt inte åberopa i efterhand. En besiktningsklausul ersätter inte den plikten.',
                    'Klausulen ger dig en avtalad möjlighet att backa från köpet, medan undersökningsplikten styr vilka fel du i efterhand kan klaga på. Tänk på dem som två olika saker.',
                ],
            ],
            [
                'title' => 'Om besiktningen visar fel: häva eller omförhandla',
                'body' => [
                    'Vad du kan göra när besiktningsprotokollet visar fel beror på klausulen. Är den öppen kan du begära att köpet går tillbaka. Är den knuten till vissa fel behöver villkoret vara uppfyllt. Du kan också välja att försöka omförhandla priset eller kräva att säljaren åtgärdar något, men det kräver att båda parter går med på det.',
                    'Skriv ner överenskommelser och låt mäklaren hjälpa till att dokumentera dem. Ändringar i kontraktet bör göras skriftligt.',
                ],
            ],
            [
                'title' => 'Praktiska tips till dig som köpare',
                'body' => [
                    'Fråga mäklaren före kontraktsskrivningen om klausulen kan tas med och hur den ska formuleras. Be att få veta vilka frister som gäller, hur återgång begärs och vad som händer med handpenningen.',
                    'Bestäm omfattning med besiktningsmannen i förväg, så att protokollet svarar på de frågor du har. Hur du jämför offerter finns i jämför besiktningsoffert.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Vad är en öppen besiktningsklausul?',
                'a' => 'Det är en klausul som ger köparen rätt att besikta huset efter kontraktet och sedan välja om köpet ska stå fast. Exakt innebörd framgår av ordalydelsen i kontraktet.',
            ],
            [
                'q' => 'Måste jag ha en besiktningsklausul när jag köper hus?',
                'a' => 'Nej, men utan klausul binds du av köpet direkt när kontraktet är skrivet. Många köpare besiktar därför före kontraktet i stället, eller begär klausulen.',
            ],
            [
                'q' => 'Gäller besiktningsklausulen även om jag har besiktat huset i förväg?',
                'a' => 'Det beror på formuleringen. Fråga mäklaren hur klausulen ska lyda om du redan har ett protokoll.',
            ],
            [
                'q' => 'Kan jag få juridisk hjälp med klausulen?',
                'a' => 'Ja. Mäklaren kan förklara hur klausulen fungerar, men vid tveksamheter kan du vända dig till en jurist.',
            ],
        ],
        'relatedService' => 'overlatelsebesiktning',
        'toolLink' => null,
        'related' => [
            'infor-husbesiktning',
            'jamfora-besiktningsoffert',
        ],
        'sources' => [
            ['label' => 'Jordabalk (1970:994), Riksdagen', 'url' => 'https://www.riksdagen.se/sv/dokument-och-lagar/dokument/svensk-forfattningssamling/jordabalk-1970994_sfs-1970-994/'],
            ['label' => 'Köparens undersökningsplikt, Fastighetsmäklarinspektionen', 'url' => 'https://fmi.se/vad-galler-vid-formedling/marknadsforing-och-visning/koparens-undersokningsplikt/'],
        ],
        'example' => false,
    ],
    'certifierad-besiktningsman' => [
        'path' => '/guider/certifierad-besiktningsman/',
        'title' => 'Certifierad besiktningsman – vad betyder SBR, Kiwa och RISE?',
        'navLabel' => 'Certifierad besiktningsman',
        'seoTitle' => 'Certifierad besiktningsman – SBR, Kiwa',
        'metaDescription' => 'Vad betyder certifierad besiktningsman, SBR och Kiwa? Så förstår du certifiering, oberoende och ansvarsförsäkring innan du anlitar en besiktningsman.',
        'lastReviewed' => '2026-10-20',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Certifierad besiktningsman – vad betyder SBR, Kiwa och RISE?',
            'lead' => 'Titeln besiktningsman är inte skyddad. Här förklarar vi vad certifiering innebär och vilka frågor du kan ställa innan du anlitar någon.',
        ],
        'intro' => [
            'När du söker besiktningsman för ett hus möter du termer som certifierad besiktningsman, besiktningsman SBR och RISE-certifierad. De låter likartade men betyder inte exakt samma sak, och reglerna har ändrats över tid.',
            'Den här guiden är allmän information. Be alltid den du överväger att anlita om intyg och dokumentation, eftersom vi inte kan intyga någon enskild persons behörighet åt dig.',
        ],
        'steps' => [
            [
                'title' => 'Vad certifiering betyder för en besiktningsman',
                'body' => [
                    'En certifiering visar att en fristående organisation har granskat personens utbildning, erfarenhet och kunskap enligt en kravspecifikation. Den ger dig ett underlag, men den är inget bevis för att just ditt uppdrag blir bra.',
                    'För överlåtelsebesiktning, alltså besiktning vid husköp, finns en särskild certifiering för överlåtelsebesiktningsman. Certifikat gäller ofta en begränsad tid och kräver årlig uppföljning.',
                ],
            ],
            [
                'title' => 'SBR: vad står förkortningen för?',
                'body' => [
                    'SBR står för Svenska Byggingenjörers Riksförbund och är en branschorganisation för bland annat besiktningsmän. Begreppet besiktningsman SBR kan syfta på medlemskap, på en certifiering som tagits fram tillsammans med SBR eller på SBR:s eget godkännande.',
                    'SBR har dessutom en egen behörighet, Av SBR godkänd besiktningsman. Den är något annat än en certifiering och är tidsbegränsad. Fråga därför vilket av dessa som personen faktiskt innehar.',
                ],
            ],
            [
                'title' => 'RISE och certifieringsorganen',
                'body' => [
                    'RISE, Research Institutes of Sweden, har certifierat besiktningsmän och för äldre certifikat kan du fortfarande se RISE som utfärdare. Enligt SBR har certifieringen tagits fram i samverkan mellan RISE och SBR.',
                    'För närvarande anger SBR och Kiwa att Kiwa Certification är certifieringsorgan i samarbete med SBR sedan februari 2024. Vem som utfärdat ett certifikat beror alltså på när det gavs, så fråga efter certifikatet och kontrollera utfärdaren och giltighetstiden.',
                ],
            ],
            [
                'title' => 'Entreprenadbesiktning har egna krav',
                'body' => [
                    'Entreprenadbesiktning, till exempel slutbesiktning av en nybyggnation eller renovering, har en egen certifiering som entreprenadbesiktningsman. Den skiljer sig från certifieringen för överlåtelsebesiktning.',
                    'Skilj därför på vad du ska besikta. Ett certifikat för ett område visar inte att personen är certifierad för det andra. Läs mer om slutbesiktning i checklistan inför slutbesiktning.',
                ],
            ],
            [
                'title' => 'Oberoende besiktningsman och ansvarsförsäkring',
                'body' => [
                    'En oberoende besiktningsman har inget ekonomiskt eller annat intresse i affären. Han eller hon ska alltså inte vara knuten till säljaren eller mäklaren, utan arbeta på uppdrag av den som beställer. Fråga vem som beställer och betalar uppdraget.',
                    'Fråga även om ansvarsförsäkring. Be om försäkringsbevis och kontrollera vad försäkringen omfattar och vilka villkor och begränsningar som gäller för uppdraget.',
                ],
            ],
            [
                'title' => 'Frågor att ställa innan du bokar',
                'body' => [
                    'Be om certifikatets nummer, utfärdare och giltighetstid. Fråga om uppdragets omfattning, vad som ingår och inte ingår, och vilken försäkring som gäller. Be också att få se ett exempel på ett protokoll så att du ser hur iakttagelser och risker redovisas.',
                    'Vill du jämföra flera offerter hittar du stöd i jämför besiktningsoffert. Be varje besiktningsman om sitt eget intyg.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Är titeln besiktningsman skyddad?',
                'a' => 'Nej, i allmänhet kan vem som helst kalla sig besiktningsman. Därför är certifikat och dokumentation något du behöver fråga efter.',
            ],
            [
                'q' => 'Vad betyder SBR-godkänd besiktningsman?',
                'a' => 'Det kan syfta på Av SBR godkänd besiktningsman, en behörighet som SBR själv utfärdar och som är tidsbegränsad. Det är inte samma sak som en certifiering, så fråga vilket intyg som avses.',
            ],
            [
                'q' => 'Behöver besiktningsmannen vara certifierad?',
                'a' => 'Det finns inget lagkrav för överlåtelsebesiktning, men certifiering är ett sätt att få ett tecken på kompetens. Vissa uppdrag, till exempel i avtal, kan ställa krav.',
            ],
            [
                'q' => 'Hur vet jag att besiktningsmannen är oberoende?',
                'a' => 'Fråga vem som har beställt och betalar uppdraget och om personen har någon koppling till säljaren eller mäklaren. Be om svaret skriftligt.',
            ],
        ],
        'relatedService' => 'husbesiktning',
        'toolLink' => null,
        'related' => [
            'infor-husbesiktning',
            'jamfora-besiktningsoffert',
        ],
        'sources' => [
            ['label' => 'Överlåtelsebesiktning, SBR Byggingenjörerna', 'url' => 'https://sbr.se/blog/overlatelsebesiktning-av-fast-egendom/'],
            ['label' => 'Kiwa blir ny partner till SBR', 'url' => 'https://kiwa.com/se/sv/media/nyheter/kiwa-blir-ny-partner-till-sbr'],
            ['label' => 'Kiwa: Certifiering av överlåtelsebesiktningsman', 'url' => 'https://www.kiwa.com/se/sv/tjanster/certifiering/certifierad-overlatelsebesiktningsman/'],
        ],
        'example' => false,
    ],
    'fukt-i-krypgrund' => [
        'path' => '/guider/fukt-i-krypgrund/',
        'title' => 'Fukt i krypgrund – luftfuktighet, avfuktare och åtgärder',
        'navLabel' => 'Fukt i krypgrund',
        'seoTitle' => 'Fukt i krypgrund – avfuktare och åtgärd',
        'metaDescription' => 'Fukt i krypgrund: så tolkar du luftfuktigheten, när en avfuktare kan behövas och hur en fuktutredning hjälper dig att välja rätt åtgärd.',
        'lastReviewed' => '2026-10-20',
        'hero' => [
            'eyebrow' => 'Besiktningsguiden',
            'h1' => 'Fukt i krypgrund – luftfuktighet, avfuktare och åtgärder',
            'lead' => 'Många hus med krypgrund eller torpargrund har högre fukt under golvet än i resten av huset. Här går vi igenom varför, hur du mäter och vad du kan göra.',
        ],
        'intro' => [
            'Fukt i krypgrund är vanligt, särskilt i äldre hus. Det betyder inte alltid att något är skadat, men förhöjd fukt över lång tid kan ge mögel på trä och lukt som kan följa med upp i bostaden.',
            'Guiden är allmän information. Varje krypgrund är olika, och rätt åtgärd beror på orsaken. Börja därför med att ta reda på vad som faktiskt händer under huset innan du köper utrustning eller bygger om.',
        ],
        'steps' => [
            [
                'title' => 'Varför blir det fuktigt i en krypgrund?',
                'body' => [
                    'Många krypgrunder ventileras med utomhusluft. På sommaren kan varm och fuktig luft komma in och möta kalla ytor som marken, grundmuren och golvbjälklaget. Då stiger den relativa fuktigheten (RF) och fukt kan fälla ut på ytorna.',
                    'Andra vanliga orsaker är fuktig mark, dålig dränering, regnvatten som leds mot huset, bevuxen mark och organiskt material under huset. Ofta samverkar flera orsaker.',
                ],
            ],
            [
                'title' => 'Luftfuktighet i krypgrund – vad är en acceptabel nivå?',
                'body' => [
                    'Ett vanligt riktvärde är att RF i krypgrunden inte bör ligga över cirka 75–80 % under längre tid, eftersom risken för mögel på trä ökar vid högre nivåer. Det är ett riktvärde och ingen garanti åt något håll: risken beror också på temperatur, hur länge fukten varit hög och materialet.',
                    'Luftfuktigheten varierar med årstiden och är ofta högst under sommar och tidig höst. Ett enstaka värde säger därför lite om vad som är normalt för just din krypgrund.',
                ],
            ],
            [
                'title' => 'Mäta fukt i krypgrunden',
                'body' => [
                    'En enkel fuktmätare i krypgrund visar RF och temperatur just nu. Bättre är en logger som mäter över veckor eller månader, helst både under huset och utomhus, så att du ser samband och årstidsvariationer. Trä kan också mätas för sig, eftersom fukten i virket inte alltid följer luftens värden.',
                    'En mätning på en dag kan inte visa orsaken, om fukten är på väg upp eller ned, eller om det finns dolda skador. Mätutrustning är därför ett underlag, inte en diagnos.',
                ],
            ],
            [
                'title' => 'Avfuktare i krypgrund – när behövs det?',
                'body' => [
                    'En avfuktare kan vara en del av lösningen när luften är fuktig trots att orsaken är avgränsad, till exempel efter åtgärder mot fuktig mark. De vanligaste typerna är kondensavfuktare och sorptionsavfuktare. Sorptionsavfuktare fungerar bättre vid låga temperaturer, medan kondensavfuktare används där det är varmare.',
                    'Avfuktaren måste vara rätt dimensionerad och installerad, och krypgrunden behöver vara tillräckligt tät för att avfuktningen ska ge effekt. Den löser inte vattenläckor, dålig dränering eller fuktig mark. Vi säljer eller installerar inte avfuktare, men vi kan hjälpa dig att få fram vilken åtgärd som är motiverad.',
                ],
            ],
            [
                'title' => 'Mögel i krypgrund och torpargrund',
                'body' => [
                    'Tecken på mögel i krypgrund eller torpargrund är mörka eller vita fläckar på trä, fuktig och unken lukt, kondens på ytor och lukt som kan kännas inomhus, särskilt nära golvet. Skador syns inte alltid från luckan, så avsaknad av synligt mögel är ingen garanti.',
                    'Går det att se mögel eller känna lukt är det rimligt att få en fuktutredning. Gå inte in i en trång eller mögelpåverkad krypgrund utan skydd, och fråga 1177 om du har symtom som du misstänker hänger ihop med inomhusmiljön.',
                ],
            ],
            [
                'title' => 'Åtgärder och kostnad vid fukt i krypgrund',
                'body' => [
                    'Åtgärderna delas ofta in i några kategorier: ändrad ventilation, markfuktskydd som plastfolie på marken, avfuktning, och åtgärder mot orsaken som förbättrad dränering. Ibland behöver skadat material också bytas eller saneras.',
                    'Kostnaden för att åtgärda fukt i krypgrund beror helt på vilken lösning som krävs, så vi anger inga priser här. Gör du en fuktutredning eller fuktmätning först minskar du risken att betala för fel åtgärd. Fyll i formuläret så får du offerter på det från besiktningsmän i Stockholms län.',
                ],
            ],
        ],
        'faq' => [
            [
                'q' => 'Hur hög luftfuktighet är för hög i en krypgrund?',
                'a' => 'Som riktvärde ses RF över cirka 75–80 % under längre tid som en risk för mögel på trä. Värdet beror på temperatur och tid, så mät över en längre period och låt en fuktutredning bedöma resultatet.',
            ],
            [
                'q' => 'Räcker det med en avfuktare?',
                'a' => 'Bara om fuktkällan redan är åtgärdad eller begränsad. En avfuktare tar hand om fuktig luft men inte vattenläckor, fuktig mark eller dålig dränering.',
            ],
            [
                'q' => 'Vad kostar det att åtgärda fukt i krypgrund?',
                'a' => 'Det beror på orsak och lösning, till exempel ventilation, markfuktskydd, avfuktning eller dränering. En fuktutredning först hjälper dig att undvika fel åtgärd.',
            ],
            [
                'q' => 'Kan jag mäta fukten själv?',
                'a' => 'Du kan använda en fuktmätare eller logger för att få en första bild, men tolkningen och orsaken är svårare. Gå inte in i trånga utrymmen på ett osäkert sätt.',
            ],
        ],
        'relatedService' => 'fuktutredning',
        'toolLink' => null,
        'related' => [
            'tecken-pa-fukt',
            'mogel-i-hus',
            'fuktskada-kallare',
        ],
        'sources' => [
            ['label' => 'Boverket: Risker med fukt från uteluft i krypgrund', 'url' => 'https://www.boverket.se/sv/byggande/forebygg-fel-brister-skador/risker-byggande/risker-fuktskador/fuktrisker-for-grund/krypgrund/risk-med-fukt-fran-uteluft-i-krypgrund/'],
            ['label' => 'Boverket: Fuktrisker för grund', 'url' => 'https://www.boverket.se/sv/byggande/forebygg-fel-brister-skador/risker-byggande/risker-fuktskador/fuktrisker-for-grund/'],
        ],
        'example' => false,
    ],
]);
