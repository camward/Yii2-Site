<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Video extends ActiveRecord
{
    public static function tableName()
    {
        return 'video';
    }
}
