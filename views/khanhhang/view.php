<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Khanhhang */

$this->title = $model->khachhang;
$this->params['breadcrumbs'][] = ['label' => 'Khanhhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khanhhang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->khachhang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->khachhang], [
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
            'khachhang',
            'ten',
            'email:email',
            'phone',
        ],
    ]) ?>

</div>
