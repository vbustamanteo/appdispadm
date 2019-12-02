<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semestre".
 *
 * @property int $sem_iCodigo
 * @property string $sem_vcCodigo
 * @property string|null $sem_dFechaInicioDisp
 * @property string|null $sem_dFechaFinDisp
 * @property string|null $sem_cActivo
 *
 * @property Disponibilidad[] $disponibilidads
 * @property Disponibilidad[] $disponibilidads0
 * @property Docente[] $docICodigos
 * @property Docente[] $docICodigos0
 * @property Docente[] $docICodigos1
 * @property Docente[] $docICodigos2
 * @property SemestreDisponibilidad[] $semestreDisponibilidads
 * @property SemestreDisponibilidad[] $semestreDisponibilidads0
 */
class Semestre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semestre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sem_vcCodigo'], 'required'],
            [['sem_dFechaInicioDisp', 'sem_dFechaFinDisp'], 'safe'],
            [['sem_vcCodigo'], 'string', 'max' => 10],
            [['sem_cActivo'], 'string', 'max' => 1],
            [['sem_vcCodigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sem_iCodigo' => 'Id',
            'sem_vcCodigo' => 'Semestre',
            'sem_dFechaInicioDisp' => 'Fecha Inicio',
            'sem_dFechaFinDisp' => 'Fecha Fin',
            'sem_cActivo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidads()
    {
        return $this->hasMany(Disponibilidad::className(), ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidads0()
    {
        return $this->hasMany(Disponibilidad::className(), ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocICodigos()
    {
        return $this->hasMany(Docente::className(), ['doc_iCodigo' => 'doc_iCodigo'])->viaTable('disponibilidad', ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocICodigos0()
    {
        return $this->hasMany(Docente::className(), ['doc_iCodigo' => 'doc_iCodigo'])->viaTable('disponibilidad', ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocICodigos1()
    {
        return $this->hasMany(Docente::className(), ['doc_iCodigo' => 'doc_iCodigo'])->viaTable('disponibilidad', ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocICodigos2()
    {
        return $this->hasMany(Docente::className(), ['doc_iCodigo' => 'doc_iCodigo'])->viaTable('disponibilidad', ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemestreDisponibilidads()
    {
        return $this->hasMany(SemestreDisponibilidad::className(), ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemestreDisponibilidads0()
    {
        return $this->hasMany(SemestreDisponibilidad::className(), ['sem_iCodigo' => 'sem_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return SemestreQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SemestreQuery(get_called_class());
    }
}
