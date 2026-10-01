<?php
/** /om-oss/ – text och FAQ ligger i content/pages.php ('/om-oss/'). */

require __DIR__ . '/../lib/bootstrap.php';

$path = '/om-oss/';
$meta = page_meta($path);

$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => $path,
    'breadcrumbs' => [['label' => ui('nav.about'), 'path' => $path]],
    'faq'         => $meta['faq'] ?? [],
];

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <h1><?= e($meta['h1']) ?></h1>
        <?php if ($meta['lead'] !== ''): ?>
          <p class="lead"><?= e($meta['lead']) ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container stack">
      <?php foreach ($meta['sections'] as $block): ?>
        <div class="prose">
          <h2><?= e($block['h2']) ?></h2>
          <?php foreach ($block['body'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php if ($page['faq'] !== []): ?>
    <section class="section section--surface">
      <div class="container">
        <?php $faqItems = $page['faq']; ?>
        <?php require ROOT_DIR . '/partials/faq.php'; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php require ROOT_DIR . '/partials/cta-band.php'; ?>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
