<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Taxcharges */

$this->title = 'Add';
$this->params['breadcrumbs'][] = ['label' => 'Tax Charges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taxcharges-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
