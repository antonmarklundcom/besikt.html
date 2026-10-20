<?php
/**
 * The full price list on /priser/: every service with a record in
 * content/precios.php, grouped by the service clusters from content/ui.php.
 * Each heading links to its service page.
 */

declare(strict_types=1);

$priceData     = content('precios');
$priceClusters = content('ui')['clusters'] ?? [];
?>
<section class="section" id="prislista">
  <div class="container">
    <?php foreach ($priceClusters as $priceClusterKey => $priceClusterLabel): ?>
      <?php
      $priceItems = [];
      foreach (services() as $priceSlug => $priceService) {
          if (($priceService['cluster'] ?? '') === $priceClusterKey && isset($priceData['services'][$priceSlug])) {
              $priceItems[$priceSlug] = $priceService;
          }
      }
      if ($priceItems === []) {
          continue;
      }
      ?>
      <div class="price-cluster">
        <h2><?= e($priceClusterLabel) ?></h2>
        <div class="price-list">
          <?php foreach ($priceItems as $priceSlug => $priceService): ?>
            <?php $priceBlock = $priceData['services'][$priceSlug]; ?>
            <div class="price-list__item">
              <h3><a href="<?= e($priceBlock['morePath'] ?? $priceService['path']) ?>"><?= e($priceBlock['h2']) ?></a></h3>
              <p><?= e($priceBlock['text']) ?></p>
              <?php require ROOT_DIR . '/partials/price-table.php'; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
    <p class="note mt-4"><?= e($priceData['note'] ?? '') ?></p>
  </div>
</section>
<?php unset($priceData, $priceClusters, $priceClusterKey, $priceClusterLabel, $priceItems, $priceSlug, $priceService, $priceBlock);
