<?php
/**
 * Startsida — besiktningsmannen.se, design "Vit" (2026-10-20).
 *
 * Formuläret är CTA:n: ett formulär i tre steg (partials/lead-steps.php) ligger
 * i hjälten, så en besökare på mobilen når det direkt under rubriken. Därefter
 * tjänsterna som fotokort (länkar till varje tjänstesida), arbetsgången, vad
 * man ska jämföra i offerterna, område och priser, guider och FAQ.
 *
 * Bilderna är AI-genererade och märks som det (plan.md §1.9).
 * Allt som sägs om verksamheten kommer från content/site.php och content/ui.php.
 */

require __DIR__ . '/lib/bootstrap.php';

$meta = page_meta('/');
$homeFaq = (array) ($meta['faq'] ?? []);
$page = [
    'quotePath'   => '#offert',
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/',
    'faq'         => $homeFaq,
    'leadSteps'   => true,
];

$homeUi    = content('ui')['home'];
$homeTrust = (array) ($homeUi['trust'] ?? []);
$homeAreas = array_values(array_filter((array) site('areaServed'), static fn ($a) => $a !== 'Stockholms län'));
$homePhone = site('phone');
$homeImages = content('imagery');

/* Åtta tjänster med foto, resten som länkar under korten. */
$homeCards = ['husbesiktning', 'overlatelsebesiktning', 'lagenhetsbesiktning', 'badrumsbesiktning', 'fuktutredning', 'takbesiktning', 'statusbesiktning', 'brf'];
$homeMore  = array_values(array_diff(array_keys(services()), $homeCards));

/** One <picture> from the services image set (16:9, 480/960, plus 1440 for the hero). */
$homePicture = static function (string $slug, string $sizes, bool $eager = false, string $class = '') use ($homeImages): string {
    $image = $homeImages[$slug] ?? null;
    if ($image === null) {
        return '';
    }
    $base   = '/assets/img/services/' . $image['slot'];
    $widths = $image['slot'] === 'inspector' ? [480, 960, 1440] : [480, 960];
    $set    = static fn (string $ext): string => implode(', ', array_map(
        static fn (int $w): string => asset($base . '-' . $w . '.' . $ext) . ' ' . $w . 'w',
        $widths
    ));
    $load = $eager ? 'fetchpriority="high"' : 'loading="lazy"';

    return '<picture>'
        . '<source type="image/avif" srcset="' . e($set('avif')) . '" sizes="' . e($sizes) . '">'
        . '<img' . ($class !== '' ? ' class="' . e($class) . '"' : '') . ' src="' . e(asset($base . '-960.webp')) . '" srcset="' . e($set('webp')) . '" sizes="' . e($sizes) . '"'
        . ' width="960" height="540" ' . $load . ' decoding="async" alt="' . e($image['alt']) . '">'
        . '</picture>';
};

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">

  <!-- Hjälte: rubrik + formulär i tre steg, foto till höger ----------- -->
  <section class="hero hero--vit">
    <div class="container home-hero">
      <div class="home-hero__copy">
        <p class="eyebrow"><?= e($homeUi['eyebrow']) ?></p>
        <h1><?= e($meta['h1']) ?></h1>
        <p class="lead home-hero__lead"><?= e($homeUi['lead']) ?></p>
        <?php if ($homeTrust !== []): ?>
          <ul class="ticks">
            <?php foreach ($homeTrust as $homeTrustItem): ?>
              <li><?= e($homeTrustItem) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <div class="home-hero__form" id="offert">
          <?php $formId = 'start'; require ROOT_DIR . '/partials/lead-steps.php'; ?>
        </div>
      </div>

      <figure class="home-hero__media">
        <?= $homePicture('inspector', '(max-width: 960px) 100vw, 560px', true) ?>
        <figcaption class="home-hero__ai"><?= e($homeUi['ai_label']) ?></figcaption>
        <div class="home-hero__note">
          <strong><?= e($homeUi['hero_note_title']) ?></strong>
          <span><?= e($homeUi['hero_note_text']) ?></span>
        </div>
      </figure>
    </div>
  </section>

  <section class="strip" aria-label="<?= e(site('name')) ?>">
    <div class="container strip__inner">
      <?php foreach ($homeUi['strip'] as $homeStrip): ?>
        <div><strong><?= e($homeStrip['title']) ?></strong><span><?= e($homeStrip['text']) ?></span></div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Tjänster som fotokort -------------------------------------------- -->
  <section class="section" id="tjanster">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow"><?= e($homeUi['services_eyebrow']) ?></p>
        <h2><?= e($homeUi['services_title']) ?></h2>
        <p class="lead"><?= e($homeUi['services_lead']) ?></p>
      </div>

      <div class="photo-cards">
        <?php foreach ($homeCards as $homeSlug): ?>
          <?php $homeService = services($homeSlug); if ($homeService === null) { continue; } ?>
          <a class="photo-card" href="<?= e($homeService['path']) ?>">
            <?= $homePicture($homeSlug, '(max-width: 560px) 50vw, (max-width: 1020px) 50vw, 300px') ?>
            <span class="photo-card__body">
              <span class="photo-card__title"><?= preg_replace('/(?<=\p{L})(besiktning|mätning|utredning)/u', "\u{00AD}$1", e($homeService['navLabel'])) ?></span>
              <span class="photo-card__text"><?= e($homeUi['cards'][$homeSlug] ?? '') ?></span>
              <span class="photo-card__go"><?= e($homeUi['services_go']) ?> &rarr;</span>
            </span>
          </a>
        <?php endforeach; ?>
      </div>

      <?php if ($homeMore !== []): ?>
        <div class="more-links">
          <span class="more-links__label"><?= e($homeUi['services_more']) ?>:</span>
          <?php foreach ($homeMore as $homeSlug): ?>
            <a class="more-links__chip" href="<?= e(services($homeSlug)['path']) ?>"><?= e(services($homeSlug)['navLabel']) ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="unsure">
        <div class="unsure__copy">
          <h3 class="card-title"><?= e($homeUi['unsure_title']) ?></h3>
          <p><?= e($homeUi['unsure_text']) ?></p>
        </div>
        <a class="btn btn--primary" href="#offert" data-pick-service="annat"><?= e(ui('cta.talk')) ?></a>
      </div>
    </div>
  </section>

  <!-- Arbetsgång -------------------------------------------------------- -->
  <?php $processTone = 'surface'; $processId = 'sa-funkar-det'; require ROOT_DIR . '/partials/process.php'; ?>

  <!-- Jämför offerterna ------------------------------------------------- -->
  <section class="section">
    <div class="container compare">
      <div class="compare__copy">
        <p class="eyebrow"><?= e($homeUi['compare_eyebrow']) ?></p>
        <h2><?= e($homeUi['compare_title']) ?></h2>
        <p class="lead"><?= e($homeUi['compare_lead']) ?></p>
        <ul class="compare__list">
          <?php foreach ($homeUi['compare_items'] as $homeItem): ?>
            <li><strong><?= e($homeItem['title']) ?></strong><span><?= e($homeItem['text']) ?></span></li>
          <?php endforeach; ?>
        </ul>
        <div class="btn-row">
          <a class="btn btn--primary" href="#offert"><?= e($homeUi['compare_cta']) ?></a>
        </div>
        <?php $homeCompareGuide = content('guias')['jamfora-besiktningsoffert'] ?? null; ?>
        <?php if ($homeCompareGuide !== null): ?>
          <p><a href="<?= e($homeCompareGuide['path']) ?>"><?= e($homeUi['compare_guide']) ?> &rarr;</a></p>
        <?php endif; ?>
      </div>
      <div class="compare__media">
        <?= $homePicture('inspector', '(max-width: 900px) 100vw, 560px', false) ?>
      </div>
    </div>
  </section>

  <!-- Område + priser --------------------------------------------------- -->
  <section class="section section--surface" id="omrade">
    <div class="container split split--top">
      <div class="stack">
        <p class="eyebrow"><?= e($homeUi['area_eyebrow']) ?></p>
        <h2><?= e($homeUi['area_title']) ?></h2>
        <div class="prose"><p><?= e($homeUi['area_text']) ?></p></div>
        <?php if ($homeAreas !== []): ?>
          <ul class="area-list" aria-label="<?= e($homeUi['area_title']) ?>">
            <?php foreach ($homeAreas as $homeArea): ?>
              <li><?= e($homeArea) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="card home-prices">
        <p class="eyebrow"><?= e($homeUi['prices_eyebrow']) ?></p>
        <h2 class="card-title"><?= e($homeUi['prices_title']) ?></h2>
        <p><?= e($homeUi['prices_text']) ?></p>
        <div class="btn-row">
          <a class="btn btn--primary" href="<?= e(site_path('prices')) ?>"><?= e($homeUi['prices_cta']) ?></a>
          <a class="btn btn--secondary" href="#offert"><?= e(ui('cta.quote')) ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Guider ------------------------------------------------------------ -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <p class="eyebrow"><?= e($homeUi['guides_eyebrow']) ?></p>
        <h2><?= e(ui('content_nav.guides')) ?></h2>
      </div>
      <div class="grid grid--3">
        <?php foreach (['infor-husbesiktning', 'jamfora-besiktningsoffert', 'underhallsplan-checklista'] as $homeGuideSlug): ?>
          <?php $homeGuide = content('guias')[$homeGuideSlug] ?? null; if ($homeGuide === null) { continue; } ?>
          <a class="card card--link" href="<?= e($homeGuide['path']) ?>">
            <h3 class="card-title"><?= e($homeGuide['title']) ?></h3>
            <p><?= e($homeGuide['hero']['lead']) ?></p>
          </a>
        <?php endforeach; ?>
      </div>
      <p class="mt-4"><a href="<?= e(site_path('guides')) ?>">Se alla guider &rarr;</a></p>
    </div>
  </section>

  <!-- FAQ --------------------------------------------------------------- -->
  <?php if ($homeFaq !== []): ?>
    <section class="section section--surface" id="fragor">
      <div class="container container--narrow">
        <?php
        $faqItems = $homeFaq;
        $faqTitle = $homeUi['faq_title'];
        require ROOT_DIR . '/partials/faq.php';
        ?>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $ctaTitle = $homeUi['final_title'];
  $ctaLead  = $homeUi['final_text'];
  $ctaContactPath = '#offert';
  require ROOT_DIR . '/partials/cta-band.php';
  ?>

</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
