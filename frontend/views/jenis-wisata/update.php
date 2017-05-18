<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisWisata */

$this->title = Yii::t('app', 'Update {modelClass} ', [
    'modelClass' => 'Jenis Wisata',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jenis Wisata'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id_jeniswisata, 'url' => ['view', 'id' => $model->id_jeniswisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jenis-wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
