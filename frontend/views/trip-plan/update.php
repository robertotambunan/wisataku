<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TripPlan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Trip Plan',
]) . $model->id_tripplan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trip Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tripplan, 'url' => ['view', 'id' => $model->id_tripplan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="trip-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
