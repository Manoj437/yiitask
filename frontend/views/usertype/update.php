<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Usertype */

$this->title = 'Update Usertype: ' . $model->user_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Usertypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_type_id, 'url' => ['view', 'id' => $model->user_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usertype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
