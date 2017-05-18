<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KategoriWisata */

$this->title = Yii::t('app', 'Tambahkan Kategori Wisata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategori Wisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
