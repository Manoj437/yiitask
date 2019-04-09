<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usertypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usertype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usertype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_type_id',
            'user_type_name',
            'basic_salary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
