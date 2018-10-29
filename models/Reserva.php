<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $id
 * @property int $veiculo
 * @property string $dataRes
 * @property int $locatario
 * @property string $dataBaixaRes
 * @property int $funcionario
 *
 * @property Veiculo $veiculo0
 * @property Locatario $locatario0
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['veiculo', 'dataRes', 'locatario', 'dataBaixaRes', 'funcionario'], 'required'],
            [['veiculo', 'locatario', 'funcionario'], 'integer'],
            [['dataRes', 'dataBaixaRes'], 'string', 'max' => 100],
            [['veiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::className(), 'targetAttribute' => ['veiculo' => 'id']],
            [['locatario'], 'exist', 'skipOnError' => true, 'targetClass' => Locatario::className(), 'targetAttribute' => ['locatario' => 'id']],
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
            'dataRes' => 'Data Res',
            'locatario' => 'Locatario',
            'dataBaixaRes' => 'Data Baixa Res',
            'funcionario' => 'Funcionario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculo0()
    {
        return $this->hasOne(Veiculo::className(), ['id' => 'veiculo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocatario0()
    {
        return $this->hasOne(Locatario::className(), ['id' => 'locatario']);
    }
}
