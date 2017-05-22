<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luas_bgn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luas_tnh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fasilitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengembang')->dropDownList(['1' => 'Akbar', '2' => 'Indra', '3' => 'Ian']) ?>

    <?= $form->field($model, 'kategori')->dropDownList(['1' => 'Rumah 36', '2' => 'Rumah 72', '3' => 'Rumah 96']) ?>

    <?= $form->field($model, 'file_image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
