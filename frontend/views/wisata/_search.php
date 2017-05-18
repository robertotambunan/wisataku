<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WisataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wisata') ?>

    <?= $form->field($model, 'id_kategoriwisata') ?>

    <?= $form->field($model, 'nama_wisata') ?>

    <?= $form->field($model, 'sejarah_wisata') ?>

    <?= $form->field($model, 'jam_operasional') ?>

    <?php // echo $form->field($model, 'nomor_telepon') ?>

    <?php // echo $form->field($model, 'alamat_wisata') ?>

    <?php // echo $form->field($model, 'gambar_wisata') ?>

    <?php // echo $form->field($model, 'keterangan_wisata') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
