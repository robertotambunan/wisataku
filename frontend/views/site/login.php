<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#">Dashboard Application<b>         Pariwisata</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Harap mengisi data berikut untuk masuk: </p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
     
            <!-- /.col -->
            <div class="col-xs-10">
                          
              <?= Html::submitButton(
                    'Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?> 
                <h4></h4>
                            
            </div>
  
                <div class="col-xs-10">
                <?= Html::a(
                    'Register',
                      ['/site/signup'],
                      ['data-method' => 'post','class' => 'btn btn-primary btn-block btn-flat']
                      )?>                   
            </div>
            
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

        

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
