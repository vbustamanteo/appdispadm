<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distrito".
 *
 * @property int $dis_iCodigo
 * @property string $dis_vcNombre
 *
 * @property Docente[] $docentes
 */
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distrito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dis_iCodigo', 'dis_vcNombre'], 'required'],
            [['dis_iCodigo'], 'integer'],
            [['dis_vcNombre'], 'string', 'max' => 50],
            [['dis_iCodigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dis_iCodigo' => 'Id',
            'dis_vcNombre' => 'Distrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocentes()
    {
        return $this->hasMany(Docente::className(), ['dis_iCodigo' => 'dis_iCodigo']);
    }

    /**
     * {@inheritdoc}
     * @return DistritoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistritoQuery(get_called_class());
    }
}
