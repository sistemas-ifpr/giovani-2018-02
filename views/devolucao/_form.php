<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Devolucao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devolucao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataHora')->textInput() ?>

    <?= $form->field($model, 'emprestimo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
