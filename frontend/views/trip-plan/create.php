<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TripPlan */

$this->title = Yii::t('app', 'Create Trip Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trip Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trip-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
