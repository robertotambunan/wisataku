<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReviewWisata;

/**
 * ReviewWisataSearch represents the model behind the search form of `app\models\ReviewWisata`.
 */
class ReviewWisataSearch extends ReviewWisata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_reviewwisata', 'id_user'], 'integer'],
            [['konten_review'], 'safe'],
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
        $query = ReviewWisata::find();

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
            'id_reviewwisata' => $this->id_reviewwisata,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'konten_review', $this->konten_review]);

        return $dataProvider;
    }
}
