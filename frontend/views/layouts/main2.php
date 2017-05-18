<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
//        ['label' => 'Aplikasi Pariwisata', 'url' => ['/aplikasi-pariwisata/view', 'id'=>4]],
//        ['label' => 'Foto Wisata', 'url' => ['/foto-wisata/index']],
//      //  ['label' => 'Jenis Wisata', 'url' => ['/jenis-wisata/index']],
//         ['label' => 'Jenis & Kategori Wisata', 'url' => ['/kategori-wisata/campuran']],
//        ['label' => 'Review Wisata', 'url' => ['/review-wisata/index']],
//     //   ['label' => 'Trip Plan', 'url' => ['/trip-plan/index']],
//          ['label' => 'User', 'url' => ['/user/index']],
//        ['label' => 'Wisata', 'url' => ['/wisata/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems =[ 
        ['label' => 'Aplikasi Pariwisata', 'url' => ['/aplikasi-pariwisata/view', 'id'=>4]],
     //   ['label' => 'Foto Wisata', 'url' => ['/foto-wisata/index']],
      //  ['label' => 'Jenis Wisata', 'url' => ['/jenis-wisata/index']],
         ['label' => 'Jenis & Kategori Wisata', 'url' => ['/kategori-wisata/campuran']],
           ['label' => 'Jenis Wisata', 'url' => ['/jenis-wisata/index']],
        ['label' => 'Review Wisata', 'url' => ['/review-wisata/index']],
     //   ['label' => 'Trip Plan', 'url' => ['/trip-plan/index']],
          ['label' => 'User', 'url' => ['/user/index']],
        ['label' => 'Wisata', 'url' => ['/wisata/index']],
        ];
      
         $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
    }
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Dashboard  <?= date('Y') ?></p>

<!--        <p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
