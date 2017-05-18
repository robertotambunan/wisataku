<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = Yii::t('app', 'Informasi Pariwisata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'id'=>$id,
        'model' => $model,
    ]) ?>

</div>
