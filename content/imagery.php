<?php
/** Higgsfield images (realistic since 2026-10-20, labelled as AI); never presented as staff, customers or completed jobs. */
declare(strict_types=1);
$images = [
    'overlatelsebesiktning' => ['slot' => 'villa', 'alt' => 'Vit enplansvilla från 1970-talet med trädgård och grusuppfart'],
    'statusbesiktning' => ['slot' => 'attic', 'alt' => 'Vind med takstolar, isolering och fuktmätare på en planka'],
    'badrumsbesiktning' => ['slot' => 'bathroom', 'alt' => 'Besiktningsman mäter fukt vid golvbrunnen i ett kaklat badrum'],
    'fuktutredning' => ['slot' => 'moisture', 'alt' => 'Krypgrund med arbetslampa och fuktmätare på en golvbjälke'],
    'slutbesiktning' => ['slot' => 'final', 'alt' => 'Illustration av en färdigställd bostadsinteriör'],
    'entreprenadbesiktning' => ['slot' => 'construction', 'alt' => 'Illustration av en byggnad under uppförande'],
    'garantibesiktning' => ['slot' => 'final', 'alt' => 'Illustration av en bostadsinteriör inför kontroll'],
    'brf' => ['slot' => 'brf', 'alt' => 'Nybyggt flerbostadshus med balkonger och innergård'],
    'underhallsplan' => ['slot' => 'maintenance', 'alt' => 'Illustration av byggnadsritningar och anteckningsmaterial'],
];

foreach (['lagenhetsbesiktning' => ['apartment', 'Ljus sekelskifteslägenhet med fiskbensparkett och kakelugn'], 'takbesiktning' => ['roof', 'Tegeltak med takbrygga, skorsten och stege vid takfoten'], 'byggprojektledning' => ['project', 'Illustration av ett pågående byggprojekt.'], 'kontrollansvarig' => ['control', 'Illustration av byggkonstruktion och handlingar.'], 'fuktmatning' => ['measurement', 'Fuktmätare på klinkergolv bredvid en golvbrunn'], 'home' => ['home', 'Ljusgrå villa med besiktningsprotokoll och fuktmätare på trappan'], 'inspector' => ['inspector', 'Besiktningsman med surfplatta och fuktmätare framför en ljusgrå villa']] as $slug => [$slot, $alt]) {
    $images[$slug] = ['slot' => $slot, 'alt' => $alt];
}
return $images;
