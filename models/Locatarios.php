<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locatarios".
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $celular
 * @property string $endereco
 * @property int $numCarteiraHab
 */
class Locatarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locatarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'numCarteiraHab'], 'required'],
            [['numCarteiraHab'], 'integer'],
            [['nome', 'cpf', 'telefone', 'celular', 'endereco'], 'string', 'max' => 100],
            [['cpf'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'endereco' => 'Endereco',
            'numCarteiraHab' => 'Num Carteira Hab',
        ];
    }
}
