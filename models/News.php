<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.12.16
 * Time: 20:51
 */

namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }
}