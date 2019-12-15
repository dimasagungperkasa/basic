<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tunjangan */

$this->title = 'Update Tunjangan: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Tunjangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'id' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tunjangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
