<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\insentif */

$this->title = 'Update Insentif: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Insentifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'id' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="insentif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
