<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ReviewWisata */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Review Wisata',
]) . $model->id_reviewwisata;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Review Wisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reviewwisata, 'url' => ['view', 'id' => $model->id_reviewwisata]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="review-wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
