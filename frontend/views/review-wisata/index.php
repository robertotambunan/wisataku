<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReviewWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Review Wisata');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-wisata-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?php // Html::a(Yii::t('app', 'Create Review Wisata'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
 <?= GridView::widget([
        
          'dataProvider' => $dataProvider,
     //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

              'user.username',
            'konten_review',
           
                      ['class' => 'yii\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:227px;'],
                            'header' => 'Aksi',
                            'template' => '{hapus}',
                            'buttons' => [
                                               
                                'hapus' => function ($url, $model) {
                            return Html::a('Hapus', [
                                        'review-wisata/delete', 'id' => $model->id_reviewwisata,
                                            ], [
                                        'title' => Yii::t('app', 'Hapus'),
                                        'class' => 'btn btn-danger',
                                        'data-method' => 'post',
                                                
                            ]);
                        },
                            ]
                        ],

   //     ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
         ?>

</div>
