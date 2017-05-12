<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\reportDetails */

$this->title = $model->reference_no;
$this->params['breadcrumbs'][] = ['label' => 'Report Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reference_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reference_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reference_no',
            'subject',
            'doc_for',
            'doc_from',
            'doc_date',
            'doc_file',
            'doc_name',
            'drawer_id',
            'user_id',
        ],
    ]) ?>

</div>
