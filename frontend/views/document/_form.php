<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Documents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'reference_no')->textInput() ?>
    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'doc_date')->textInput() ?>
    <?= $form->field($model, 'doc_for')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'doc_from')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'drawer_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'doc_file')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
