<?php
/**
 * Business facts. Everything the site says about itself comes from here — the
 * title suffix, the wordmark, the footer NAP, the JSON-LD, the WhatsApp links,
 * the deploy zip's name. Nothing in lib/, partials/ or templates/ hardcodes a
 * business name, a domain or a country.
 *
 * RULE: no fabricated facts. A value nobody has confirmed stays null, and the
 * partial that would show it hides instead or falls back to neutral phrasing.
 * Never a placeholder number, never an invented address.
 *
 * besiktningsmannen.se — leadsajt för fastighetsbesiktning i Stockholms län.
 * Utföraren (samarbetspartnern) namnges inte på sajten (plan.md §1.1).
 */

declare(strict_types=1);

return [
    // --- identity -----------------------------------------------------------
    'name'   => 'Besiktningsmannen',
    'domain' => 'besiktningsmannen.se',
    'slug'   => 'besiktningsmannen',
    'market' => 'se',

    'schemaType' => ['HomeAndConstructionBusiness'],

    // Tjänster ligger på rotnivå (/overlatelsebesiktning/); hubben listar dem.
    'servicesHub' => '/tjanster/',

    'paths' => [
        'contact' => '/kontakt/',
        'tools'   => '/priser/',            // kalkylatorn ligger under /priser/
        'guides'  => '/guider/',
        'blog'    => '/artiklar/',          // ingen blogg i v1 (plan.md §1.10)
        'prices'  => '/priser/',
        'privacy' => '/integritetspolicy/',
        'terms'   => '/integritetspolicy/', // inga separata villkor i v1
    ],

    // Den som driver sajten och är personuppgiftsansvarig (integritetspolicyn).
    'legalName'   => 'Marklund Sales & Marketing AB',
    'orgNumber'   => null,                       // org.nr — fylls i när Anton bekräftar
    'description' => 'Besiktningsman i Stockholms län: överlåtelsebesiktning, badrumsbesiktning, '
                   . 'fuktutredning, slutbesiktning och besiktning för BRF.',

    // --- contact ------------------------------------------------------------
    // Telefon: internationellt format, t.ex. '+46 8 123 456 78'. Medan den är
    // null visas ingen tel:-länk. WhatsApp används inte på den här sajten.
    'phone'    => null,
    'whatsapp' => null,
    // Visas INTE i sidfoten (spam). /kontakt/ skriver ut kontakt@… med JS.
    'email'    => null,
    'publicEmail' => 'kontakt@besiktningsmannen.se',

    // --- address ------------------------------------------------------------
    // Ingen gatuadress publiceras (ingen GBP, plan.md §8.2).
    'street'  => null,
    'city'    => null,
    'country' => 'Sverige',
    'hours'   => null,

    'areaServed' => [
        'Stockholms län', 'Stockholm', 'Nynäshamn', 'Haninge', 'Nacka', 'Huddinge',
        'Botkyrka', 'Södertälje', 'Tyresö', 'Värmdö', 'Lidingö', 'Danderyd', 'Täby',
        'Sollentuna', 'Järfälla', 'Solna', 'Sundbyberg', 'Upplands Väsby', 'Norrtälje',
    ],

    'openingHours' => [],

    // --- credentials and scale ----------------------------------------------
    'registration' => null,
    'foundedYear'  => null,
    'teamSize'     => null,

    // --- imagery ------------------------------------------------------------
    // Inga riktiga foton än; inga AI-bilder på personer (plan.md §1.9).
    'photos' => [
        'portrait' => null,
        'team'     => null,
    ],

    'socials'      => [],
    'stats'        => [],
    'testimonials' => [],
    'team'         => [],
    // Bara påståenden som gäller för uppdragens utförare. Certifikatnummer
    // läggs till först när de är bekräftade.
    'credentials'  => [],
];
