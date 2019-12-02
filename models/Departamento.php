<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property int $depto_iCodigo
 * @property string $depto_vcNombre
 * @property int $dep_iCodigo
 *
 * @property Dependencia $dependencia
 * @property Docente[] $docentes
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['depto_vcNombre', 'dep_iCodigo'], 'required'],
            [['dep_iCodigo'], 'integer'],
            [['depto_vcNombre'], 'string', 'max' => 75],
            [['dep_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencia::className(), 'targetAttribute' => ['dep_iCodigo' => 'dep_iCodigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'depto_iCodigo' => 'Id',
            'depto_vcNombre' => 'Departamento',
            'dep_iCodigo' => 'Dep-Cod',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia()
    {
        return $this->hasOne(Dependencia::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['depto_iCodigo' => 'depto_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return DepartamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartamentoQuery(get_called_class());
    }
}
