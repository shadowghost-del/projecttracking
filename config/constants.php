<?php
// config/constants.php
define('SITE_NAME', 'ระบบติดตามแผนงาน');
define('BASE_URL', 'http://localhost/projecttracking');
define('APP_ROOT', dirname(dirname(__FILE__)));

// Paths
define('CORE_PATH', APP_ROOT . '/core/');
define('CONTROLLER_PATH', APP_ROOT . '/controllers/');
define('MODEL_PATH', APP_ROOT . '/models/');
define('VIEW_PATH', APP_ROOT . '/views/');
define('ASSETS_PATH', APP_ROOT . '/public/assets/');

// URLs
define('ASSETS_URL', BASE_URL . '/public/assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('JS_URL', ASSETS_URL . 'js/');

// ระบบ
define('DEBUG_MODE', true);
define('SESSION_LIFETIME', 86400);

// โหลดฐานข้อมูล
require_once 'database.php';
?>

