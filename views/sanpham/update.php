<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */

$this->title = 'Update Sanpham: ' . ' ' . $model->sanpham;
$this->params['breadcrumbs'][] = ['label' => 'Sanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sanpham, 'url' => ['view', 'id' => $model->sanpham]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanpham-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
