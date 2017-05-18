<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriWisata */

$this->title = Yii::t('app', 'Ubah {modelClass} ', [
    'modelClass' => 'Jenis & Kategori Wisata',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategori Wisata'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kategoriwisata, 'url' => ['view', 'id' => $model->nama_kategoriwisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Ubah');
?>
<div class="kategori-wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
