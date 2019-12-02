<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipo;

/**
 * TipoSearch represents the model behind the search form of `app\models\Tipo`.
 */
class TipoSearch extends Tipo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_iCodigo'], 'integer'],
            [['tipo_vcNombre'], 'safe'],
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
        $query = Tipo::find();

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
            'tipo_iCodigo' => $this->tipo_iCodigo,
        ]);

        $query->andFilterWhere(['like', 'tipo_vcNombre', $this->tipo_vcNombre]);

        return $dataProvider;
    }
}
