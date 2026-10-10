<?php
declare(strict_types=1);
$illustration = content('imagery')[$illustrationSlug ?? ''] ?? null;
if ($illustration !== null):
    $imageBase = '/assets/img/services/' . $illustration['slot'];
?>
<figure class="service-image">
  <picture>
    <source type="image/avif" srcset="<?= e(asset($imageBase . '-480.avif')) ?> 480w, <?= e(asset($imageBase . '-960.avif')) ?> 960w" sizes="(max-width: 768px) 100vw, <?= !empty($illustrationWide) ? '960px' : '50vw' ?>">
    <img src="<?= e(asset($imageBase . '-960.webp')) ?>" srcset="<?= e(asset($imageBase . '-480.webp')) ?> 480w, <?= e(asset($imageBase . '-960.webp')) ?> 960w" sizes="(max-width: 768px) 100vw, <?= !empty($illustrationWide) ? '960px' : '50vw' ?>" width="960" height="540" loading="lazy" decoding="async" alt="<?= e($illustration['alt']) ?>">
  </picture>
  <figcaption>Illustrationsbild, skapad med AI.</figcaption>
</figure>
<?php endif; unset($illustration, $illustrationSlug, $illustrationWide, $imageBase); ?>
