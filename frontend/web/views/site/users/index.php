<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\reportDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Report Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reference_no',
            'subject',
            'doc_for',
            'doc_from',
            'doc_date',
            // 'doc_file',
            // 'doc_name',
            // 'drawer_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
