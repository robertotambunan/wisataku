<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AplikasiPariwisata */

$this->title = Yii::t('app', 'Create Aplikasi Pariwisat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aplikasi Pariwisatas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplikasi-pariwisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
