<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wisata;

/**
 * WisataSearch represents the model behind the search form of `app\models\Wisata`.
 */
class WisataSearch extends Wisata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_wisata', 'id_kategoriwisata','id_aplikasipariwisata'], 'integer'],
            [['nama_wisata', 'sejarah_wisata', 'jam_operasional', 'nomor_telepon', 'alamat_wisata', 'gambar_wisata', 'keterangan_wisata'], 'safe'],
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
        $query = Wisata::find();

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
            'id_wisata' => $this->id_wisata,
            'id_kategoriwisata' => $this->id_kategoriwisata,
        ]);

        $query->andFilterWhere(['like', 'nama_wisata', $this->nama_wisata])
            ->andFilterWhere(['like', 'sejarah_wisata', $this->sejarah_wisata])
            ->andFilterWhere(['like', 'jam_operasional', $this->jam_operasional])
            ->andFilterWhere(['like', 'nomor_telepon', $this->nomor_telepon])
            ->andFilterWhere(['like', 'alamat_wisata', $this->alamat_wisata])
            ->andFilterWhere(['like', 'gambar_wisata', $this->gambar_wisata])
            ->andFilterWhere(['like', 'keterangan_wisata', $this->keterangan_wisata]);

        return $dataProvider;
    }
    public function searchID($params)
    {
        $this->id_aplikasipariwisata=$params;
        $query = Wisata::find([]);
        
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
            'id_wisata' => $this->id_wisata,
            'id_kategoriwisata' => $this->id_kategoriwisata,
            'id_aplikasipariwisata'=>$this->id_aplikasipariwisata
        ]);

        $query->andFilterWhere(['like', 'nama_wisata', $this->nama_wisata])
            ->andFilterWhere(['like', 'sejarah_wisata', $this->sejarah_wisata])
            ->andFilterWhere(['like', 'jam_operasional', $this->jam_operasional])
            ->andFilterWhere(['like', 'nomor_telepon', $this->nomor_telepon])
            ->andFilterWhere(['like', 'alamat_wisata', $this->alamat_wisata])
            ->andFilterWhere(['like', 'gambar_wisata', $this->gambar_wisata])
            ->andFilterWhere(['like', 'keterangan_wisata', $this->keterangan_wisata]);

        return $dataProvider;
    }
}
