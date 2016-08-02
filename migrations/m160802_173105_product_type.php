<?php

use yii\db\Migration;

class m160802_173105_product_type extends Migration {

    public function up() {
        $this->createTable('product_type', [
            'id' => $this->primaryKey(),
            'name' => $this->varchar(255),
        ]);
    }

    public function down() {
        $this->dropTable('product_type');

         
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
