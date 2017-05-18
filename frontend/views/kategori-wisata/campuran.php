<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kategori & Jenis Wisata');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-wisata-campuran">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        
    <p>
        <?php // Html::a(Yii::t('app', 'Daftar Jenis Wisata'), ['/jenis-wisata/index'], ['class' => 'btn btn-success']) ?>
    </p>
    
     <p>
        <?php // Html::a(Yii::t('app', 'Daftar Kategori Wisata'), ['/kategori-wisata/index'], ['class' => 'btn btn-success']) ?>
    </p>
    

        
     <?= GridView::widget([
                    'dataProvider' => $dataProvider,
               //   'filterModel' => $searchModel,
                    'columns' => [
                         ['class' => 'yii\grid\SerialColumn'],
                     //   'id_kategoriwisata',
         //   'jeniswisata.
            'jeniswisata.nama_jeniswisata',
            'nama_kategoriwisata',
                        
//                ['class' => 'yii\grid\ActionColumn',
//                'contentOptions' => ['style' => 'width:260px;'],
//                'header' => 'Aksi',
//                'template' => '{update}{delete}',
//                'buttons' => [
//                    'update' => function ($url, $model) {
//                        return Html::a('Ubah', [
//                                    '/kategori-wisata/update', 'id' => $model->id_kategoriwisata,
//                                        ], [
//                                    'title' => Yii::t('app', 'Mengubah Kategori Wisata'),
//                                    'class' => 'btn btn-primary',
//                        ]);
//                    },
//                            'delete' => function ($url, $model) {
//                        return Html::a('Hapus', [
//                                    '/kategori-wisata/delete', 'id' => $model->id_kategoriwisata,
//                                        ], [
//                                    'title' => Yii::t('app', 'Delete'),
//                                    'class' => 'btn btn-danger',
//                                    'data' => [
//                                        'confirm' => 'Apakah Anda yakin ingin menghapus item ini?',
//                                        'method' => 'post'
//                                    ]
//                        ]);
//                    },
//                        ]
//                    ],
                            
                    ]
               
   ]);
    ?>
</div>
