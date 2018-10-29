<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculo".
 *
 * @property int $id
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string $anoModelo
 * @property string $anoFab
 * @property string $valorDiaria
 *
 * @property Reserva[] $reservas
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['placa', 'marca', 'modelo', 'anoModelo', 'anoFab', 'valorDiaria'], 'required'],
            [['placa', 'marca', 'modelo', 'anoModelo', 'anoFab', 'valorDiaria'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'placa' => 'Placa',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'anoModelo' => 'Ano Modelo',
            'anoFab' => 'Ano Fab',
            'valorDiaria' => 'Valor Diaria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['veiculo' => 'id']);
    }
}
