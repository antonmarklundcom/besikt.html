<?php
/** Loopback-only fixture; no real credentials or customer records. */
declare(strict_types=1);
$dir = getenv('SITE_VERIFY_DIR');
if (!is_string($dir) || !is_dir($dir) || ($_SERVER['REQUEST_URI'] ?? '') !== '/api/v1/leads') {
    http_response_code(404);
    exit;
}
$payload = json_decode((string) file_get_contents('php://input'), true);
file_put_contents($dir . '/requests.ndjson', json_encode([
    'method' => $_SERVER['REQUEST_METHOD'],
    'key' => $_SERVER['HTTP_X_API_KEY'] ?? '',
    'payload' => $payload,
]) . "\n", FILE_APPEND | LOCK_EX);
header('Content-Type: application/json');
http_response_code((int) file_get_contents($dir . '/status'));
echo is_file($dir . '/response') ? file_get_contents($dir . '/response')
    : '{"contactId":"AAAAAAAAAAAAAAAAAAAAAAAAAA","submissionId":"BBBBBBBBBBBBBBBBBBBBBBBBBB"}';
