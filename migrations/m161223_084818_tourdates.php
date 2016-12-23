<?php

use yii\db\Migration;

class m161223_084818_tourdates extends Migration
{
    public function safeUp()
    {
        $this->createTable('tour', array(
            'id' => 'pk',
            'city' => 'VARCHAR(255) NOT NULL',
            'description' => 'text NOT NULL',
            'date' => 'date NOT NULL',
            'phone' => 'VARCHAR(255) NOT NULL',
            'tickets' => 'VARCHAR(255) NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->insert('tour', array(
            'city' => 'New York',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2016-07-16',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));

        $this->insert('tour', array(
            'city' => 'Los Angeles',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2016-07-23',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));

        $this->insert('tour', array(
            'city' => 'San Diego',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2016-12-16',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));

        $this->insert('tour', array(
            'city' => 'San Francisco',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2016-11-11',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));

        $this->insert('tour', array(
            'city' => 'Washington',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2015-09-16',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));

        $this->insert('tour', array(
            'city' => 'Las Vegas',
            'description' => 'Lorem ipsum dolor consctetur',
            'date' => '2011-02-20',
            'phone' => '+1 959 603 6035',
            'tickets' => 'http://rockband.com'
        ));
    }

    public function safeDown()
    {
        $this->dropTable('tour');
    }
}
