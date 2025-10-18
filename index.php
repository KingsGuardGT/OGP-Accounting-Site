<?php
// Front controller for hosts that cannot point the document root to /public
// or ignore .htaccess at the repository root.

$publicIndex = __DIR__ . '/public/index.php';

if (file_exists($publicIndex)) {
    require $publicIndex;
    exit;
}

http_response_code(503);
header('Content-Type: text/plain');
echo "Laravel public/index.php not found. Ensure the application is deployed correctly.";
