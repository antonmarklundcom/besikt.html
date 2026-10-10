<?php
declare(strict_types=1);
require dirname(__DIR__) . '/lib/lead-ledger.php';
$base = getenv('BESIKT_TEST_TEMP') ?: sys_get_temp_dir();
$dir = $base . '/besikt-ledger-' . bin2hex(random_bytes(8));
mkdir($dir, 0775, true);
$check = static function (bool $ok, string $message): void { if (!$ok) { throw new RuntimeException($message); } };
try {
    file_put_contents($dir . '/leads.log', json_encode(['at' => '2020-01-01', 'name' => 'Expired synthetic record']) . "\n");
    $payload = ['name' => '=SUM(1,1)', 'phone' => '+46700000000', 'idempotency_key' => 'synthetic-ledger-key', 'fields' => ['servicio' => 'Takbesiktning', 'ort' => 'Stockholm']];
    $check(lead_ledger_write($dir, $payload, 'degraded:not-configured'), 'first save');
    $check(lead_ledger_write($dir, $payload, 'degraded:not-configured'), 'retry');
    $rows = file($dir . '/leads.log', FILE_IGNORE_NEW_LINES);
    $check(count($rows) === 1, 'expired record removed and retry deduplicated');
    $check(!lead_ledger_write($dir, array_replace($payload, ['name' => 'Conflicting synthetic request']), 'degraded:not-configured'), 'conflict rejected');
    $check(lead_ledger_write($dir, $payload, 'crm:201'), 'outcome updated');
    $check(json_decode((string) file_get_contents($dir . '/leads.log'), true)['outcome'] === 'crm:201', 'CRM outcome retained');
    $check(lead_ledger_write($dir, array_replace($payload, ['idempotency_key' => 'synthetic-new-key']), 'degraded:not-configured'), 'new enquiry from same phone');
    $check(count(file($dir . '/leads.log')) === 2, 'new enquiry retained separately');
    $export = shell_exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(dirname(__DIR__) . '/deploy/leads-to-csv.php') . ' ' . escapeshellarg($dir . '/leads.log'));
    $check(is_string($export) && str_contains($export, "'=SUM"), 'CSV formula protected');
    echo "PASS: retention, retry deduplication, conflict protection, CRM outcome, separate enquiries and safe CSV export.\n";
} finally {
    // This directory was created above with a fixed synthetic-only prefix.
    foreach (glob($dir . '/*') ?: [] as $file) { unlink($file); }
    rmdir($dir);
}
