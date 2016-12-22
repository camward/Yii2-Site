<?php

use yii\db\Migration;

class m161222_165314_news extends Migration
{
    public function safeUp()
    {
        $this->createTable('news', array(
            'id' => 'pk',
            'name' => 'VARCHAR(255) NOT NULL',
            'description' => 'text NOT NULL',
            'date' => 'date NOT NULL',
        ) , 'ENGINE=InnoDB CHARSET=utf8');

        $this->insert('news', array(
            'name' => 'Lorem ipsum dolor consctetur',
            'description' => 'Lorem ipsum dolor consctetur. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2016-05-11',
        ));

        $this->insert('news', array(
            'name' => 'Adipisicing eusmod tempor incididunt',
            'description' => 'Adipisicing eusmod tempor incididunt. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2016-05-23',
        ));

        $this->insert('news', array(
            'name' => 'Dolore magna aliqua enim ad minim',
            'description' => 'Dolore magna aliqua enim ad minim. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2016-11-11',
        ));

        $this->insert('news', array(
            'name' => 'Quis nostrud exercitation ullamco laboris',
            'description' => 'Quis nostrud exercitation ullamco laboris. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2016-06-21',
        ));

        $this->insert('news', array(
            'name' => 'Nisi ut aliquip ex ea commodo',
            'description' => 'Nisi ut aliquip ex ea commodo. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-05-11',
        ));

        $this->insert('news', array(
            'name' => 'Duis aute irure dolor in reprehenderit',
            'description' => 'Duis aute irure dolor in reprehenderit. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-05-12',
        ));

        $this->insert('news', array(
            'name' => 'Coluptate velit esse cillum',
            'description' => 'Coluptate velit esse cillum. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-03-11',
        ));

        $this->insert('news', array(
            'name' => 'Dolore eu fugiat nulla pariatur',
            'description' => 'Dolore eu fugiat nulla pariatur. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-01-16',
        ));

        $this->insert('news', array(
            'name' => 'Excepteur sint occaecat cupidatat',
            'description' => 'Excepteur sint occaecat cupidatat. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-05-30',
        ));

        $this->insert('news', array(
            'name' => 'Sunt in culpa qui officia',
            'description' => 'Sunt in culpa qui officia. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-12-04',
        ));

        $this->insert('news', array(
            'name' => 'Deserunt mollit anim id est laborum',
            'description' => 'Deserunt mollit anim id est laborum. Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.',
            'date' => '2015-07-16',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('news');
    }
}
