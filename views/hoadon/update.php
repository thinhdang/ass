<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */

$this->title = 'Update Hoadon: ' . ' ' . $model->hoadon;
$this->params['breadcrumbs'][] = ['label' => 'Hoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hoadon, 'url' => ['view', 'id' => $model->hoadon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
