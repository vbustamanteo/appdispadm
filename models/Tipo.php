<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $tipo_iCodigo
 * @property string $tipo_vcNombre
 *
 * @property Docente[] $docentes
 * @property DocenteViejo[] $docenteViejos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_iCodigo', 'tipo_vcNombre'], 'required'],
            [['tipo_iCodigo'], 'integer'],
            [['tipo_vcNombre'], 'string', 'max' => 50],
            [['tipo_iCodigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tipo_iCodigo' => 'Id',
            'tipo_vcNombre' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['tipo_iCodigo' => 'tipo_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocenteViejos()
    {
        return $this->hasMany(DocenteViejo::className(), ['tipo_iCodigo' => 'tipo_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return TipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoQuery(get_called_class());
    }
}
