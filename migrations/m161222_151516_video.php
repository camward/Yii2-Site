<?php

use yii\db\Migration;

class m161222_151516_video extends Migration
{
    public function safeUp()
    {
        $this->createTable('video', array(
            'id' => 'pk',
            'images' => 'VARCHAR(200) NOT NULL',
            'video' => 'VARCHAR(200) NOT NULL',
            'description' => 'VARCHAR(200) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->insert('video', array(
            'images' => 'page3-img1.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem quibusdam'
        ));

        $this->insert('video', array(
            'images' => 'page3-img2.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem list'
        ));

        $this->insert('video', array(
            'images' => 'page3-img3.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem absence'
        ));

        $this->insert('video', array(
            'images' => 'page3-img4.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem include'
        ));

        $this->insert('video', array(
            'images' => 'page3-img5.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem subversion'
        ));

        $this->insert('video', array(
            'images' => 'page3-img6.jpg',
            'video' => 'intro06.flv',
            'description' => 'Temporibus autem phonogram'
        ));
    }

    public function safeDown()
    {
        $this->dropTable('video');
    }
}
