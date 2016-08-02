<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\ProductType;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            [                      // the owner name of the model
                'label' => 'Name',
                'value' => $model->name,
            ],
            [                      // the owner name of the model
                'label' => 'Product type',
                'value' => ProductType::findOne($model->category_id)->name
            ],
            [                      // the owner name of the model
                'label' => 'Category',
                'value' => Category::findOne($model->category_id)->name
            ],
            [                      // the owner name of the model
                'label' => 'Description',
                'value' => $model->description,
            ],
            [                      // the owner name of the model
                'label' => 'Image',
                'value' => $model->image,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
        ],
    ])
    ?>

</div>
