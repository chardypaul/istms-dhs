<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\bootstrap\Tabs;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Dropdown;

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
        .btn-custom-pos {
            margin-top: 10px;
        }

        .btn-remove-design {
            background-color: transparent;
            border: none;
            color: #f9f9f9;
        }

        .btn-remove-design:focus,
        .btn-remove-design:active,
        .btn-custom-pos:focus,
        .btn-custom-pos:active {
            outline: 0;
            box-shadow: none;
        }
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
            'class' => 'navbar navbar-default navbar-fixed-top',
            'id' => 'mainNav',
        ],
    ]);
        $menuItems = [
            ['label' => 'Home', 'url' => '#index'],
            ['label' => 'About', 'url' => '#about'],
            ['label' => 'Contact', 'url' => '#contact'],
            ['label' => 'Services', 'url' => '#services'],
        ];

        if (Yii::$app->user->isGuest) {
            $menuItems[] = "<li>"
            . Html::button('Sign in', ['value' => Url::to('index.php?r=site/login'), 'class' => 'btn btn-custom-pos btn-primary', 'id' => 'modalSignin']) . " &nbsp;&nbsp;"
            . "</li>";
            $menuItems[] = "<li>"
            . Html::button('Sign up', ['value' => Url::to('index.php?r=site/signup'), 'class' => 'btn btn-custom-pos btn-primary', 'id' => 'modalSignup'])
            . "<li>";
        } else {
            if (!Yii::$app->user->isGuest && Yii::$app->user->identity->isUser()) {
               $menuItems[] = ['label' => 'Reports', 'url' => 'index.php?r=report/index'];
               $menuItems[] = "<li>"
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout &nbsp; (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-remove-design logout']
                )
                . Html::endForm()
                . "</li>";
            } elseif (!Yii::$app->user->isGuest && Yii::$app->user->identity->isEncoder()) {
                $menuItems[] = ['label' => 'Reports', 'url' => 'index.php?r=report/index'];
                $menuItems[] = "<li>"
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (&nbsp; ' . Yii::$app->user->identity->username . '&nbsp;)',
                    ['class' => 'btn btn-remove-design logout']
                )
                . Html::endForm()
                . "</li>";
            } elseif (!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()) {
                $menuItems[] = ['label' => 'Dashboard', 'url' => '#'];
                $menuItems[] = "<li>"
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout &nbsp; (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-remove-design logout']
                )
                . Html::endForm()
                . "</li>";
            } else {
                $menuItems[] = "<li>"
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout &nbsp; (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-remove-design logout']
                )
                . Html::endForm()
                . "</li>";
            }
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
     NavBar::end();
    ?>
    <?php
        Modal::begin([
                'header' => 'Log in here',
                'id' => 'modal',
                'size' => 'modal-md',
            ]);
        echo "<div class='modal-body'>" . 
        Tabs::widget([
                'items' => [
                    [
                        'label' => 'Sign in',
                        'content' => '',
                        'options' => ['id' => 'loginTab'],
                    ],
                    [
                        'label' => 'Sign up',
                        'content' => '',
                        'options' => ['id' => 'registerTab'],
                    ],
                    [
                        'label' => 'Forgot Password',
                        'content' => Html::button('Forgot Password', ['value' => Url::to('index.php?r=site/request-password-reset'), 'class' => 'btn btn-primary', 'id' => 'modalForgetPassword']),
                        'options' => ['id' => 'forgetpasswordTab'],
                    ],
                ],
            ]) . 
        "</div>";
        Modal::end();
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
