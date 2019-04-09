<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'View Accounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php Pjax::begin(); ?>
   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'uid',
            'first_name',
            'last_name',
            'email:email',
            [
                'attribute' => 'Basic Salary',
                'value' => 'userType.basic_salary',
            ],
            [
                'attribute' => 'User Type',
                'value' => 'userType.user_type_name',
            ],
            [
                'attribute' => 'Department',
                'value' => 'department.department_name',
            ],
            [
                'attribute' => 'Last Month Deduction',
                'value' => 'department.deduction',
            ],
            [
                'attribute' => 'Payable salary',
                'value' => 'accounts.payable_salary',
            ],
            [
                'attribute' => 'Tax Value',
                'value' => 'accounts.tax_value',
            ],
            
            
            //'password',
            //'basic_salary',
            //'user_type_id',
            //'department_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); ?>
   <?php Pjax::end(); ?>

</div>
