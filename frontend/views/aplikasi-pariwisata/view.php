<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AplikasiPariwisata */

//$this->title = $model->id_aplikasipariwisata;
$this->title = Yii::t('app', 'Aplikasi Pariwisata');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplikasi-pariwisata-view">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id_aplikasipariwisata',
            [
                'label' => 'Nama Aplikasi',
                'attribute'=> 'nama_aplikasi',
                'value' => $nilai
            ],
        ],
    ]) ?>
    
    <p>
        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'id' => $model->id_aplikasipariwisata], ['class' => 'btn btn-primary']) ?>
        <?php
//        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_aplikasipariwisata], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>


</div>
