<aside class="main-sidebar">

    <section class="sidebar">

      

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                   ['label' => 'Aplikasi Pariwisata', 'options' => ['class' => 'header']],
                    ['label' => 'Daftar Informasi Wisata ', 'icon' => 'fa fa-file-code-o', 'url' => ['/wisata/lihat-aplikasi', 'namaApp'=>"test"]],
                //    ['label' => 'Jenis & Kategori Wisata', 'icon' => 'fa fa-dashboard', 'url' => ['/kategori-wisata/campuran']],
       ['label' => 'Jenis Wisata', 'url' => ['/jenis-wisata/index']],                
    ['label' => 'Review Wisata', 'icon' => 'fa fa-file-code-o', 'url' => ['/review-wisata/index', 'id'=>4]],
                 //   ['label' => 'Pengguna Aplikasi', 'icon' => 'fa fa-dashboard', 'url' => ['/user/index']],
               //     ['label' => 'Daftar Informasi Wisata', 'icon' => 'fa fa-dashboard', 'url' => ['/wisata/index']],
                 //   ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
               
                ],
            ]
        ) ?>

    </section>

</aside>