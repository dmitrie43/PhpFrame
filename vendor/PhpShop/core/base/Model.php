<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 14.08.2019
 * Time: 14:15
 */

namespace PhpShop\base;

use PhpShop\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instance();
    }

}