<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.12.16
 * Time: 14:08
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}