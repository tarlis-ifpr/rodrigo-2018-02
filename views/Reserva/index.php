<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reserva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'marca',
            'modelo',
            'data_reserva',
            'cliente',
            //'data_baixa_reserva',
            //'funcionario',

            [
                'attribute'=>'data_reserva',
                'format'=>['DateTime','php:d/m/Y']
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
