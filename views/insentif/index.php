<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Insentifs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insentif-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Insentif', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'lembur',
            'bonus',
            'total_insentif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
