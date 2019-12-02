<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Distrito;

/**
 * DistritoSearch represents the model behind the search form of `app\models\Distrito`.
 */
class DistritoSearch extends Distrito
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dis_iCodigo'], 'integer'],
            [['dis_vcNombre'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Distrito::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'dis_iCodigo' => $this->dis_iCodigo,
        ]);

        $query->andFilterWhere(['like', 'dis_vcNombre', $this->dis_vcNombre]);

        return $dataProvider;
    }
}
