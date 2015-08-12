<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Khanhhang */

$this->title = 'Create Khanhhang';
$this->params['breadcrumbs'][] = ['label' => 'Khanhhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khanhhang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
