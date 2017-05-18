<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = Yii::t('app', 'Detail Informasi Wisata');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wisata'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-view">

    <h1><?php // Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Ubah'), ['update', 'idWisata' => $model->id_wisata,'id'=>$id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id_wisata], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         // 'id_wisata',
             'kategoriwisata.jeniswisata.nama_jeniswisata',
            'kategoriwisata.nama_kategoriwisata',
            'id_aplikasipariwisata',
            'nama_wisata',
            'sejarah_wisata',
            'jam_operasional',
            'nomor_telepon',
            'alamat_wisata',
            'gambar_wisata',
            'keterangan_wisata',
        ],
    ]) ?>

</div>
