<?php
/**
 * Site footer (4 columns ), the WhatsApp button, and the closing scripts.
 * Every list comes from content/nav.php and content/site.php; an empty list —
 * tools before there are any, socials until the site supplies them — renders nothing at all
 * rather than an empty heading.
 *
 * This file is shared chrome: pages parameterise it, they do not edit it.
 */

declare(strict_types=1);

/* Prefixed locals: an include shares the caller's scope (see header.php). */
$footTools   = nav('tools');
$footSocials = nav('socials');
?>
<footer class="site-footer">
  <div class="container">
    <div class="site-footer__cols">

      <div>
        <a class="wordmark wordmark--sm" href="/">
          <svg class="wordmark__mark" viewBox="0 0 32 32" aria-hidden="true" focusable="false"><rect width="32" height="32" rx="8" class="wordmark__tile"/><path d="M7 16.5 16 9l9 7.5" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/><circle cx="11" cy="21.5" r="1.9" fill="#fff"/><circle cx="16" cy="21.5" r="1.9" fill="#fff"/><circle cx="21" cy="21.5" r="1.9" class="wordmark__dot"/></svg>
          <span class="wordmark__text"><?= e(site('name') ?: site('domain')) ?></span>
        </a>
        <p class="site-footer__blurb mt-3"><?= e(ui('footer.blurb')) ?></p>
      </div>

      <div>
        <h2><?= e(ui('nav.services')) ?></h2>
        <ul>
          <?php foreach (nav('services') as $footService): ?>
            <li><a href="<?= e($footService['path']) ?>"><?= e($footService['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div>
        <h2><?= e(ui('nav.firm')) ?></h2>
        <ul>
          <?php foreach (nav('firm') as $footLink): ?>
            <li><a href="<?= e($footLink['path']) ?>"><?= e($footLink['label']) ?></a></li>
          <?php endforeach; ?>
          <?php foreach ($footTools as $footTool): ?>
            <li><a href="<?= e($footTool['path']) ?>"><?= e($footTool['label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div>
        <h2><?= e(ui('footer.contact')) ?></h2>
        <ul>
          <?php if (site('phone')): ?>
            <li><a href="tel:+<?= e(phone_digits(site('phone'))) ?>"><?= e(site('phone')) ?></a></li>
          <?php endif; ?>
          <?php if (site('email')): ?>
            <li><a href="mailto:<?= e(site('email')) ?>"><?= e(site('email')) ?></a></li>
          <?php endif; ?>
          <?php if (site('street')): ?>
            <li><?= e(site('street')) ?><br><?= e(trim(site('city') . ', ' . site('country'), ', ')) ?></li>
          <?php elseif (site('city')): ?>
            <li><?= e(trim(site('city') . ', ' . site('country'), ', ')) ?></li>
          <?php endif; ?>
          <?php if (site('hours')): ?>
            <li><?= e(site('hours')) ?></li>
          <?php endif; ?>
          <li><a href="<?= e(site_path('contact')) ?>"><?= e(ui('nav.contact')) ?></a></li>
          <?php foreach ($footSocials as $footSocial): ?>
            <li><a href="<?= e($footSocial) ?>" rel="noopener me"><?= e(parse_url($footSocial, PHP_URL_HOST) ?: $footSocial) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <div class="site-footer__legal">
      <span>&copy; <?= date('Y') ?> <?= e(site('name')) ?>. <?= e(ui('footer.rights')) ?></span>
      <?php foreach (nav('legal') as $footLegal): ?>
        <a href="<?= e($footLegal['path']) ?>"><?= e($footLegal['label']) ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</footer>

<?php require ROOT_DIR . '/partials/whatsapp-fab.php'; ?>
<?php if (site('phone') && !site('whatsapp')): ?>
<div class="mobile-lead-actions" aria-label="<?= e(ui('nav.contact')) ?>">
  <a class="btn btn--secondary" href="tel:+<?= e(phone_digits(site('phone'))) ?>" data-call><?= e(ui('cta.call')) ?></a>
  <a class="btn btn--primary" href="<?= e($page['quotePath'] ?? site_path('contact')) ?>"><?= e(ui('cta.quote')) ?></a>
</div>
<?php endif; ?>

<script src="<?= e(asset('/assets/js/analytics.js')) ?>" defer></script>
<script src="<?= e(asset('/assets/js/site.js')) ?>" defer></script>
<?php if (site('whatsapp')): ?><script src="<?= e(asset('/assets/js/whatsapp-menu.js')) ?>" defer></script><?php endif; ?>
<script src="<?= e(asset('/assets/js/lead-form.js')) ?>" defer></script>
<?php if (!empty($page['leadSteps'])): ?><script src="<?= e(asset('/assets/js/lead-steps.js')) ?>" defer></script><?php endif; ?>
</body>
</html>
