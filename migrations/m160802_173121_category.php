<?php

use yii\db\Migration;

class m160802_173121_category extends Migration {

    public function up() {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->varchar(255),
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
