<?php
/**
 * Prislistan på /priser/. Ett pris visas bara när det är ett riktigt belopp;
 * `price => null` visar "Offert". Alla belopp är preliminära ("från"-priser,
 * inklusive moms, privatperson, Stockholms län) tills besiktningsmannen
 * bekräftat dem – se docs/facts-to-verify.md. Kalkylatorn
 * (content/tools.php) räknar från samma belopp.
 *
 *   name         string   radens namn
 *   audience     string   vem det gäller, en rad
 *   price        ?int     "från"-pris i hela kronor (fmt_money() formaterar), eller null = offert
 *   includes     string[] vad som ingår, korta rader
 *   featured     bool     markerad rad
 *   example      bool     bara en exempelpost – se content/services.php
 *   service      string   tjänstens slug i content/services.php (länk + kalkylator)
 *   preliminary  bool     priset är inte bekräftat (alla rader just nu)
 */

declare(strict_types=1);

return [
    [
        'name'        => 'Överlåtelsebesiktning villa/radhus',
        'audience'    => 'Köpare eller säljare av hus',
        'price'       => 9900,
        'includes'    => ['Okulär besiktning av hela huset', 'Fuktindikering i riskutrymmen', 'Protokoll med foton'],
        'featured'    => true,
        'example'     => false,
        'service'     => 'overlatelsebesiktning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Besiktning bostadsrätt inför köp',
        'audience'    => 'Köpare av lägenhet',
        'price'       => 5900,
        'includes'    => ['Genomgång av lägenheten', 'Fokus på våtrum och installationer', 'Protokoll med foton'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'brf',
        'preliminary' => true,
    ],
    [
        'name'        => 'Badrumsbesiktning',
        'audience'    => 'Före köp eller efter renovering',
        'price'       => 3900,
        'includes'    => ['Tätskikt, golvbrunn och fall', 'Fuktmätning i angränsande ytor', 'Protokoll med foton'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'badrumsbesiktning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Fuktmätning och fuktutredning',
        'audience'    => 'Vid misstänkt fukt eller skada',
        'price'       => 4900,
        'includes'    => ['Fuktmätning och okulär undersökning', 'Bedömning av orsak', 'Skriftlig rapport'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'fuktutredning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Statusbesiktning villa',
        'audience'    => 'Husägare som vill planera underhåll',
        'price'       => 8900,
        'includes'    => ['Genomgång av tak, fasad och grund', 'Prioriterad åtgärdslista', 'Protokoll med foton'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'statusbesiktning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Slutbesiktning renovering/tillbyggnad (privat)',
        'audience'    => 'Beställare av bygg- eller renoveringsarbete',
        'price'       => 7900,
        'includes'    => ['Genomgång av avtal och handlingar', 'Besiktning på plats', 'Besiktningsutlåtande'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'slutbesiktning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Garantibesiktning',
        'audience'    => 'Villaägare efter 2 eller 5 år',
        'price'       => 6900,
        'includes'    => ['Genomgång av slutbesiktningsutlåtandet', 'Besiktning av fel under garantitiden', 'Utlåtande'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'garantibesiktning',
        'preliminary' => true,
    ],
    [
        'name'        => 'Entreprenad- och BRF-uppdrag',
        'audience'    => 'Bostadsrättsföreningar och beställare',
        'price'       => null,
        'includes'    => ['Förbesiktning, slutbesiktning och särskild besiktning', 'Underhållsplan', 'Offert efter omfattning'],
        'featured'    => false,
        'example'     => false,
        'service'     => 'entreprenadbesiktning',
        'preliminary' => true,
    ],
];
