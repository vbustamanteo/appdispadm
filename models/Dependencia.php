<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "dependencia".
 *
 * @property int $dep_iCodigo
 * @property string $dep_vcCodigo
 * @property string $dep_vcNombre
 *
 * @property Departamento[] $departamentos
 * @property Docente[] $docentes
 * @property Docente[] $docentes0
 * @property DocenteViejo[] $docenteViejos
 * @property DocenteViejo[] $docenteViejos0
 */
class Dependencia extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dependencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_vcCodigo', 'dep_vcNombre'], 'required'],
            [['dep_vcCodigo'], 'string', 'max' => 6],
            [['dep_vcNombre'], 'string', 'max' => 75],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dep_iCodigo' => 'Id',
            'dep_vcCodigo' => 'Dep-Cod',
            'dep_vcNombre' => 'Dependencia',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocentes0()
    {
        return $this->hasMany(Docente::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocenteViejos()
    {
        return $this->hasMany(DocenteViejo::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocenteViejos0()
    {
        return $this->hasMany(DocenteViejo::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return DependenciaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DependenciaQuery(get_called_class());
    }
}
