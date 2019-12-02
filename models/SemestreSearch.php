<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Semestre;

/**
 * SemestreSearch represents the model behind the search form of `app\models\Semestre`.
 */
class SemestreSearch extends Semestre
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sem_iCodigo'], 'integer'],
            [['sem_vcCodigo', 'sem_dFechaInicioDisp', 'sem_dFechaFinDisp', 'sem_cActivo'], 'safe'],
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
        $query = Semestre::find();

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
            'sem_iCodigo' => $this->sem_iCodigo,
            'sem_dFechaInicioDisp' => $this->sem_dFechaInicioDisp,
            'sem_dFechaFinDisp' => $this->sem_dFechaFinDisp,
        ]);

        $query->andFilterWhere(['like', 'sem_vcCodigo', $this->sem_vcCodigo])
            ->andFilterWhere(['like', 'sem_cActivo', $this->sem_cActivo]);

        return $dataProvider;
    }
}
