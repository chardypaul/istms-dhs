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
<html lang='<?= Yii::$app->language ?>'>
<head>
    <meta charset='<?= Yii::$app->charset ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
    </style>
 
    <?php $this->head() ?>

     
</head>
<body>
<?php $this->beginBody() ?>
    <?php
     NavBar::begin([
        'brandLabel' => 'ISTMS - DHS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top','id' => 'mainNav',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left page-scroll'],
        'items' => [
            ['label' => 'Home', 'url' => ['site/index']],
            ['label' => 'About','url' => '#about',],
            ['label' => 'Contact', 'url' => '#contact',],
            ['label' => 'Services', 'url' => '#services',],
            ['label' => 'Documents', 'url' => ['index']],
             ['label' => 'Sign Up', 'url' => ['index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['index']]
            ) : (
                '<li>'
                . Html::beginForm(['#'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
               

        ],
    ]);
    echo "<form class='navbar-form navbar-right' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text' placeholder='Search' class='form-control'>
            <a href='#'><span id='searchicon' class='glyphicon glyphicon-search form-control-feedback'></span></a>

           
         </form>";
     NavBar::end();
    ?>
    <?php
   
    ?>
     <?= $content ?>
    <div class='container'>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget()  ?>
         
    </div>  
  
<footer class='footer'>
    <div class='container'>
        <p class='pull-left'>&copy; ISTMS <?= date('Y') ?></p>

        <p class='pull-right'><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
