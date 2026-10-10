<?php
/**
 * A plain content page from content/pages.php: the H1 and lead from the page
 * record, then its optional 'sections' as prose, then the CTA band. Used by the
 * legal pages and by any page whose whole content is text.
 *
 * Every route file that uses it is three lines: require bootstrap, set $path,
 * require this file.
 *
 *   $path  string  required — the key in content/pages.php
 *
 * A page whose record has 'stub' => true renders through
 * templates/page-stub.php instead; the route file decides which.
 */

declare(strict_types=1);

/** @var string $path */
$meta = page_meta($path ?? '/');

if ($meta === []) {
    http_response_code(404);
    require ROOT_DIR . '/404.php';
    return;
}

$page = [
    'quotePath' => $path === site_path('prices') ? '#offert' : site_path('contact'),
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => $path,
    'faq'         => $meta['faq'] ?? [],
    'breadcrumbs' => [['label' => $meta['title'], 'path' => $path]],
    'noindex'     => !empty($meta['noindex']) || isset($_GET['enviado']) || isset($_GET['error']),
];

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <h1><?= e($meta['h1'] !== '' ? $meta['h1'] : $meta['title']) ?></h1>
        <?php if (!empty($meta['lead'])): ?>
          <p class="lead"><?= e($meta['lead']) ?></p>
        <?php endif; ?>
        <?php if ($path === site_path('prices')): ?><div class="btn-row mt-4"><a class="btn btn--primary" href="#offert"><?= e(ui('cta.quote')) ?></a></div><?php endif; ?>
      </div>
    </div>
  </section>

  <?php if (!empty($meta['sections'])): ?>
    <section class="section">
      <div class="container stack">
        <?php foreach ($meta['sections'] as $pageBlock): ?>
          <div class="prose">
            <?php if (!empty($pageBlock['h2'])): ?>
              <h2><?= e($pageBlock['h2']) ?></h2>
            <?php endif; ?>
            <?php foreach ($pageBlock['body'] ?? [] as $pageParagraph): ?>
              <p><?= e($pageParagraph) ?></p>
            <?php endforeach; ?>
            <?php if (!empty($pageBlock['links'])): ?>
              <ul class="context-links">
                <?php foreach ($pageBlock['links'] as $pageLink): ?>
                  <li><a href="<?= e($pageLink['path']) ?>"><?= e($pageLink['label']) ?></a></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if (!empty($meta['faq'])): ?><section class="section section--surface"><div class="container"><?php $faqItems = $meta['faq']; require ROOT_DIR . '/partials/faq.php'; ?></div></section><?php endif; ?>
  <?php if ($path === site_path('prices')): ?><section class="section" id="offert"><div class="container container--narrow"><?php $formId = 'priser'; require ROOT_DIR . '/partials/lead-form.php'; ?></div></section><?php $ctaContactPath = '#offert'; endif; ?>
  <?php require ROOT_DIR . '/partials/cta-band.php'; ?>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
