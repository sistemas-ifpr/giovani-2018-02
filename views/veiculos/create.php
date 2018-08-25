<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Veiculos */

$this->title = 'Create Veiculos';
$this->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
