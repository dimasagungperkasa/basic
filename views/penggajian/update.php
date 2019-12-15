<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\penggajian */

$this->title = 'Update Penggajian: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Penggajians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'id' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penggajian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
