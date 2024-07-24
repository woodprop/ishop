<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/kk');
define("HELPERS", ROOT . '/vendor/kk/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'ishop');
define("PATH", 'http://ishop.loc');
define("ADMIN", 'http://ishop.loc/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');


require_once ROOT . '/vendor/autoload.php';
