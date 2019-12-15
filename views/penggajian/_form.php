<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\penggajian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penggajian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji_pokok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_insentif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_tunjangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_potongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_gaji')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
