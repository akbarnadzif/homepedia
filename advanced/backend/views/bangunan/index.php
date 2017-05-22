<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bangunan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Data Bangunan Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'luas_bgn',
            'luas_tnh',
            'fasilitas',
            'lokasi',
            'pengembang',
            'kategori',
            'file_image',
            'file_obj',
            'file_mtl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
