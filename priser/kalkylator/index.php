<?php
/** Retired preliminary calculator; preserve the useful pricing destination. */
declare(strict_types=1);
$query = (string) ($_SERVER['QUERY_STRING'] ?? '');
header('Location: /priser/' . ($query !== '' ? '?' . $query : ''), true, 301);
exit;
