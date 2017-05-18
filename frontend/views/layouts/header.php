<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . 'Dashboard Aplication' . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

          
                      
                 
           
                <!-- Tasks: style can be found in dropdown.less -->
              
                <!-- User Account: style can be found in dropdown.less -->
                       <li class="user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">
                            <?php 
//                            if (!Yii::$app->user->isGuest){
////                                echo Html::a('Sign out', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']);
//                                echo '<b>Sign Out('.Yii::$app->user->identity->username.')</b>';
//                            } 
//                            else{
//                                echo 'Guest';
//                                
//                            }
                            ?>
                        </span>
                        
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-right">
                                <?php 
                           echo    Html::a('Sign out', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-success'])
                                ?>
                            </div>
                        </li>
                    </ul>
                </li>

                
            </ul>
        </div>
    </nav>
</header>