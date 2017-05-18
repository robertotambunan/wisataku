<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ReviewWisata */

$this->title = Yii::t('app', 'Create Review Wisata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Review Wisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
