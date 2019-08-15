<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 13.08.2019
 * Time: 12:18
 */

namespace app\controllers;

use app\models\AppModel;
use PhpShop\base\Controller;

class AppController extends Controller
{
    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
    }
}