<?php
$is_local = ($_SERVER['SERVER_NAME'] == 'localhost' ||
    $_SERVER['SERVER_NAME'] == '127.0.0.1');

if ($is_local) {
    define('BASE_URL', 'http://localhost/heydoot');
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/heydoot');
} else {
    define('BASE_URL', 'https://heydoot.com');
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
}
define('SITE_NAME', 'HeyDoot');
define('SITE_EMAIL', 'info@heydoot.com');
define('PHONE_NUMBER', '+91 97185 17228');
define('CALL_NUMBER', '+91 95000 69296');
define('WHATSAPP_NUMBER', '919500069296');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($is_local) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>