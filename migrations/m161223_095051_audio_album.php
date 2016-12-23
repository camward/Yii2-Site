<?php

use yii\db\Migration;

class m161223_095051_audio_album extends Migration
{
    public function safeUp()
    {
        $this->createTable('album', array(
            'id' => 'pk',
            'images' => 'VARCHAR(200) NOT NULL',
            'year' => 'VARCHAR(200) NOT NULL',
            'name' => 'VARCHAR(200) NOT NULL',
            'description' => 'text NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->insert('album', array(
            'images' => 'page2-img1.jpg',
            'year' => '2010',
            'name' => 'Genres Remixes',
            'description' => 'Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ));

        $this->insert('album', array(
            'images' => 'page2-img2.jpg',
            'year' => '2013',
            'name' => 'Genres',
            'description' => 'Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ));

        $this->insert('album', array(
            'images' => 'page2-img3.jpg',
            'year' => '2016',
            'name' => 'Remixes',
            'description' => 'Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ));
    }

    public function safeDown()
    {
        $this->dropTable('album');
    }
}
