<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TripPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trip-plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_wisata')->textInput() ?>

    <?= $form->field($model, 'nama_trip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_trip')->textInput() ?>

    <?= $form->field($model, 'tanggal_trip')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
