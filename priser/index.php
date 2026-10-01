<?php
/**
 * /priser/ – prislista, vad som påverkar priset, FAQ och länk till kalkylatorn.
 * Texten ligger i content/pages.php ('/priser/'), beloppen i content/precios.php.
 */

require __DIR__ . '/../lib/bootstrap.php';

$path = site_path('prices');
$meta = page_meta($path);

$page = [
    'title'       => $meta['title'],
    'description' => $meta['description'],
    'path'        => $path,
    'breadcrumbs' => [['label' => ui('nav.pricing'), 'path' => $path]],
    'faq'         => $meta['faq'] ?? [],
];

$calcTool = content('tools')['priskalkylator'] ?? null;

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
  <section class="page-hero">
    <div class="container">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="page-hero__inner">
        <h1><?= e($meta['h1']) ?></h1>
        <p class="lead"><?= e($meta['lead']) ?></p>
      </div>
    </div>
  </section>

  <?php if ($calcTool !== null && !empty($meta['calcTeaser'])): ?>
    <section class="section">
      <div class="container">
        <a class="card card--link" href="<?= e($calcTool['path']) ?>">
          <h2 class="card-title"><?= e($meta['calcTeaser']['title']) ?></h2>
          <p class="card__text"><?= e($meta['calcTeaser']['text']) ?></p>
          <p class="card__text"><strong><?= e($meta['calcTeaser']['label']) ?> →</strong></p>
        </a>
      </div>
    </section>
  <?php endif; ?>

  <section class="section section--surface" id="prislista">
    <div class="container stack">
      <h2>Prislista – från-priser</h2>
      <div class="table-scroll">
        <table class="compare-table">
          <thead>
            <tr>
              <th scope="col">Tjänst</th>
              <th scope="col">Passar</th>
              <th scope="col">Pris</th>
              <th scope="col">Ingår</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach (content('precios') as $row): ?>
              <?php $rowService = services((string) $row['service']); ?>
              <tr>
                <th scope="row">
                  <?php if ($rowService !== null): ?>
                    <a href="<?= e($rowService['path']) ?>"><?= e($row['name']) ?></a>
                  <?php else: ?>
                    <?= e($row['name']) ?>
                  <?php endif; ?>
                </th>
                <td><?= e($row['audience']) ?></td>
                <td>
                  <?php if ($row['price'] === null): ?>
                    <?= e(ui('pricing.quote')) ?>
                  <?php else: ?>
                    <?= e(ui('pricing.from')) ?> <?= e(fmt_money((int) $row['price'])) ?>
                  <?php endif; ?>
                </td>
                <td><?= e(implode(' · ', $row['includes'])) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <p class="note"><?= e(ui('pricing.note')) ?> Priserna är riktpriser – fast pris i offerten.</p>
      <div class="btn-row">
        <a class="btn btn--primary" href="<?= e(site_path('contact')) ?>"><?= e(ui('pricing.cta')) ?></a>
        <?php if ($calcTool !== null): ?>
          <a class="btn btn--secondary" href="<?= e($calcTool['path']) ?>"><?= e($meta['calcTeaser']['label'] ?? 'Priskalkylator') ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container stack">
      <?php foreach ($meta['sections'] ?? [] as $block): ?>
        <div class="prose">
          <h2><?= e($block['h2']) ?></h2>
          <?php foreach ($block['body'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <?php if (!empty($meta['faq'])): ?>
    <section class="section section--surface">
      <div class="container">
        <?php $faqItems = $meta['faq']; ?>
        <?php require ROOT_DIR . '/partials/faq.php'; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php require ROOT_DIR . '/partials/cta-band.php'; ?>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
