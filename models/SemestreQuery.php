<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Semestre]].
 *
 * @see Semestre
 */
class SemestreQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Semestre[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Semestre|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
