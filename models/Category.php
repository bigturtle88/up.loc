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
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

  public static function getCategoryList()
    {

    $category = Category::find()
        ->select(['id', 'name'])
        ->all();
 
    return ArrayHelper::map($category, 'id', 'name');
    }
   
}
