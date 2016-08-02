<?php

use yii\db\Migration;

class m160802_173121_category extends Migration {

    public function up() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
        $this->insert('category', [
            'id' => '1',
            'name' => 'It',
        ]);
        $this->insert('category', [
            'id' => '2',
            'name' => 'Auto',
        ]);
        $this->insert('category', [
            'id' => '3',
           'name' => 'House',
        ]);
    }

    public function down() {
        $this->dropTable('category');
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
