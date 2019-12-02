<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Condicion]].
 *
 * @see Condicion
 */
class CondicionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Condicion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Condicion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
