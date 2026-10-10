<?php
declare(strict_types=1);
$contentSources = $referenceContent['sources'] ?? [];
if ($contentSources !== []): ?>
<section class="section">
  <aside class="container container--narrow source-note">
    <h2><?= e(ui('content_nav.sources')) ?></h2>
    <ul class="context-links">
      <?php foreach ($contentSources as $contentSource): ?>
        <li><a href="<?= e($contentSource['url']) ?>" rel="noopener"><?= e($contentSource['label']) ?></a></li>
      <?php endforeach; ?>
    </ul>
    <p class="note"><?= e(ui('content_nav.source_note')) ?></p>
  </aside>
</section>
<?php endif; unset($referenceContent, $contentSources, $contentSource); ?>
