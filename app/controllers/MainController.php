<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 13.08.2019
 * Time: 11:57
 */

namespace app\controllers;


use PhpShop\Cache;

class MainController extends AppController
{
    public function indexAction() {
        $posts = \R::findAll('test');
        $this->setMeta('Название сайта', 'Описание', 'Ключевые');
        $name = 'John';
        $age = 30;
        $cache = Cache::instance();
//        $cache->set('test', $name);
        $data = $cache->get('test');
        debug($data);
        $this->setData(compact('name', 'age', 'posts'));
    }
}