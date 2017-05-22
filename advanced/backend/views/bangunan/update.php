<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bangunan */

$this->title = 'Update Bangunan: ' . ' ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Bangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
