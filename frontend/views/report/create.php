<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\reportDetails */

$this->title = 'Create Report Details';
$this->params['breadcrumbs'][] = ['label' => 'Report Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
