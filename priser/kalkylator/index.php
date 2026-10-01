<?php
/**
 * /priser/kalkylator/ – priskalkylatorn. Markupen byggs här, räkneregler och
 * "från"-priser skrivs ut som data-attribut från content/tools.php och
 * content/precios.php, så att JS-filen (assets/js/tools/priskalkylator.js)
 * inte har några egna siffror.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'priskalkylator';
$tool = content('tools')[$slug];
$calc = $tool['calc'];

$basePrices = [];
foreach (content('precios') as $row) {
    if ($row['price'] !== null) {
        $basePrices[(string) $row['service']] = (int) $row['price'];
    }
}

$rules = [
    'services' => [],
    'sizes'    => $calc['sizes'],
    'addons'   => $calc['addons'],
    'outside'  => $calc['outside'],
    'round'    => $calc['round'],
];
foreach ($calc['services'] as $serviceSlug => $def) {
    $rules['services'][$serviceSlug] = $def + ['price' => $basePrices[$serviceSlug] ?? 0];
}

$formId         = 'priskalkylator';
$formNeed       = (string) $tool['formNeed'];
$formService    = $slug;
$formSourcePage = $tool['path'];
$formHeading    = 'Begär offert med ditt resultat';

ob_start();
?>
<div class="tool stack" data-tool="<?= e($slug) ?>"
     data-rules="<?= e(json_encode($rules, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>">
  <noscript><p class="note"><?= e(ui('tools.need_js')) ?></p></noscript>

  <form class="tool-form card" data-calc-form novalidate>
    <label class="field">
      <span>Tjänst</span>
      <select name="service">
        <?php foreach ($rules['services'] as $serviceSlug => $def): ?>
          <option value="<?= e($serviceSlug) ?>"><?= e($def['label']) ?></option>
        <?php endforeach; ?>
      </select>
    </label>

    <label class="field" data-size-field>
      <span>Boyta</span>
      <select name="size">
        <?php foreach ($calc['sizes'] as $i => $size): ?>
          <option value="<?= (int) $i ?>"><?= e($size['label']) ?></option>
        <?php endforeach; ?>
      </select>
    </label>

    <div class="tool-form__row" data-addon-row>
      <label class="field" data-addon="moisture">
        <span><?= e($calc['addons']['moisture']['label']) ?></span>
        <select name="moisture">
          <option value="0">Nej</option>
          <option value="1">Ja</option>
        </select>
      </label>
      <label class="field" data-addon="bathroom">
        <span><?= e($calc['addons']['bathroom']['label']) ?></span>
        <select name="bathroom">
          <?php for ($n = 0; $n <= (int) $calc['addons']['bathroom']['max']; $n++): ?>
            <option value="<?= $n ?>"><?= $n ?></option>
          <?php endfor; ?>
        </select>
      </label>
    </div>

    <label class="field">
      <span>Var ligger fastigheten?</span>
      <select name="outside">
        <option value="0">Stockholms län</option>
        <option value="1">Utanför Stockholms län</option>
      </select>
    </label>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" data-result hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <p class="tool-result__value" data-result-value></p>
    <dl class="tool-result__lines" data-result-lines></dl>
    <p class="note" data-result-note></p>
    <div class="btn-row">
      <a class="btn btn--primary" href="#offert" data-use-result><?= e(ui('tools.use_result')) ?></a>
      <button class="btn btn--secondary" type="button" data-restart><?= e(ui('tools.restart')) ?></button>
    </div>
  </div>

  <div id="offert" class="card">
    <?php require ROOT_DIR . '/partials/lead-form.php'; ?>
  </div>
</div>
<?php
$toolCalcHtml = (string) ob_get_clean();

require ROOT_DIR . '/templates/tool.php';
