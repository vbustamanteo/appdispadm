<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dependencia;

/**
 * DependenciaSearch represents the model behind the search form of `app\models\Dependencia`.
 */
class DependenciaSearch extends Dependencia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_iCodigo'], 'integer'],
            [['dep_vcCodigo', 'dep_vcNombre'], 'safe'],
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
        $query = Dependencia::find();

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
            'dep_iCodigo' => $this->dep_iCodigo,
        ]);

        $query->andFilterWhere(['like', 'dep_vcCodigo', $this->dep_vcCodigo])
            ->andFilterWhere(['like', 'dep_vcNombre', $this->dep_vcNombre]);

        return $dataProvider;
    }
}
