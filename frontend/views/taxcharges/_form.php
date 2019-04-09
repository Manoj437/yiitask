<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Taxcharges */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taxcharges-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'salary_upto')->textInput() ?>

    <?= $form->field($model, 'tax_percentage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
