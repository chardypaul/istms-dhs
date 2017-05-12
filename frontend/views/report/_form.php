<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\reportDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reference_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_for')->textInput() ?>

    <?= $form->field($model, 'doc_from')->textInput() ?>

    <?= $form->field($model, 'doc_date')->textInput() ?>

    <?= $form->field($model, 'doc_file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drawer_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
