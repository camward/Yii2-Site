<?php

use yii\db\Migration;

class m161222_160955_gallery extends Migration
{
    public function safeUp()
    {
        $this->createTable('gallery', array(
            'id' => 'pk',
            'thumb' => 'VARCHAR(200) NOT NULL',
            'big' => 'VARCHAR(200) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->insert('gallery', array(
            'thumb' => 'thumb-1.jpg',
            'big' => 'page4-img1.jpg'
        ));

        $this->insert('gallery', array(
            'thumb' => 'thumb-2.jpg',
            'big' => 'page4-img2.jpg'
        ));

        $this->insert('gallery', array(
            'thumb' => 'thumb-3.jpg',
            'big' => 'page4-img3.jpg'
        ));

        $this->insert('gallery', array(
            'thumb' => 'thumb-1.jpg',
            'big' => 'page4-img1.jpg'
        ));

        $this->insert('gallery', array(
            'thumb' => 'thumb-2.jpg',
            'big' => 'page4-img2.jpg'
        ));

        $this->insert('gallery', array(
            'thumb' => 'thumb-3.jpg',
            'big' => 'page4-img3.jpg'
        ));
    }

    public function safeDown()
    {
        $this->dropTable('gallery');
    }
}
