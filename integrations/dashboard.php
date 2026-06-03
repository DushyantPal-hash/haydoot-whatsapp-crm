<?php
require_once dirname(__DIR__) . '/config.php';

// Send proper 404 status
http_response_code(404);

// Set the page parameter
$_GET['page'] = 'Dashboard Page';

// Include the 404 page
include ROOT_PATH . '/404.php';
exit;
?>