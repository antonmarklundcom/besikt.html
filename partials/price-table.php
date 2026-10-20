<?php
/**
 * Table of estimated price ranges for one service.
 *
 *   $priceBlock  array  one record from content('precios')['services']
 */

declare(strict_types=1);
?>
<div class="price-table-wrap">
  <table class="price-table">
    <thead>
      <tr><th scope="col"><?= e(ui('service.price_col_what')) ?></th><th scope="col"><?= e(ui('service.price_col_price')) ?></th></tr>
    </thead>
    <tbody>
      <?php foreach ($priceBlock['rows'] as [$priceWhat, $priceRange]): ?>
        <tr><th scope="row"><?= e($priceWhat) ?></th><td><?= e($priceRange) ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php unset($priceWhat, $priceRange);
