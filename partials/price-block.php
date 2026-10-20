<?php
/**
 * "Vad kostar …?" on a service page: an H2 that answers the price search, a
 * short answer, a small table of estimated ranges and a link to /priser/.
 * Figures come from content/precios.php.
 *
 *   $priceBlock  array  one record from content('precios')['services']
 */

declare(strict_types=1);

$priceNote = content('precios')['note'] ?? '';
?>
<section class="section" id="pris">
  <div class="container price-block">
    <div class="price-block__copy">
      <p class="eyebrow"><?= e(ui('content_nav.price')) ?></p>
      <h2><?= e($priceBlock['h2']) ?></h2>
      <p class="lead"><?= e($priceBlock['text']) ?></p>
      <p class="note"><?= e($priceNote) ?></p>
      <div class="btn-row">
        <a class="btn btn--primary" href="#offert"><?= e(ui('service.price_cta')) ?></a>
        <a class="btn btn--secondary" href="<?= e(site_path('prices')) ?>"><?= e(ui('service.price_all')) ?></a>
      </div>
    </div>
    <?php require ROOT_DIR . '/partials/price-table.php'; ?>
  </div>
</section>
<?php unset($priceBlock, $priceNote);
