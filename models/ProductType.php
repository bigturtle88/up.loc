<?php

namespace app\models;

use Yii;
use \yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product_type".
 *
 * @property string $id
 * @property string $name
 *
 * @property Product[] $products
 */
class ProductType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['product_type_id' => 'id']);
    }
    public function getParentName()
    {
    $parent = $this->parent;
 
    return $parent ? $parent->name : '';
    }
    public static function getProductTypeList()
    {

    $productType = ProductType::find()
        ->select(['id', 'name'])
        ->all();
 
    return ArrayHelper::map($productType, 'id', 'name');
    }
}
