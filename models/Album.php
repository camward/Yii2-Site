<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23.12.16
 * Time: 13:58
 */

namespace app\models;

use yii\db\ActiveRecord;

class Album extends ActiveRecord
{
    public static function tableName()
    {
        return 'album';
    }

    public function getTracks(){
        return $this->hasMany(Track::className(), ['album_id' => 'id']);
    }
}