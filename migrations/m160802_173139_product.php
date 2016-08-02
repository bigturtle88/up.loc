<?php

use yii\db\Migration;

class m160802_173139_product extends Migration {

    public function up() {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'product_type_id' => $this->integer(),
            'category_id' => $this->integer(),
            'name' => $this->string(255),
            'description' => $this->string(255),
            'image' => $this->string(255),
        ]);
    }

    public function down() {
        $this->dropTable('product');
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
