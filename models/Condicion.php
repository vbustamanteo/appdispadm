<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "condicion".
 *
 * @property int $con_iCodigo
 * @property string $con_vcNombre
 *
 * @property Docente[] $docentes
 * @property DocenteViejo[] $docenteViejos
 */
class Condicion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'condicion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['con_iCodigo', 'con_vcNombre'], 'required'],
            [['con_iCodigo'], 'integer'],
            [['con_vcNombre'], 'string', 'max' => 20],
            [['con_iCodigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'con_iCodigo' => 'Id',
            'con_vcNombre' => 'Condición',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['con_iCodigo' => 'con_iCodigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocenteViejos()
    {
        return $this->hasMany(DocenteViejo::className(), ['con_iCodigo' => 'con_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return CondicionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CondicionQuery(get_called_class());
    }
}
