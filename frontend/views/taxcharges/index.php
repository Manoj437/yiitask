<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Add';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taxcharges-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tax Charges', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tax_id',
            'salary_upto',
            'tax_percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
