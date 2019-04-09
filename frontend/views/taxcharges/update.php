<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Taxcharges */

$this->title = 'Update Tax Charges: ' . $model->tax_id;
$this->params['breadcrumbs'][] = ['label' => 'Taxcharges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tax_id, 'url' => ['view', 'id' => $model->tax_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taxcharges-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
