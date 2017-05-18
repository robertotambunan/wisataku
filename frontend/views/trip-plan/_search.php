<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TripPlanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tripplan') ?>

    <?= $form->field($model, 'id_wisata') ?>

    <?= $form->field($model, 'nama_trip') ?>

    <?= $form->field($model, 'jam_trip') ?>

    <?= $form->field($model, 'tanggal_trip') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
