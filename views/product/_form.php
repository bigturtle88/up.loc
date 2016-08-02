<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ProductType;
use app\models\Category;
/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id')->textInput() ?>
   
    <?= $form->field($model, 'product_type_id')->dropDownList(ProductType::getProductTypeList())->label('Product Type'); ?>

    <?= $form->field($model, 'category_id')->dropDownList(Category::getCategoryList())->label('Category'); ;  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
