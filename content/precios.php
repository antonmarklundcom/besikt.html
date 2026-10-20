<?php
/**
 * Uppskattade prisnivåer per tjänst (inkl. moms, privatperson om inget annat
 * anges, Stockholms län). Anton bad om dem 2026-10-20 för att sidorna ska kunna
 * svara på "vad kostar …"-sökningar. De är vägledande intervall, inte våra
 * priser: varje besiktningsman sätter sitt eget pris i offerten.
 *
 * Underlag: planens preliminära frånpriser (plan.md §3.3) och publicerade
 * prisguider i oktober 2026. Se docs/DESIGN-VIT-2026-10-20.md.
 *
 * Läses av templates/service.php (en "Vad kostar …?"-rubrik på varje
 * tjänstesida) och av /priser/ (hela tabellen). Varje rad i 'rows' är
 * [vad, ungefärligt pris].
 */

declare(strict_types=1);

return [
    'updated' => '2026-10-20',
    'note'    => 'Ungefärliga prisnivåer i Stockholms län, inklusive moms. Det faktiska priset sätts av varje besiktningsman och framgår av offerten.',

    'services' => [
        'husbesiktning' => [
            'h2'   => 'Vad kostar en husbesiktning?',
            'text' => 'En vanlig husbesiktning av en villa kostar ungefär 9 000–15 000 kr. Priset beror främst på husets storlek, grundläggning och om du lägger till fuktmätning.',
            'rows' => [
                ['Villa, överlåtelsebesiktning', '9 000–15 000 kr'],
                ['Villa med fuktmätning', '11 000–17 000 kr'],
                ['Radhus eller parhus', '8 000–12 000 kr'],
                ['Statusbesiktning av villa', '9 000–16 000 kr'],
            ],
        ],
        'overlatelsebesiktning' => [
            'h2'   => 'Vad kostar en överlåtelsebesiktning?',
            'text' => 'En överlåtelsebesiktning av en villa kostar ungefär 9 000–15 000 kr. Fuktmätning i krypgrund, källare eller platta är ofta ett tillägg.',
            'rows' => [
                ['Villa, okulär besiktning', '9 000–15 000 kr'],
                ['Tillägg fuktmätning', '1 500–3 500 kr'],
                ['Radhus eller parhus', '8 000–12 000 kr'],
                ['Fritidshus', '7 000–12 000 kr'],
            ],
        ],
        'lagenhetsbesiktning' => [
            'h2'   => 'Vad kostar en lägenhetsbesiktning?',
            'text' => 'En besiktning av en bostadsrätt kostar ungefär 4 000–8 000 kr. Antal våtrum, storlek och om fuktmätning ingår påverkar priset.',
            'rows' => [
                ['Bostadsrätt inför köp', '4 000–8 000 kr'],
                ['Kontroll efter renovering', '4 000–7 000 kr'],
                ['Tillägg fuktmätning i våtrum', '1 500–3 000 kr'],
            ],
        ],
        'statusbesiktning' => [
            'h2'   => 'Vad kostar en statusbesiktning?',
            'text' => 'En statusbesiktning av en villa kostar ungefär 9 000–16 000 kr, beroende på husets storlek och vilka delar som ska bedömas.',
            'rows' => [
                ['Villa eller radhus', '9 000–16 000 kr'],
                ['Lägenhet', '4 000–8 000 kr'],
            ],
        ],
        'badrumsbesiktning' => [
            'h2'   => 'Vad kostar en badrumsbesiktning?',
            'text' => 'En badrumsbesiktning kostar ungefär 3 000–6 000 kr för ett badrum. Fler våtrum eller mer omfattande fuktmätning höjer priset.',
            'rows' => [
                ['Ett badrum, med fuktmätning', '3 000–6 000 kr'],
                ['Slutbesiktning av badrumsrenovering', '3 000–5 000 kr'],
                ['Extra våtrum', '1 500–3 000 kr'],
            ],
        ],
        'fuktutredning' => [
            'h2'   => 'Vad kostar en fuktutredning?',
            'text' => 'En fuktutredning kostar ungefär 6 000–20 000 kr. En avgränsad skada i ett rum ligger i den lägre delen; utredning av krypgrund, källare eller flera rum i den högre.',
            'rows' => [
                ['Avgränsad fuktskada, ett utrymme', '6 000–10 000 kr'],
                ['Krypgrund, källare eller flera rum', '10 000–20 000 kr'],
                ['Provtagning och labbanalys', 'tillägg enligt offert'],
            ],
        ],
        'fuktmatning' => [
            'h2'   => 'Vad kostar en fuktmätning?',
            'text' => 'En fuktmätning kostar ungefär 2 500–8 000 kr. Antal mätpunkter, metod och om det gäller betong styr priset.',
            'rows' => [
                ['Fuktmätning i bostad, några mätpunkter', '2 500–5 000 kr'],
                ['RF-mätning i betong (per mättillfälle)', '4 000–8 000 kr'],
            ],
        ],
        'takbesiktning' => [
            'h2'   => 'Vad kostar en takbesiktning?',
            'text' => 'En takbesiktning av en villa kostar ungefär 3 500–8 000 kr. Takets storlek, lutning och hur det kan nås påverkar priset.',
            'rows' => [
                ['Villa eller radhus', '3 500–8 000 kr'],
                ['Kontroll efter takbyte', '4 000–8 000 kr'],
            ],
        ],
        'slutbesiktning' => [
            'h2'   => 'Vad kostar en slutbesiktning?',
            'text' => 'En slutbesiktning för en privatperson kostar ungefär 8 000–20 000 kr. Ett nybyggt hus ligger högre än en renovering eller tillbyggnad.',
            'rows' => [
                ['Renovering eller tillbyggnad', '8 000–15 000 kr'],
                ['Nybyggt småhus', '12 000–25 000 kr'],
                ['Efterbesiktning', '3 000–6 000 kr'],
            ],
        ],
        'entreprenadbesiktning' => [
            'h2'   => 'Vad kostar en entreprenadbesiktning?',
            'text' => 'Entreprenadbesiktningar prissätts ofta per timme eller som ett fast pris per besiktningstillfälle. För ett småhus ligger en besiktning ofta på 8 000–25 000 kr.',
            'rows' => [
                ['Timpris besiktningsman', '1 000–1 600 kr/tim'],
                ['Småhus, per besiktningstillfälle', '8 000–25 000 kr'],
                ['Större projekt och BRF', 'enligt offert'],
            ],
        ],
        'garantibesiktning' => [
            'h2'   => 'Vad kostar en garantibesiktning?',
            'text' => 'En garantibesiktning av ett småhus kostar ungefär 7 000–12 000 kr.',
            'rows' => [
                ['Småhus', '7 000–12 000 kr'],
                ['Lägenhet eller mindre entreprenad', '4 000–8 000 kr'],
            ],
        ],
        'brf' => [
            'h2'   => 'Vad kostar en besiktning för BRF?',
            'text' => 'En statusbesiktning av en förenings fastighet kostar ofta 20 000–80 000 kr. Antal byggnader, lägenheter och vilka delar som ingår avgör.',
            'rows' => [
                ['Statusbesiktning, mindre förening', '20 000–40 000 kr'],
                ['Statusbesiktning, större förening', '40 000–80 000 kr'],
                ['Besiktning av entreprenad', 'per timme eller fast pris'],
            ],
        ],
        'underhallsplan' => [
            'h2'   => 'Vad kostar en underhållsplan för BRF?',
            'text' => 'En ny underhållsplan kostar ofta 25 000–100 000 kr. En uppdatering av en befintlig plan är billigare.',
            'rows' => [
                ['Ny underhållsplan, mindre förening', '25 000–50 000 kr'],
                ['Ny underhållsplan, större förening', '50 000–100 000 kr'],
                ['Uppdatering av befintlig plan', '10 000–30 000 kr'],
            ],
        ],
        'kontrollansvarig' => [
            'h2'   => 'Vad kostar en kontrollansvarig?',
            'text' => 'En kontrollansvarig för ett mindre projekt kostar ungefär 10 000–25 000 kr. Ett nytt hus ligger oftast högre. Många tar betalt per timme.',
            'rows' => [
                ['Attefallshus, tillbyggnad eller mindre ombyggnad', '10 000–25 000 kr'],
                ['Nybyggnad av villa', '20 000–40 000 kr'],
                ['Timpris', '900–1 400 kr/tim'],
            ],
        ],
        'byggprojektledning' => [
            'h2'   => 'Vad kostar byggprojektledning?',
            'text' => 'Byggprojektledning debiteras oftast per timme, ungefär 1 000–1 600 kr inklusive moms. Ett avgränsat uppdrag kan också få ett fast pris.',
            'rows' => [
                ['Timpris projektledare eller byggledare', '1 000–1 600 kr/tim'],
                ['Fast pris för avgränsat uppdrag', 'enligt offert'],
            ],
        ],
        'byggkonsult' => [
            'h2'   => 'Vad kostar en byggkonsult?',
            'text' => 'En byggkonsult kostar ungefär 900–1 600 kr per timme inklusive moms. Ett avgränsat uppdrag, som en genomgång av offerter, kan få ett fast pris.',
            'rows' => [
                ['Timpris byggkonsult', '900–1 600 kr/tim'],
                ['Genomgång av offerter eller underlag', '3 000–10 000 kr'],
            ],
        ],
    ],
];
