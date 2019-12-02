<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Escuela;

/**
 * EscuelaSearch represents the model behind the search form of `app\models\Escuela`.
 */
class EscuelaSearch extends Escuela
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['esc_iCodigo'], 'integer'],
            [['esc_vcCodigo', 'esc_vcNombre'], 'safe'],
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
        $query = Escuela::find();

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
            'esc_iCodigo' => $this->esc_iCodigo,
        ]);

        $query->andFilterWhere(['like', 'esc_vcCodigo', $this->esc_vcCodigo])
            ->andFilterWhere(['like', 'esc_vcNombre', $this->esc_vcNombre]);

        return $dataProvider;
    }
}
