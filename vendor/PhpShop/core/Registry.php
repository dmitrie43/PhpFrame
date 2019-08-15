<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 12.08.2019
 * Time: 11:21
 */

namespace PhpShop;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    public function setProp($name, $value) {
        self::$properties[$name] = $value;
    }

    public function getProp($name) {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProps() {
        return self::$properties;
    }
}