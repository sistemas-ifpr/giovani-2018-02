<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $id
 * @property int $veiculo
 * @property string $dataEmprestimo
 * @property string $dataDevolucao
 * @property string $valorLocacao
 * @property int $cliente
 * @property int $funcionario
 * @property string $devolvido
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['veiculo', 'dataEmprestimo', 'dataDevolucao', 'valorLocacao', 'cliente', 'funcionario'], 'required'],
            [['veiculo', 'cliente', 'funcionario'], 'integer'],
            [['dataEmprestimo', 'dataDevolucao', 'valorLocacao'], 'string', 'max' => 100],
            [['devolvido'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'veiculo' => 'Veiculo',
            'dataEmprestimo' => 'Data Emprestimo',
            'dataDevolucao' => 'Data Devolucao',
            'valorLocacao' => 'Valor Locacao',
            'cliente' => 'Cliente',
            'funcionario' => 'Funcionario',
            'devolvido' => 'Devolvido',
        ];
    }
}
