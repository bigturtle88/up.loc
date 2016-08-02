<?php

use yii\db\Migration;

class m160802_173105_product_type extends Migration {

    public function up() {
        $this->createTable('product_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
        
        $this->insert('product_type', [
            
            'name' => 'Green',
        ]);
        $this->insert('product_type', [
         
            'name' => 'Red',
        ]);
        $this->insert('product_type', [
           
            'name' => 'Blue',
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
