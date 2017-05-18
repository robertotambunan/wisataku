<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TripPlan;

/**
 * TripPlanSearch represents the model behind the search form of `app\models\TripPlan`.
 */
class TripPlanSearch extends TripPlan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tripplan', 'id_wisata'], 'integer'],
            [['nama_trip', 'jam_trip', 'tanggal_trip', 'catatan'], 'safe'],
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
        $query = TripPlan::find();

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
            'id_tripplan' => $this->id_tripplan,
            'id_wisata' => $this->id_wisata,
            'jam_trip' => $this->jam_trip,
            'tanggal_trip' => $this->tanggal_trip,
        ]);

        $query->andFilterWhere(['like', 'nama_trip', $this->nama_trip])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
