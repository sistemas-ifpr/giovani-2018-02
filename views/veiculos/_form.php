<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veiculos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anoModelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anoFab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorDiaria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
