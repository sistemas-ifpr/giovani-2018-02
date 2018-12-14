<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devolucao".
 *
 * @property int $id
 * @property string $dataHora
 * @property int $emprestimo
 *
 * @property Emprestimo $emprestimo0
 */
class Devolucao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'devolucao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataHora', 'emprestimo'], 'required'],
            [['dataHora'], 'safe'],
            [['emprestimo'], 'integer'],
            [['emprestimo'], 'exist', 'skipOnError' => true, 'targetClass' => Emprestimo::className(), 'targetAttribute' => ['emprestimo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dataHora' => 'Data Hora',
            'emprestimo' => 'Emprestimo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmprestimo0()
    {
        return $this->hasOne(Emprestimo::className(), ['id' => 'emprestimo']);
    }
}
