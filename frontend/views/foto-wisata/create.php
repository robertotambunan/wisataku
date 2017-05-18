<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FotoWisata */

$this->title = Yii::t('app', 'Create Foto Wisata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foto Wisata'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foto-wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
