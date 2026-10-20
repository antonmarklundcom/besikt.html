<?php
/**
 * The homepage's three-step quote form (design "Vit", 2026-10-20).
 *
 * Same contract as partials/lead-form.php: it posts to /enviar.php with the
 * same field names, carries data-lead-form so assets/js/lead-form.js upgrades
 * it to an inline thank-you, and works as one long form without JavaScript.
 * assets/js/lead-steps.js splits it into steps: service, then place and time,
 * then contact details.
 *
 *   $formId  string  form_id sent with the lead (default 'start')
 */

declare(strict_types=1);

$stepsFormId   = $formId ?? 'start';
$stepsUi       = content('ui')['home']['form'];
$stepsFormUi   = content('ui')['form'];
$stepsLead     = lead_value_for_need('annat');
$stepsKey      = bin2hex(random_bytes(16));
$stepsSource   = $page['path'] ?? '/';
$stepsUtmKeys  = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid'];
$stepsTotal    = 3;
?>
<form class="lead-form lead-steps" action="/enviar.php" method="post" data-lead-form data-lead-steps>
  <div class="lead-steps__head" data-steps-head>
    <h2 class="lead-steps__title"><?= e($stepsUi['title']) ?></h2>
    <span class="lead-steps__count" data-steps-label data-template="<?= e($stepsUi['step_label']) ?>"><?= e(sprintf($stepsUi['step_label'], 1, $stepsTotal)) ?></span>
  </div>
  <div class="lead-steps__bar" aria-hidden="true" data-steps-bar><span></span></div>

  <fieldset class="lead-steps__step" data-step>
    <legend><?= e($stepsUi['step1']) ?></legend>
    <div class="tiles">
      <?php $stepsFirst = true; foreach ($stepsUi['options'] as $stepsValue => $stepsLabel): ?>
        <label class="tile<?= $stepsValue === 'annat' ? ' tile--wide' : '' ?>">
          <input type="radio" name="service" value="<?= e($stepsValue) ?>"<?= $stepsFirst ? ' required' : '' ?>>
          <span><?= e($stepsLabel) ?></span>
        </label>
      <?php $stepsFirst = false; endforeach; ?>
    </div>
    <div class="lead-steps__nav">
      <button class="btn btn--primary" type="button" data-step-next><?= e($stepsUi['next']) ?></button>
    </div>
    <p class="lead-steps__micro"><?= e($stepsUi['micro']) ?></p>
  </fieldset>

  <fieldset class="lead-steps__step" data-step>
    <legend><?= e($stepsUi['step2']) ?></legend>
    <label class="field">
      <span><?= e($stepsFormUi['location']) ?></span>
      <input type="text" name="location" autocomplete="address-level2" maxlength="100" required placeholder="<?= e($stepsUi['location_hint']) ?>">
    </label>
    <div class="lead-form__row">
      <label class="field">
        <span><?= e($stepsFormUi['property']) ?></span>
        <select name="property_type">
          <option value=""><?= e($stepsFormUi['property_none']) ?></option>
          <?php foreach ($stepsFormUi['property_types'] as $stepsValue => $stepsLabel): ?>
            <option value="<?= e($stepsValue) ?>"><?= e($stepsLabel) ?></option>
          <?php endforeach; ?>
        </select>
      </label>
      <label class="field">
        <span><?= e($stepsFormUi['timing']) ?></span>
        <select name="timing">
          <?php foreach ($stepsFormUi['timing_options'] as $stepsValue => $stepsLabel): ?>
            <option value="<?= e($stepsValue) ?>"><?= e($stepsLabel) ?></option>
          <?php endforeach; ?>
        </select>
      </label>
    </div>
    <label class="field">
      <span><?= e($stepsFormUi['message']) ?></span>
      <textarea name="message" rows="2" maxlength="3000" placeholder="<?= e($stepsUi['message_hint']) ?>"></textarea>
    </label>
    <div class="lead-steps__nav">
      <button class="btn btn--secondary" type="button" data-step-back><?= e($stepsUi['back']) ?></button>
      <button class="btn btn--primary" type="button" data-step-next><?= e($stepsUi['next']) ?></button>
    </div>
  </fieldset>

  <fieldset class="lead-steps__step" data-step>
    <legend><?= e($stepsUi['step3']) ?></legend>
    <label class="field">
      <span><?= e($stepsFormUi['name']) ?></span>
      <input type="text" name="name" autocomplete="name" maxlength="200" required>
    </label>
    <div class="lead-form__row">
      <label class="field">
        <span><?= e($stepsFormUi['phone']) ?></span>
        <input type="tel" name="phone" inputmode="tel" autocomplete="tel" maxlength="40" required placeholder="<?= e($stepsFormUi['phone_hint']) ?>">
      </label>
      <label class="field">
        <span><?= e($stepsFormUi['email']) ?></span>
        <input type="email" name="email" autocomplete="email" maxlength="200">
      </label>
    </div>
    <div class="honeypot" aria-hidden="true">
      <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
    </div>
    <div class="lead-steps__nav">
      <button class="btn btn--secondary" type="button" data-step-back><?= e($stepsUi['back']) ?></button>
      <button class="btn btn--primary" type="submit" data-submit data-sending="<?= e($stepsFormUi['sending']) ?>"><?= e($stepsUi['submit']) ?></button>
    </div>
    <p class="note"><?= e($stepsFormUi['privacy_note']) ?> <a href="<?= e(site_path('privacy')) ?>"><?= e(ui('nav.privacy')) ?></a>.</p>
  </fieldset>

  <input type="hidden" name="need" value="annat">
  <input type="hidden" name="form_id" value="<?= e($stepsFormId) ?>">
  <input type="hidden" name="source_page" value="<?= e($stepsSource) ?>">
  <input type="hidden" name="idempotency_key" value="<?= e($stepsKey) ?>">
  <input type="hidden" name="value_tier" value="<?= e((string) $stepsLead['tier']) ?>">
  <input type="hidden" name="tool_result" value="" data-tool-result>
  <?php foreach ($stepsUtmKeys as $stepsUtm): ?>
    <?php if (!empty($_GET[$stepsUtm]) && is_string($_GET[$stepsUtm])): ?>
      <input type="hidden" name="<?= e($stepsUtm) ?>" value="<?= e(substr($_GET[$stepsUtm], 0, 200)) ?>">
    <?php endif; ?>
  <?php endforeach; ?>

  <?php
  $thanksLead = $stepsLead;
  $thanksHidden = true;
  $thanksAttrs = 'data-form-ok tabindex="-1"';
  require ROOT_DIR . '/partials/lead-thanks.php';
  ?>
  <p class="form-status form-status--error" data-form-error hidden role="alert">
    <strong><?= e($stepsFormUi['error_title']) ?></strong> <span data-error-message><?= e($stepsFormUi['error_text']) ?></span>
  </p>
  <script type="application/json" data-form-messages><?= json_encode($stepsFormUi['errors'], JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) ?></script>
</form>
<?php
unset($formId, $stepsFormId, $stepsUi, $stepsFormUi, $stepsLead, $stepsKey, $stepsSource, $stepsUtmKeys, $stepsUtm, $stepsTotal, $stepsFirst, $stepsValue, $stepsLabel, $thanksLead, $thanksHidden, $thanksAttrs);
