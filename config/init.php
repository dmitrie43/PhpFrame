<?php

define("DEBUG", 1); //0 скрывать, 1 показывать ошибки
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/PhpShop/core');
define("LIBS", ROOT . '/vendor/PhpShop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');

//http://phpshop/public/index.php
$path = "{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
if (!empty($_SERVER['HTTPS'])) {
   $app_path = "https://$path";
} else {
   $app_path = "http://$path";
}
//http://phpshop/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
//http://phpshop
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '\vendor\autoload.php';