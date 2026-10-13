<?php

declare(strict_types=1);

$designIndex = __DIR__ . '/designs5.html';

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

if (!is_file($designIndex)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Design index not found.';
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
readfile($designIndex);
