<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.12.16
 * Time: 20:11
 */

namespace app\models;

use yii\db\ActiveRecord;

class Gallery extends ActiveRecord
{
    public static function tableName()
    {
        return 'gallery';
    }
}