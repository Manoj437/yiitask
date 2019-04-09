<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Usertype;
use frontend\models\Department;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= Html::activeDropDownList($model, 'user_type_id',
        ArrayHelper::map(Usertype::find()->all(), 'user_type_id', 'user_type_name'),
        ['prompt'=>'User Type', 'class' => 'form-control'])
    ?>
    <br />
    <?= Html::activeDropDownList($model, 'department_id',
        ArrayHelper::map(Department::find()->all(), 'department_id', 'department_name'),
        ['prompt'=>'Department', 'class' => 'form-control'])
    ?>
    <br />

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
