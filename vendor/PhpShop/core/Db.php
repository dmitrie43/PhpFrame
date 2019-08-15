<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 14.08.2019
 * Time: 14:23
 */

namespace PhpShop;
require_once LIBS . '/rb.php';

class Db
{
    use TSingletone;

    protected function __construct() {
        $db = require_once CONFIG . '/database.php';
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if (!\R::testConnection()) {
            throw new \Exception("Нет соединения с бд", 505);
        }
        \R::freeze(true);
        if (DEBUG) {
            \R::debug(true);
        }
    }

}