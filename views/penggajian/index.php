<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggajians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggajian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penggajian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'departemen',
            'gaji_pokok',
            'total_insentif',
            'total_tunjangan',
            'total_potongan',
            'total_gaji',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
