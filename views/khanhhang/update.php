<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Khanhhang */

$this->title = 'Update Khanhhang: ' . ' ' . $model->khachhang;
$this->params['breadcrumbs'][] = ['label' => 'Khanhhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->khachhang, 'url' => ['view', 'id' => $model->khachhang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khanhhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
