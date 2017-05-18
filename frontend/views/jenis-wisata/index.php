<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jenis Wisata');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-wisata-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a(Yii::t('app', 'Tambahkan Jenis Wisata'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?php // Html::a(Yii::t('app', 'Daftar Kategori Wisata'), ['/kategori-wisata/index'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <p>
        <?php //     Html::a(Yii::t('app', 'Jenis & Kategori Wisata'), ['/kategori-wisata/campuran'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                  'filterModel' => $searchModel,
                    'columns' => [
                         ['class' => 'yii\grid\SerialColumn'],
                        'nama_jeniswisata',
                  
                ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px;'],
                'header' => 'Aksi',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('Tambahkan Tempat Wisata', [
                                    '/wisata/create', 'id' => $model->id_jeniswisata,
                                        ], [
                                    'title' => Yii::t('app', 'Menambahkan Tempat Wisata'),
                                    'class' => 'btn btn-primary',
                        ]);
                    },
//                            'delete' => function ($url, $model) {
//                        return Html::a('Hapus', [
//                                    '/jenis-wisata/delete', 'id' => $model->id_jeniswisata,
//                                        ], [
//                                    'title' => Yii::t('app', 'Delete'),
//                                    'class' => 'btn btn-danger',
//                                    'data' => [
//                                        'confirm' => 'Apakah Anda yakin ingin menghapus item ini?',
//                                        'method' => 'post'
//                                    ]
//                        ]);
//                    },
                        ]
                    ],
                            
                    ]
               
   ]);
    ?>
    
    
</div>
