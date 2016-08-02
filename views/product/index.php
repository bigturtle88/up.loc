<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\ProductType;
use app\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['attribute'=>'name', 'label'=>'Name'],
            ['attribute'=>'product_type_id','label'=>'Product type','content'=>function($data){
                return ProductType::findOne($data->category_id)->name;
            }  
            ],
            ['attribute'=>'category_id','label'=>'Category','content'=>function($data){
                return Category::findOne($data->category_id)->name;
            }  ],
            
       
            // 'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
