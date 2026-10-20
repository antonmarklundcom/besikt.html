<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require_once dirname(__DIR__) . '/lib/bootstrap.php';
require_once ROOT_DIR . '/lib/lead-delivery.php';
$delivery = new BesiktLeadDelivery(BesiktLeadDelivery::config(ROOT_DIR), ROOT_DIR);
try {
    $command = $argv[1] ?? 'status';
    if ($command === 'status') $result = $delivery->status();
    elseif ($command === 'check') $result = $delivery->check();
    elseif ($command === 'retry') $result = $delivery->retry((int) ($argv[2] ?? 20));
    elseif ($command === 'heartbeat') $result = $delivery->heartbeat();
    elseif ($command === 'export-review') $result = $delivery->exportReview((string) ($argv[2] ?? ''), (int) ($argv[3] ?? 10));
    elseif ($command === 'retry-reviewed') $result = $delivery->retryReviewed((string) ($argv[2] ?? ''));
    else throw new RuntimeException('Unknown delivery command');
    echo BesiktLeadDelivery::json($result) . PHP_EOL;
    if (($result['unreadable'] ?? 0) > 0 || ($command === 'check' && !$result['canReceive']) || ($command === 'heartbeat' && !$result['reported'])) exit(1);
} catch (Throwable $error) {
    fwrite(STDERR, "Lead delivery check failed; review private configuration and directory permissions.\n");
    exit(1);
}
