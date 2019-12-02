<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property int $est_iCodigo
 * @property string $est_vcCodigo
 *
 * @property Docente[] $docentes
 * @property Docente[] $docentes0
 * @property DocenteViejo[] $docenteViejos
 * @property DocenteViejo[] $docenteViejos0
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['est_vcCodigo'], 'required'],
            [['est_vcCodigo'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'est_iCodigo' => 'Id',
            'est_vcCodigo' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes0()
    {
        return $this->hasMany(Docente::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocenteViejos()
    {
        return $this->hasMany(DocenteViejo::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocenteViejos0()
    {
        return $this->hasMany(DocenteViejo::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return EstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EstadoQuery(get_called_class());
    }
}
