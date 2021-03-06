<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Loaisanpham */

$this->title = $model->loaisanpham;
$this->params['breadcrumbs'][] = ['label' => 'Loaisanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->loaisanpham], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->loaisanpham], [
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
            'loaisanpham',
            'ten',
        ],
    ]) ?>

</div>
