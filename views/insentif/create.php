<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\insentif */

$this->title = 'Create Insentif';
$this->params['breadcrumbs'][] = ['label' => 'Insentifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insentif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
