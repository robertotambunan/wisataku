<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kategori Wisata');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-wisata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Tambahkan Kategori Wisata'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <p>
        <?= Html::a(Yii::t('app', 'Daftar Jenis Wisata'), ['/jenis-wisata/index'], ['class' => 'btn btn-success']) ?>
    </p>
        
    <p>
        <?= Html::a(Yii::t('app', 'Jenis & Kategori Wisata'), ['/kategori-wisata/campuran'], ['class' => 'btn btn-success']) ?>
    </p>
    
     <?= GridView::widget([
        'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
             //   'id_kategoriwisata',
         //   'jeniswisata.
         //   nama_jeniswisata',
            'nama_kategoriwisata',
           
                      ['class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:227px;'],
                            'header' => 'Aksi',
                            'template' => '{update}',
                            'buttons' => [
                                               
                                'hapus' => function ($url, $model) {
                            return Html::a('Ubah', [
                                        'kategori-wisata/update', 'id' => $model->id_kategoriwisata,
                                            ], [
                                        'title' => Yii::t('app', 'Ubah'),
                                        'class' => 'btn btn-danger',
                                        'data-method' => 'post',
                                                
                            ]);
                        },
                            ]
                        ],

   //     ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    
</div>
