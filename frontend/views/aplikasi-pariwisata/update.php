<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AplikasiPariwisata */

$this->title = Yii::t('app', 'Ubah {modelClass}: ', [
    'modelClass' => 'Nama Aplikasi Pariwisata',
]) ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aplikasi Pariwisata'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_aplikasi, 'url' => ['view', 'id' => $model->id_aplikasipariwisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ubah');
?>
<div class="aplikasi-pariwisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
