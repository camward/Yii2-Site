<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23.12.16
 * Time: 13:58
 */

namespace app\models;

use yii\db\ActiveRecord;

class Track extends ActiveRecord
{
    public static function tableName()
    {
        return 'track';
    }
}