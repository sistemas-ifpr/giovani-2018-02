<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Funcionario;
use yii\helpers\ArrayHelper;
use app\models\Locatario;
use app\models\Veiculo;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emprestimo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'veiculo')->dropDownList( ArrayHelper::map(Veiculo::find()->all(),'id','modelo')) ?>

    <?= $form->field($model, 'dataEmprestimo')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'dataDevolucao')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'valorLocacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente')->dropDownList( ArrayHelper::map(Locatario::find()->all(),'id','nome')) ?>

    <?= $form->field($model, 'funcionario')->dropDownList( ArrayHelper::map(Funcionario::find()->all(),'id','nome')) ?>

    <?= $form->field($model, 'devolvido')->dropDownList(array('1'=>'Não','2'=>'Sim')); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
