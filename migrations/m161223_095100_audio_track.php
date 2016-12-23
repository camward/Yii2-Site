<?php

use yii\db\Migration;

class m161223_095100_audio_track extends Migration
{
    public function safeUp()
    {
        $this->createTable('track', array(
            'id' => 'pk',
            'album_id' => 'int(10) NOT NULL',
            'name' => 'VARCHAR(200) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->addForeignKey('album_track', 'track', 'album_id', 'album', 'id');

        $this->insert('track', array('album_id' => '1', 'name' => 'Duis aute irure dolor'));
        $this->insert('track', array('album_id' => '1', 'name' => 'In reprehenderit in voluptate'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Velit esse cillum dolore'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Eu fugiat nulla pariatur'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Excepteur sint occaecat'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Cupidatat non'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Proident sunt in'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Culpa qui officia deserunt mollit'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Anim id est laborum'));
        $this->insert('track', array('album_id' => '1', 'name' => 'At vero eos et accusamus'));
        $this->insert('track', array('album_id' => '1', 'name' => 'Et iusto odio dignissimos'));

        $this->insert('track', array('album_id' => '2', 'name' => 'Duis aute irure dolor'));
        $this->insert('track', array('album_id' => '2', 'name' => 'In reprehenderit in voluptate'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Velit esse cillum dolore'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Eu fugiat nulla pariatur'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Excepteur sint occaecat'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Cupidatat non'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Proident sunt in'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Culpa qui officia deserunt mollit'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Anim id est laborum'));
        $this->insert('track', array('album_id' => '2', 'name' => 'At vero eos et accusamus'));
        $this->insert('track', array('album_id' => '2', 'name' => 'Et iusto odio dignissimos'));

        $this->insert('track', array('album_id' => '3', 'name' => 'Duis aute irure dolor'));
        $this->insert('track', array('album_id' => '3', 'name' => 'In reprehenderit in voluptate'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Velit esse cillum dolore'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Eu fugiat nulla pariatur'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Excepteur sint occaecat'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Cupidatat non'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Proident sunt in'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Culpa qui officia deserunt mollit'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Anim id est laborum'));
        $this->insert('track', array('album_id' => '3', 'name' => 'At vero eos et accusamus'));
        $this->insert('track', array('album_id' => '3', 'name' => 'Et iusto odio dignissimos'));
    }

    public function safeDown()
    {
        $this->dropTable('track');
    }
}
