<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tunjangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tunjangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'makan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_tunjangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
