<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(403); exit; }
require dirname(__DIR__) . '/lib/lead-ledger.php';
$dir = $argv[1] ?? dirname(__DIR__) . '/logs';
if (!lead_ledger_write($dir, null)) { fwrite(STDERR, "Retention cleanup failed.\n"); exit(1); }
echo "Retention cleanup complete (12 months).\n";
