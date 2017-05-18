<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_wisata".
 *
 * @property int $id_kategoriwisata
 * @property int $id_jeniswisata
 * @property string $nama_kategoriwisata
 *
 * @property JenisWisata $jeniswisata
 * @property Wisata[] $wisatas
 */
class KategoriWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori_wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jeniswisata'], 'required'],
            [['id_jeniswisata'], 'integer'],
            [['nama_kategoriwisata'], 'string', 'max' => 100],
            [['id_jeniswisata'], 'exist', 'skipOnError' => true, 'targetClass' => JenisWisata::className(), 'targetAttribute' => ['id_jeniswisata' => 'id_jeniswisata']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategoriwisata' => 'Kategori Wisata',
            'id_jeniswisata' => 'Jenis Wisata',
            'nama_kategoriwisata' => 'Kategori Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJeniswisata()
    {
        return $this->hasOne(JenisWisata::className(), ['id_jeniswisata' => 'id_jeniswisata']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWisatas()
    {
        return $this->hasMany(Wisata::className(), ['id_kategoriwisata' => 'id_kategoriwisata']);
    }
    
   
}
