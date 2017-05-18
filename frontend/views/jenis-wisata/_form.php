<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisWisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-wisata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_jeniswisata')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Simpan'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
