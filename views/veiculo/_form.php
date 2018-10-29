<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Marca;


/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->dropDownList( ArrayHelper::map(Marca::find()->all(),'nome','nome')) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anoModelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anoFab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorDiaria')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'valorDiaria')->textInput(['type' => 'date']) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
