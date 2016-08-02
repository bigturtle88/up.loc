<?php

namespace app\models;

use Yii;
use \yii\helpers\ArrayHelper;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $product_type_id
 * @property string $category_id
 * @property string $name
 * @property string $description
 * @property string $image
 *
 * @property ProductType $productType
 */
class Product extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'product_type_id', 'category_id', 'name', 'description', 'image'], 'required'],
            [[ 'product_type_id', 'category_id'], 'integer'],
            [['file'],'file','skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['name', 'description','image'], 'string', 'max' => 255],
            [['product_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductType::className(), 'targetAttribute' => ['product_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_type_id' => 'Product Type ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getProductType()
//    {
//        return $this->hasOne(ProductType::className(), ['id' => 'product_type_id']);
//    }
    public function getParentName()
    {
    $parent = $this->parent;
 
    return $parent ? $parent->name : '';
    }
   
}
