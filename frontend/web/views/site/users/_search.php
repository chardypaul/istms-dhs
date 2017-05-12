<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\reportDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reference_no') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'doc_for') ?>

    <?= $form->field($model, 'doc_from') ?>

    <?= $form->field($model, 'doc_date') ?>

    <?php // echo $form->field($model, 'doc_file') ?>

    <?php // echo $form->field($model, 'doc_name') ?>

    <?php // echo $form->field($model, 'drawer_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
