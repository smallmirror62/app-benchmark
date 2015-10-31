<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

defined('LEAPS_DEBUG') or define('LEAPS_DEBUG', true);
defined('LEAPS_ENV') or define('LEAPS_ENV', 'test');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/leaps/framework/Leaps.php');
$config = require(__DIR__ . '/../tests/codeception/config/acceptance.php');
(new Leaps\Web\Application($config))->run();
