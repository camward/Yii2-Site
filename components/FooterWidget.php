<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.12.16
 * Time: 15:02
 */

namespace app\components;

use yii\base\Widget;

class FooterWidget extends Widget
{
    public function run(){
        return $this->render("footer");
    }
}