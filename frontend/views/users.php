<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\reportDetails */
/* @var $form ActiveForm */
?>
<div class="users">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'reference_no') ?>
        <?= $form->field($model, 'subject') ?>
        <?= $form->field($model, 'doc_for') ?>
        <?= $form->field($model, 'doc_from') ?>
        <?= $form->field($model, 'doc_date') ?>
        <?= $form->field($model, 'doc_file') ?>
        <?= $form->field($model, 'doc_name') ?>
        <?= $form->field($model, 'drawer_id') ?>
        <?= $form->field($model, 'user_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- users -->
