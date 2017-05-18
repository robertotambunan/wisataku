<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trip_plan".
 *
 * @property int $id_tripplan
 * @property int $id_wisata
 * @property string $nama_trip
 * @property string $jam_trip
 * @property string $tanggal_trip
 * @property string $catatan
 *
 * @property Wisata $wisata
 */
class TripPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trip_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_wisata'], 'required'],
            [['id_wisata'], 'integer'],
            [['jam_trip', 'tanggal_trip'], 'safe'],
            [['nama_trip', 'catatan'], 'string', 'max' => 200],
            [['id_wisata'], 'exist', 'skipOnError' => true, 'targetClass' => Wisata::className(), 'targetAttribute' => ['id_wisata' => 'id_wisata']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tripplan' => 'Id Tripplan',
            'id_wisata' => 'Id Wisata',
            'nama_trip' => 'Nama Trip',
            'jam_trip' => 'Jam Trip',
            'tanggal_trip' => 'Tanggal Trip',
            'catatan' => 'Catatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWisata()
    {
        return $this->hasOne(Wisata::className(), ['id_wisata' => 'id_wisata']);
    }
}
