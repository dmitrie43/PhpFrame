<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 12.08.2019
 * Time: 11:05
 */

namespace PhpShop;

class App
{
    public static $app;

    public function __construct() {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);
    }

    protected function getParams() {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProp($key, $value);
            }
        }
    }
}