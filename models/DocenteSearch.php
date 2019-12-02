<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Docente;

/**
 * DocenteSearch represents the model behind the search form of `app\models\Docente`.
 */
class DocenteSearch extends Docente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_iCodigo', 'cat_iCodigo', 'tipo_iCodigo', 'est_iCodigo', 'con_iCodigo', 'dis_iCodigo', 'dep_iCodigo', 'expadm_iCodigo', 'carunm_iCodigo', 'doc_iFoto', 'depto_iCodigo'], 'integer'],
            [['doc_vcCodigo', 'doc_vcDni', 'doc_vcTipo', 'doc_vcPaterno', 'doc_vcMaterno', 'doc_vcNombre', 'cat_vcCodigo', 'est_vcCodigo', 'doc_vcDireccion', 'dep_vcCodigo', 'doc_vcFacultad', 'doc_vcTelefono', 'doc_vcCelular', 'doc_vcEmail', 'doc_vcEmail2', 'doc_vcIpHost', 'doc_dNacimiento', 'doc_vcClave'], 'safe'],
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
        $query = Docente::find();

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
            'doc_iCodigo' => $this->doc_iCodigo,
            'cat_iCodigo' => $this->cat_iCodigo,
            'tipo_iCodigo' => $this->tipo_iCodigo,
            'est_iCodigo' => $this->est_iCodigo,
            'con_iCodigo' => $this->con_iCodigo,
            'dis_iCodigo' => $this->dis_iCodigo,
            'dep_iCodigo' => $this->dep_iCodigo,
            'expadm_iCodigo' => $this->expadm_iCodigo,
            'carunm_iCodigo' => $this->carunm_iCodigo,
            'doc_dNacimiento' => $this->doc_dNacimiento,
            'doc_iFoto' => $this->doc_iFoto,
            'depto_iCodigo' => $this->depto_iCodigo,
        ]);

        $query->andFilterWhere(['like', 'doc_vcCodigo', $this->doc_vcCodigo])
            ->andFilterWhere(['like', 'doc_vcDni', $this->doc_vcDni])
            ->andFilterWhere(['like', 'doc_vcTipo', $this->doc_vcTipo])
            ->andFilterWhere(['like', 'doc_vcPaterno', $this->doc_vcPaterno])
            ->andFilterWhere(['like', 'doc_vcMaterno', $this->doc_vcMaterno])
            ->andFilterWhere(['like', 'doc_vcNombre', $this->doc_vcNombre])
            ->andFilterWhere(['like', 'cat_vcCodigo', $this->cat_vcCodigo])
            ->andFilterWhere(['like', 'est_vcCodigo', $this->est_vcCodigo])
            ->andFilterWhere(['like', 'doc_vcDireccion', $this->doc_vcDireccion])
            ->andFilterWhere(['like', 'dep_vcCodigo', $this->dep_vcCodigo])
            ->andFilterWhere(['like', 'doc_vcFacultad', $this->doc_vcFacultad])
            ->andFilterWhere(['like', 'doc_vcTelefono', $this->doc_vcTelefono])
            ->andFilterWhere(['like', 'doc_vcCelular', $this->doc_vcCelular])
            ->andFilterWhere(['like', 'doc_vcEmail', $this->doc_vcEmail])
            ->andFilterWhere(['like', 'doc_vcEmail2', $this->doc_vcEmail2])
            ->andFilterWhere(['like', 'doc_vcIpHost', $this->doc_vcIpHost])
            ->andFilterWhere(['like', 'doc_vcClave', $this->doc_vcClave]);

        return $dataProvider;
    }
}
