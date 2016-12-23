<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23.12.16
 * Time: 12:28
 */

namespace app\models;

use yii\db\ActiveRecord;

class Tour extends ActiveRecord
{
    public static function tableName()
    {
        return 'tour';
    }
}