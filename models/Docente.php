<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docente".
 *
 * @property int $doc_iCodigo
 * @property string $doc_vcCodigo
 * @property string $doc_vcDni
 * @property string|null $doc_vcTipo
 * @property string|null $doc_vcPaterno
 * @property string|null $doc_vcMaterno
 * @property string|null $doc_vcNombre
 * @property string|null $cat_vcCodigo
 * @property int|null $cat_iCodigo
 * @property int|null $tipo_iCodigo
 * @property int|null $est_iCodigo
 * @property string|null $est_vcCodigo
 * @property int|null $con_iCodigo
 * @property int|null $dis_iCodigo
 * @property string|null $doc_vcDireccion
 * @property int|null $dep_iCodigo
 * @property string|null $dep_vcCodigo
 * @property string|null $doc_vcFacultad
 * @property int|null $expadm_iCodigo
 * @property int|null $carunm_iCodigo
 * @property string|null $doc_vcTelefono
 * @property string|null $doc_vcCelular
 * @property string|null $doc_vcEmail
 * @property string|null $doc_vcEmail2
 * @property string|null $doc_vcIpHost
 * @property string|null $doc_dNacimiento
 * @property int|null $doc_iFoto
 * @property string|null $doc_vcClave
 * @property int|null $depto_iCodigo
 *
 * @property Disponibilidad[] $disponibilidads
 * @property Disponibilidad[] $disponibilidads0
 * @property Semestre[] $semICodigos
 * @property Semestre[] $semICodigos0
 * @property Semestre[] $semICodigos1
 * @property Semestre[] $semICodigos2
 * @property Estado $estICodigo
 * @property Categoria $catICodigo
 * @property Dependencia $depICodigo
 * @property Tipo $tipoICodigo
 * @property Condicion $conICodigo
 * @property Distrito $disICodigo
 * @property Categoria $catICodigo0
 * @property Estado $estICodigo0
 * @property Dependencia $depICodigo0
 * @property Departamento $deptoICodigo
 */
class Docente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_vcCodigo', 'doc_vcDni'], 'required'],
            [['cat_iCodigo', 'tipo_iCodigo', 'est_iCodigo', 'con_iCodigo', 'dis_iCodigo', 'dep_iCodigo', 'expadm_iCodigo', 'carunm_iCodigo', 'doc_iFoto', 'depto_iCodigo'], 'integer'],
            [['doc_dNacimiento'], 'safe'],
            [['doc_vcCodigo', 'doc_vcDni'], 'string', 'max' => 12],
            [['doc_vcTipo'], 'string', 'max' => 20],
            [['doc_vcPaterno', 'doc_vcMaterno', 'doc_vcNombre'], 'string', 'max' => 50],
            [['cat_vcCodigo', 'dep_vcCodigo', 'doc_vcFacultad'], 'string', 'max' => 6],
            [['est_vcCodigo'], 'string', 'max' => 25],
            [['doc_vcDireccion'], 'string', 'max' => 80],
            [['doc_vcTelefono', 'doc_vcCelular'], 'string', 'max' => 10],
            [['doc_vcEmail'], 'string', 'max' => 100],
            [['doc_vcEmail2'], 'string', 'max' => 64],
            [['doc_vcIpHost', 'doc_vcClave'], 'string', 'max' => 16],
            [['est_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['est_iCodigo' => 'est_iCodigo']],
            [['cat_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['cat_iCodigo' => 'cat_iCodigo']],
            [['dep_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencia::className(), 'targetAttribute' => ['dep_iCodigo' => 'dep_iCodigo']],
            [['tipo_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['tipo_iCodigo' => 'tipo_iCodigo']],
            [['con_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Condicion::className(), 'targetAttribute' => ['con_iCodigo' => 'con_iCodigo']],
            [['dis_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Distrito::className(), 'targetAttribute' => ['dis_iCodigo' => 'dis_iCodigo']],
            [['cat_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['cat_iCodigo' => 'cat_iCodigo']],
            [['est_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['est_iCodigo' => 'est_iCodigo']],
            [['dep_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencia::className(), 'targetAttribute' => ['dep_iCodigo' => 'dep_iCodigo']],
            [['depto_iCodigo'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['depto_iCodigo' => 'depto_iCodigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'doc_iCodigo' => 'Id',
            'doc_vcCodigo' => 'Código',
            'doc_vcDni' => 'Dni',
            'doc_vcTipo' => 'Tipo-vc',
            'doc_vcPaterno' => 'Paterno',
            'doc_vcMaterno' => 'Materno',
            'doc_vcNombre' => 'Nombre',
            'cat_vcCodigo' => 'Categoria',
            'cat_iCodigo' => 'Cat-Cod',
            'tipo_iCodigo' => 'Tipo',
            'est_iCodigo' => 'Estado',
            'est_vcCodigo' => 'Estado-vc',
            'con_iCodigo' => 'Condicion',
            'dis_iCodigo' => 'Distrito',
            'doc_vcDireccion' => 'Dirección',
            'dep_iCodigo' => 'Dependencia',
            'dep_vcCodigo' => 'Dependencia-vc',
            'doc_vcFacultad' => 'Facultad',
            'expadm_iCodigo' => 'Admision',
            'carunm_iCodigo' => 'Cargo-Unmsm',
            'doc_vcTelefono' => 'Telefono',
            'doc_vcCelular' => 'Celular',
            'doc_vcEmail' => 'Email-1',
            'doc_vcEmail2' => 'Email-2',
            'doc_vcIpHost' => 'Ip',
            'doc_dNacimiento' => 'Nacimiento',
            'doc_iFoto' => 'Foto',
            'doc_vcClave' => 'Clave',
            'depto_iCodigo' => 'Depto-Acad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidads()
    {
        return $this->hasMany(Disponibilidad::className(), ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisponibilidads0()
    {
        return $this->hasMany(Disponibilidad::className(), ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemICodigos()
    {
        return $this->hasMany(Semestre::className(), ['sem_iCodigo' => 'sem_iCodigo'])->viaTable('disponibilidad', ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemICodigos0()
    {
        return $this->hasMany(Semestre::className(), ['sem_iCodigo' => 'sem_iCodigo'])->viaTable('disponibilidad', ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemICodigos1()
    {
        return $this->hasMany(Semestre::className(), ['sem_iCodigo' => 'sem_iCodigo'])->viaTable('disponibilidad', ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemICodigos2()
    {
        return $this->hasMany(Semestre::className(), ['sem_iCodigo' => 'sem_iCodigo'])->viaTable('disponibilidad', ['doc_iCodigo' => 'doc_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstICodigo()
    {
        return $this->hasOne(Estado::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatICodigo()
    {
        return $this->hasOne(Categoria::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepICodigo()
    {
        return $this->hasOne(Dependencia::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoICodigo()
    {
        return $this->hasOne(Tipo::className(), ['tipo_iCodigo' => 'tipo_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConICodigo()
    {
        return $this->hasOne(Condicion::className(), ['con_iCodigo' => 'con_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisICodigo()
    {
        return $this->hasOne(Distrito::className(), ['dis_iCodigo' => 'dis_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatICodigo0()
    {
        return $this->hasOne(Categoria::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstICodigo0()
    {
        return $this->hasOne(Estado::className(), ['est_iCodigo' => 'est_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepICodigo0()
    {
        return $this->hasOne(Dependencia::className(), ['dep_iCodigo' => 'dep_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeptoICodigo()
    {
        return $this->hasOne(Departamento::className(), ['depto_iCodigo' => 'depto_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return DocenteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DocenteQuery(get_called_class());
    }
}
