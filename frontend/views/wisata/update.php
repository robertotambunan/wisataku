<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = Yii::t('app', 'Ubah Informasi {modelClass}: ', [
    'modelClass' => 'Wisata',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wisata'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_wisata, 'url' => ['view', 'id' => $model->id_wisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ubah');
?>
<div class="wisata-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'id'=>$id,
        'model' => $model,
    ]) ?>

</div>
