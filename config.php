<?php

// Detect environment
$host = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? 'localhost');
$is_local = (
    strpos($host, 'localhost') !== false ||
    strpos($host, '127.0.0.1') !== false ||
    ($_SERVER['SERVER_NAME'] ?? '') === 'localhost' ||
    ($_SERVER['SERVER_NAME'] ?? '') === '127.0.0.1'
);

if ($is_local) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? '') == 443) ? 'https://' : 'http://';
    $docRoot = !empty($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : '';
    $dir = str_replace('\\', '/', __DIR__);
    $subDir = '';
    if (!empty($docRoot) && strpos($dir, $docRoot) === 0) {
        $subDir = substr($dir, strlen($docRoot));
    }
    define('BASE_URL', rtrim($protocol . $host . $subDir, '/'));
    define('ROOT_PATH', __DIR__);
} else {
    // cPanel production settings
    define('BASE_URL', 'https://heydoot.com');
    define('ROOT_PATH', __DIR__);
}

// Site information
define('SITE_NAME', 'HeyDoot');
define('SITE_EMAIL', 'info@heydoot.com');
define('PHONE_NUMBER', '+91 8375811375');
define('CALL_NUMBER', '+91 95000 69296');
define('WHATSAPP_NUMBER', '919500069296');

// Start session if needed
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Error reporting - turn off in production
if ($is_local) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>