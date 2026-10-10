<?php
/** Shared compact form; retries retain one key until success. */
declare(strict_types=1);
$formId = $formId ?? 'kontakt';
$formNeed = $formNeed ?? 'annat';
$formHeading = $formHeading ?? ui('form.legend');
$formService = $formService ?? (current_lead_slug() ?? '');
$formLead = $formService !== '' ? lead_value($formService) : lead_value_for_need($formNeed ?: 'annat');
$formTier = (string) $formLead['tier'];
$formToolResult = mb_substr((string) ($formToolResult ?? ''), 0, 500);
$sourcePage = $formSourcePage ?? ($page['path'] ?? '/');
$idempotencyKey = bin2hex(random_bytes(16));
$utmKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid'];
?>
<form class="lead-form" action="/enviar.php" method="post" data-lead-form>
  <?php if ($formHeading !== ''): ?><h2 class="card-title"><?= e($formHeading) ?></h2><?php endif; ?>
  <?php if ($formService !== ''): ?>
    <p class="form-service"><?= e(services($formService)['title'] ?? $formLead['menuLabel']) ?></p>
    <input type="hidden" name="service" value="<?= e($formService) ?>">
  <?php else: ?>
    <label class="field">
      <span><?= e(ui('form.service')) ?></span>
      <select name="service" required>
        <option value=""><?= e(ui('form.service_hint')) ?></option>
        <?php foreach (services() as $serviceKey => $serviceOption): ?>
          <option value="<?= e($serviceKey) ?>"><?= e($serviceOption['title']) ?></option>
        <?php endforeach; ?>
        <option value="annat"><?= e(ui('form.service_other')) ?></option>
      </select>
    </label>
  <?php endif; ?>
  <div class="lead-form__row">
    <label class="field">
      <span><?= e(ui('form.location')) ?></span>
      <input type="text" name="location" autocomplete="address-level2" maxlength="100" required placeholder="<?= e(ui('form.location_hint')) ?>">
    </label>
    <label class="field">
      <span><?= e(ui('form.name')) ?></span>
      <input type="text" name="name" autocomplete="name" maxlength="200" required>
    </label>
  </div>
  <div class="lead-form__row">
    <label class="field">
      <span><?= e(ui('form.phone')) ?></span>
      <input type="tel" name="phone" inputmode="tel" autocomplete="tel" maxlength="40" required placeholder="<?= e(ui('form.phone_hint')) ?>">
    </label>
    <label class="field">
      <span><?= e(ui('form.email')) ?></span>
      <input type="email" name="email" autocomplete="email" maxlength="200">
    </label>
  </div>
  <label class="field">
    <span><?= e(ui('form.message')) ?></span>
    <textarea name="message" rows="2" maxlength="3000" placeholder="<?= e(ui('form.message_hint')) ?>"></textarea>
  </label>
  <div class="honeypot" aria-hidden="true">
    <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
  </div>
  <input type="hidden" name="need" value="<?= e($formNeed ?: 'annat') ?>">
  <input type="hidden" name="form_id" value="<?= e($formId) ?>">
  <input type="hidden" name="source_page" value="<?= e($sourcePage) ?>">
  <input type="hidden" name="idempotency_key" value="<?= e($idempotencyKey) ?>">
  <input type="hidden" name="value_tier" value="<?= e($formTier) ?>">
  <input type="hidden" name="tool_result" value="<?= e($formToolResult) ?>" data-tool-result>
  <?php foreach ($utmKeys as $key): ?>
    <?php if (!empty($_GET[$key]) && is_string($_GET[$key])): ?>
      <input type="hidden" name="<?= e($key) ?>" value="<?= e(substr($_GET[$key], 0, 200)) ?>">
    <?php endif; ?>
  <?php endforeach; ?>
  <button class="btn btn--primary" type="submit" data-submit data-sending="<?= e(ui('form.sending')) ?>"><?= e(ui('form.submit')) ?></button>
  <p class="note"><?= e(ui('form.privacy_note')) ?> <a href="<?= e(site_path('privacy')) ?>"><?= e(ui('nav.privacy')) ?></a>.</p>
  <?php
  $thanksLead = $formLead;
  $thanksHidden = true;
  $thanksAttrs = 'data-form-ok tabindex="-1"';
  require ROOT_DIR . '/partials/lead-thanks.php';
  ?>
  <p class="form-status form-status--error" data-form-error hidden role="alert">
    <strong><?= e(ui('form.error_title')) ?></strong> <span data-error-message><?= e(ui('form.error_text')) ?></span>
  </p>
  <script type="application/json" data-form-messages><?= json_encode(content('ui')['form']['errors'], JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) ?></script>
</form>
<?php
unset($formId, $formNeed, $formHeading, $formService, $formLead, $formTier, $formToolResult, $formSourcePage, $sourcePage, $idempotencyKey, $utmKeys, $key, $serviceKey, $serviceOption);
