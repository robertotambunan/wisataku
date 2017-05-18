<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FotoWisata */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Foto Wisata',
]) . $model->id_fotowisata;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foto Wisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fotowisata, 'url' => ['view', 'id' => $model->id_fotowisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="foto-wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
