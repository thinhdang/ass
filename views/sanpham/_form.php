<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sanpham')->textInput() ?>

    <?= $form->field($model, 'loaisanpham')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mota')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
