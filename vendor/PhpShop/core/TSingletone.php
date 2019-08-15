<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 12.08.2019
 * Time: 11:22
 */

namespace PhpShop;


trait TSingletone
{
    private static $instance;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}