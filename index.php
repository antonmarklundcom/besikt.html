<?php
/**
 * Startsida — besiktningsmannen.se (fas T1).
 *
 * Formuläret först: offertformuläret ligger i hjälten (#offert), så en besökare
 * på mobilen når det direkt under rubriken. Därefter tjänsterna, varför oss
 * (med protokoll-panelen i stället för foton — det finns inga riktiga foton och
 * inga AI-bilder på personer, plan.md §1.9), arbetsgången, vad vi besiktigar,
 * område, priser och FAQ.
 *
 * Allt som sägs om verksamheten kommer från content/site.php och content/ui.php.
 * Telefon visas bara när site.phone är satt.
 */

require __DIR__ . '/lib/bootstrap.php';

$meta = page_meta('/');
$homeFaq = (array) ($meta['faq'] ?? []);
$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => '/',
    'faq'         => $homeFaq,
];

$homeUi        = content('ui')['home'];
$homeTrust     = (array) ($homeUi['trust'] ?? []);
$homeAreas     = array_values(array_filter((array) site('areaServed'), static fn ($a) => $a !== 'Stockholms län'));
$homePhone     = site('phone');

$homeCredentials = array_values(array_filter((array) site('credentials')));
if ($homeCredentials === []) {
    $homeCredentials = content('ui')['about']['credentials'];
}

$homeTestimonials = array_filter(
    (array) site('testimonials'),
    static fn ($t) => is_array($t) && !empty($t['quote'])
);

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">

  <!-- Hjälte + offertformulär ---------------------------------------- -->
  <section class="hero hero--lead">
    <div class="container hero__grid hero__grid--form">

      <div class="hero__copy">
        <span class="pill">
          <span class="pill__dot" aria-hidden="true"></span>
          <?= e($homeUi['eyebrow']) ?>
        </span>

        <h1><?= e($homeUi['h1_lead']) ?><span class="accent"><?= e($homeUi['h1_accent']) ?></span></h1>

        <p class="lead hero__lead"><?= e($homeUi['lead']) ?></p>

        <?php if ($homeTrust !== []): ?>
          <ul class="checklist checklist--on-ink">
            <?php foreach ($homeTrust as $homeTrustItem): ?>
              <li><span><?= e($homeTrustItem) ?></span></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <div class="btn-row">
          <?php if ($homePhone): ?>
            <a class="btn btn--secondary" href="tel:+<?= e(phone_digits($homePhone)) ?>" data-call>
              <?= e(ui('cta.call') . ' ' . $homePhone) ?>
            </a>
          <?php endif; ?>
          <a class="btn btn--secondary" href="#tjanster"><?= e(ui('cta.see_included')) ?></a>
        </div>
      </div>

      <div class="hero__form" id="offert">
        <?php
        $formId      = 'start';
        $formHeading = $homeUi['form_title'];
        require ROOT_DIR . '/partials/lead-form.php';
        ?>
        <p class="note hero__form-note"><?= e($homeUi['form_lead']) ?></p>
      </div>

    </div>
  </section>

  <!-- Tjänster ---------------------------------------------------------- -->
  <section class="section section--surface" id="tjanster">
    <div class="container">
      <div class="section-head section-head--split">
        <div class="section-head__text">
          <p class="eyebrow"><?= e($homeUi['services_eyebrow']) ?></p>
          <h2><?= e($homeUi['services_title']) ?></h2>
        </div>
        <p class="section-head__aside"><?= e($homeUi['services_lead']) ?></p>
      </div>

      <?php
      /* Alla tjänster utom undersidor (underhållsplanen ligger under BRF). */
      $gridSlugs = array_keys(array_filter(services(), static fn ($s) => empty($s['parent'])));
      $gridNumbered = true;
      require ROOT_DIR . '/partials/service-card-grid.php';
      ?>

      <div class="unsure">
        <div class="unsure__copy">
          <h3 class="card-title"><?= e($homeUi['unsure_title']) ?></h3>
          <p><?= e($homeUi['unsure_text']) ?></p>
        </div>
        <a class="btn btn--primary" href="#offert"><?= e(ui('cta.talk')) ?></a>
      </div>

      <p class="mt-4"><a href="<?= e(services_hub_path()) ?>"><?= e(ui('nav.all_services')) ?> &rarr;</a></p>
    </div>
  </section>

  <!-- Varför oss: protokoll-panelen i stället för foton ----------------- -->
  <section class="section">
    <div class="container split">
      <div class="stack">
        <p class="eyebrow"><?= e(ui('about.eyebrow')) ?></p>
        <h2><?= e(ui('about.title')) ?></h2>
        <div class="prose"><p><?= e(ui('about.text')) ?></p></div>
        <ul class="checklist">
          <?php foreach ($homeCredentials as $homeCredential): ?>
            <li><span><?= e($homeCredential) ?></span></li>
          <?php endforeach; ?>
        </ul>
        <p><a href="/om-oss/"><?= e(ui('nav.about')) ?> &rarr;</a></p>
      </div>
      <div class="home-protocol">
        <?php require ROOT_DIR . '/partials/status-panel.php'; ?>
      </div>
    </div>
  </section>

  <!-- Arbetsgång -------------------------------------------------------- -->
  <?php require ROOT_DIR . '/partials/process.php'; ?>

  <!-- Omdömen, eller "vi besiktigar" tills det finns omdömen ------------ -->
  <?php if ($homeTestimonials !== []): ?>
    <?php require ROOT_DIR . '/partials/testimonials.php'; ?>
  <?php else: ?>
    <?php require ROOT_DIR . '/partials/industries.php'; ?>
  <?php endif; ?>

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

  <!-- FAQ --------------------------------------------------------------- -->
  <?php if ($homeFaq !== []): ?>
    <section class="section" id="fragor">
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
  $ctaContactPath = '#offert';
  require ROOT_DIR . '/partials/cta-band.php';
  ?>

</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
