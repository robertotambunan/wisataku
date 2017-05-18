<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\JenisWisata;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriWisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-wisata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'id_jeniswisata')->textInput() ?>

    <?= $form->field($model, 'nama_kategoriwisata')->textInput(['maxlength' => true]) ?>
    
       <?= $form->field($model, 'id_jeniswisata')->dropDownList(
 ArrayHelper::map(\app\models\JenisWisata::find()->all(), 'id_jeniswisata', 'nama_jeniswisata'), 
         [
             'prompt'=>'-- Pilih --',
//             'onchange'=>'
//                 $.post("index.php?r=work-orders/lists&id=''"+$(this).val().function(
//                         $("select#models-contact").html(data);
//                 });
        ]);?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Simpan'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
