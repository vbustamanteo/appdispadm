<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "dia".
 *
 * @property int $dia_iCodigo
 * @property string $dia_vcNombre
 *
 * @property SemestreDisponibilidad[] $semestreDisponibilidads
 */
class Dia extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dia_iCodigo', 'dia_vcNombre'], 'required'],
            [['dia_iCodigo'], 'integer'],
            [['dia_vcNombre'], 'string', 'max' => 10],
            [['dia_vcNombre'], 'unique'],
            [['dia_iCodigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dia_iCodigo' => 'Día-Nro',
            'dia_vcNombre' => 'Día',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getSemestreDisponibilidads()
    {
        return $this->hasMany(SemestreDisponibilidad::className(), ['semdis_iDia' => 'dia_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return DiaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiaQuery(get_called_class());
    }
}
