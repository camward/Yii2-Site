<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23.12.16
 * Time: 16:47
 */

namespace app\components;

use yii\base\Widget;

class SliderWidget extends Widget
{
    public function run(){
        return $this->render("slider");
    }
}