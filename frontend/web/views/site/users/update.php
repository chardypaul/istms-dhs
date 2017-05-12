<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\reportDetails */

$this->title = 'Update Report Details: ' . $model->reference_no;
$this->params['breadcrumbs'][] = ['label' => 'Report Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reference_no, 'url' => ['view', 'id' => $model->reference_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="report-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
