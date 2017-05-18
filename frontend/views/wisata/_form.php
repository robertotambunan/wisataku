<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\KategoriWisata;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisata-form">

    <?php $form = ActiveForm::begin(); ?>

     
    <?= $form->field($model, 'id_kategoriwisata')->dropDownList(
 ArrayHelper::map(\app\models\KategoriWisata::findAll(['id_jeniswisata'=>$id]), 'id_kategoriwisata', 'nama_kategoriwisata'), 
         [
             'prompt'=>'-- Pilih --',
//             'onchange'=>'
//                 $.post("index.php?r=work-orders/lists&id=''"+$(this).val().function(
//                         $("select#models-contact").html(data);
//                 });
        ]);?>
    
    <?php // $form->field($model, 'id_jeniswisata')->textInput() ?>
    
    <?= $form->field($model, 'nama_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sejarah_wisata')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_operasional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'keterangan_wisata')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Simpan'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
