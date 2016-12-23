<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 23.12.16
 * Time: 17:14
 */

namespace app\models;

use yii\base\Model;

class Contact extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Сообщение'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['email', 'email'],
            ['text', 'trim'],
        ];
    }
}