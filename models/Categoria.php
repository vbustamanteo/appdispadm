<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "categoria".
 *
 * @property int $cat_iCodigo
 * @property string $cat_vcCodigo
 * @property string $cat_vcNombre
 * @property int $cat_iHoras
 * @property string|null $cat_vcNobre
 *
 * @property Docente[] $docentes
 * @property Docente[] $docentes0
 * @property DocenteViejo[] $docenteViejos
 * @property DocenteViejo[] $docenteViejos0
 */
class Categoria extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_vcCodigo', 'cat_vcNombre'], 'required'],
            [['cat_iHoras'], 'integer'],
            [['cat_vcCodigo'], 'string', 'max' => 6],
            [['cat_vcNombre'], 'string', 'max' => 50],
            [['cat_vcNobre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cat_iCodigo' => 'Id',
            'cat_vcCodigo' => 'Cat-Cod',
            'cat_vcNombre' => 'Categoría',
            'cat_iHoras' => 'Horas',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocentes0()
    {
        return $this->hasMany(Docente::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocenteViejos()
    {
        return $this->hasMany(DocenteViejo::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * @return ActiveQuery
     */
    public function getDocenteViejos0()
    {
        return $this->hasMany(DocenteViejo::className(), ['cat_iCodigo' => 'cat_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return CategoriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriaQuery(get_called_class());
    }
}
