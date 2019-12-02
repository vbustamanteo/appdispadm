<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Escuela]].
 *
 * @see Escuela
 */
class EscuelaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Escuela[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Escuela|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
