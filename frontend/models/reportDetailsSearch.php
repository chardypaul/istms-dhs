<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\reportDetails;

/**
 * reportDetailsSearch represents the model behind the search form about `app\models\reportDetails`.
 */
class reportDetailsSearch extends reportDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_no', 'subject', 'doc_date', 'doc_file', 'doc_name'], 'safe'],
            [['doc_for', 'doc_from', 'drawer_id', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = reportDetails::find();

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
            'doc_for' => $this->doc_for,
            'doc_from' => $this->doc_from,
            'doc_date' => $this->doc_date,
            'drawer_id' => $this->drawer_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'reference_no', $this->reference_no])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'doc_file', $this->doc_file])
            ->andFilterWhere(['like', 'doc_name', $this->doc_name]);

        return $dataProvider;
    }
}
