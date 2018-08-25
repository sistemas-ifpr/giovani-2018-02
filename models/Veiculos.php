<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculos".
 *
 * @property int $id
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string $anoFab
 * @property string $valorDiaria
 */
class Veiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['placa', 'marca', 'modelo', 'anoFab', 'valorDiaria'], 'required'],
            [['placa', 'marca', 'modelo', 'anoFab', 'valorDiaria'], 'string', 'max' => 100],
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
            'anoFab' => 'Ano Fab',
            'valorDiaria' => 'Valor Diaria',
        ];
    }
}
