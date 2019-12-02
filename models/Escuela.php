<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escuela".
 *
 * @property int $esc_iCodigo
 * @property string $esc_vcCodigo
 * @property string $esc_vcNombre
 *
 * @property DisponibilidadCurso[] $disponibilidadCursos
 * @property DisponibilidadCurso[] $disponibilidadCursos0
 */
class Escuela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'escuela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['esc_vcCodigo', 'esc_vcNombre'], 'required'],
            [['esc_vcCodigo'], 'string', 'max' => 10],
            [['esc_vcNombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'esc_iCodigo' => 'Id',
            'esc_vcCodigo' => 'Esc-Cod',
            'esc_vcNombre' => 'Escuela',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidadCursos()
    {
        return $this->hasMany(DisponibilidadCurso::className(), ['esc_iCodigo' => 'esc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidadCursos0()
    {
        return $this->hasMany(DisponibilidadCurso::className(), ['esc_iCodigo' => 'esc_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return EscuelaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EscuelaQuery(get_called_class());
    }
}
