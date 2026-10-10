<?php
/** Higgsfield illustrations; never presented as staff, customers or completed jobs. */
declare(strict_types=1);
$images = [
    'overlatelsebesiktning' => ['slot' => 'villa', 'alt' => 'Illustration av en svensk villa med träfasad'],
    'statusbesiktning' => ['slot' => 'attic', 'alt' => 'Illustration av en vind med synliga träkonstruktioner'],
    'badrumsbesiktning' => ['slot' => 'bathroom', 'alt' => 'Illustration av ett kaklat badrum och en golvbrunn'],
    'fuktutredning' => ['slot' => 'moisture', 'alt' => 'Illustration av skadat trä vid en vägg och ett mätinstrument'],
    'slutbesiktning' => ['slot' => 'final', 'alt' => 'Illustration av en färdigställd bostadsinteriör'],
    'entreprenadbesiktning' => ['slot' => 'construction', 'alt' => 'Illustration av en byggnad under uppförande'],
    'garantibesiktning' => ['slot' => 'final', 'alt' => 'Illustration av en bostadsinteriör inför kontroll'],
    'brf' => ['slot' => 'brf', 'alt' => 'Illustration av ett flerbostadshus och dess gård'],
    'underhallsplan' => ['slot' => 'maintenance', 'alt' => 'Illustration av byggnadsritningar och anteckningsmaterial'],
];

foreach (['lagenhetsbesiktning' => ['apartment', 'Illustration av en svensk lägenhet med synliga ytskikt.'], 'takbesiktning' => ['roof', 'Illustration av tegeltak med anslutningar och avvattning.'], 'byggprojektledning' => ['project', 'Illustration av ett pågående byggprojekt.'], 'kontrollansvarig' => ['control', 'Illustration av byggkonstruktion och handlingar.'], 'fuktmatning' => ['measurement', 'Illustration av en fuktmätare vid en byggnadsdel.'], 'home' => ['home', 'Illustration av en svensk villa.']] as $slug => [$slot, $alt]) {
    $images[$slug] = ['slot' => $slot, 'alt' => $alt];
}
return $images;
