<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$judul = 'Daftar Informasi Wisata Aplikasi '.$namaApp;
$this->title = Yii::t('app', $judul);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a(Yii::t('app', 'Tambahkan Informasi Pariwisata'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    
     <?= GridView::widget([
                    'dataProvider' => $dataProvider,
               //   'filterModel' => $searchModel,
                    'columns' => [
                         ['class' => 'yii\grid\SerialColumn'],
                      
        //    'id_wisata',
                        'kategoriwisata.jeniswisata.nama_jeniswisata',
            'kategoriwisata.nama_kategoriwisata',
            'nama_wisata',
//            'sejarah_wisata',
//            'jam_operasional',
//             'nomor_telepon',
//             'alamat_wisata',
//             'gambar_wisata',
//             'keterangan_wisata',
                  
                ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px;'],
                'header' => 'Aksi',
                'template' => '{view}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('Lihat', [
                                    '/wisata/view', 'idWisata' => $model->id_wisata, 'id'=>$model->kategoriwisata->jeniswisata->id_jeniswisata
                                        ], [
                                    'title' => Yii::t('app', 'Detail Informasi Wisata'),
                                    'class' => 'btn btn-primary',
                        ]);
                    },
                                                ]
                    ],
                            
                    ]
               
   ]);
    ?>
    
</div>
