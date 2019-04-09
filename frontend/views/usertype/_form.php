<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Usertype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usertype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'basic_salary')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
