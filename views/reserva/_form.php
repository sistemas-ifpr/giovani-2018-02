<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Veiculo;
use app\models\Funcionario;
use yii\helpers\ArrayHelper;
use app\models\Locatario;

/* @var $this yii\web\View */
/* @var $model app\models\Reserva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reserva-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'veiculo')->dropDownList(
        ArrayHelper::map(Veiculo::find()->all(),'id','modelo'),['promp'=>'Select Veiculo']
            ); ?> -->
    <?= $form->field($model, 'veiculo')->dropDownList( ArrayHelper::map(Veiculo::find()->all(),'id','modelo')) ?>

    <?= $form->field($model, 'dataRes')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'locatario')->dropDownList( ArrayHelper::map(Locatario::find()->all(),'id','nome')) ?>

    <?= $form->field($model, 'dataBaixaRes')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'funcionario')->dropDownList( ArrayHelper::map(Funcionario::find()->all(),'id','nome')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
