<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[Distrito]].
 *
 * @see Distrito
 */
class DistritoQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Distrito[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Distrito|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
