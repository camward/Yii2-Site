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

function getMonth($month){
    if($month == '01')
        echo 'jan';
    else if($month == '02')
        echo 'feb';
    else if($month == '03')
        echo 'mar';
    else if($month == '04')
        echo 'apr';
    else if($month == '05')
        echo 'may';
    else if($month == '06')
        echo 'iun';
    else if($month == '07')
        echo 'iul';
    else if($month == '08')
        echo 'avg';
    else if($month == '09')
        echo 'sen';
    else if($month == '10')
        echo 'oct';
    else if($month == '11')
        echo 'nov';
    else if($month == '12')
        echo 'dec';
}