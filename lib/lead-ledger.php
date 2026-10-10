<?php
declare(strict_types=1);

/** Private, lock-protected ledger; retries update one record, new enquiries remain separate. */
function lead_ledger_write(string $dir, ?array $payload, string $outcome = ''): bool
{
    if (!is_dir($dir) && !@mkdir($dir, 0775, true) && !is_dir($dir)) {
        return false;
    }
    $lock = @fopen($dir . '/leads.lock', 'c');
    if ($lock === false || !flock($lock, LOCK_EX)) {
        if (is_resource($lock)) { fclose($lock); }
        return false;
    }
    $file = $dir . '/leads.log';
    $rows = [];
    $changed = false;
    $found = false;
    $cutoff = strtotime('-12 months');
    try {
        if (is_file($file)) {
            $in = @fopen($file, 'rb');
            if ($in === false) { return false; }
            while (($line = fgets($in)) !== false) {
                $row = json_decode($line, true);
                // Preserve malformed records for recovery rather than silently discarding them.
                if (!is_array($row)) { $rows[] = $line; continue; }
                $at = strtotime((string) ($row['at'] ?? ''));
                if ($at !== false && $at < $cutoff) { $changed = true; continue; }
                if ($payload !== null && !empty($payload['idempotency_key'])
                    && ($row['idempotency_key'] ?? '') === $payload['idempotency_key']) {
                    $existing = $row;
                    unset($existing['at'], $existing['outcome']);
                    if ($existing != $payload) { fclose($in); return false; }
                    $found = true;
                    if (($row['outcome'] ?? '') !== $outcome) { $row['outcome'] = $outcome; $changed = true; }
                    $line = json_encode($row, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE) . "\n";
                }
                $rows[] = $line;
            }
            if (!feof($in)) { fclose($in); return false; }
            fclose($in);
        }
        if ($payload !== null && !$found) {
            $rows[] = json_encode(['at' => gmdate('c'), 'outcome' => $outcome] + $payload,
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE) . "\n";
            $changed = true;
        }
        if (!$changed) { return true; }
        $tmp = $file . '.' . bin2hex(random_bytes(8)) . '.tmp';
        $body = implode('', $rows);
        if (@file_put_contents($tmp, $body, LOCK_EX) !== strlen($body)) {
            @unlink($tmp);
            return false;
        }
        if (!@rename($tmp, $file)) { @unlink($tmp); return false; }
        @chmod($file, 0660);
        return true;
    } finally {
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}
