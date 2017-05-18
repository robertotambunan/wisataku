<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KategoriWisata;

/**
 * KategoriWisataSearch represents the model behind the search form of `app\models\KategoriWisata`.
 */
class KategoriWisataSearch extends KategoriWisata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategoriwisata', 'id_jeniswisata'], 'integer'],
            [['nama_kategoriwisata'], 'safe'],
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
        $query = KategoriWisata::find();

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
            'id_kategoriwisata' => $this->id_kategoriwisata,
            'id_jeniswisata' => $this->id_jeniswisata,
        ]);

        $query->andFilterWhere(['like', 'nama_kategoriwisata', $this->nama_kategoriwisata]);

        return $dataProvider;
    }
}
