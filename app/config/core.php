<?php
define('ENV_PRODUCTION', false);
define('APP_HOST', 'http://atestboardproject.dev');
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://http://atestboardproject.dev/');

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);

// MySQL: board
define('DB_DSN', 'mysql:host=127.0.0.1;dbname=board');
define('DB_USERNAME', 'board_root');
define('DB_PASSWORD', 'board_root');
define('DB_ATTR_TIMEOUT', 3);
