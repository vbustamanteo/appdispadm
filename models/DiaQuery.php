<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dia]].
 *
 * @see Dia
 */
class DiaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Dia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Dia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
