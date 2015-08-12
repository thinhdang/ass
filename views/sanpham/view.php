<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */

$this->title = $model->sanpham;
$this->params['breadcrumbs'][] = ['label' => 'Sanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sanpham], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sanpham], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sanpham',
            'loaisanpham',
            'ten',
            'masp',
            'mota',
        ],
    ]) ?>

</div>
