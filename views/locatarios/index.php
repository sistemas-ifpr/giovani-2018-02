<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locatarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locatarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Locatário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'cpf',
            'telefone',
            'celular',
            //'endereco',
            //'numCarteiraHab',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
