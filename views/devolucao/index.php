<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Devolucões';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devolucao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova devolucão', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dataHora',
            'emprestimo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
