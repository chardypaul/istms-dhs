<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php yii\widgets\Pjax::begin(['id' => 'sign-up']) ?>
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['data-pjax' => true]]); ?>

                    <?= $form->field($model, 'role')->dropDownList(['2' => 'User', '1' => 'Encoder']) ?>

                    <?= $form->field($model, 'username') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'first_name') ?>

                    <?= $form->field($model, 'middle_name') ?>

                    <?= $form->field($model, 'last_name') ?>                

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button', 'style' => 'width: 100%; padding: 10px;']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            <?php yii\widgets\Pjax::end() ?>
        </div>
    </div>
</div>
