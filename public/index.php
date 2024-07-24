<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необходима версия PHP 8 и выше');
}

require_once dirname(__DIR__) . '/config/init.php';

new \kk\App();
var_dump(\kk\App::$app->getProperties());