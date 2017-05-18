<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_wisata".
 *
 * @property int $id_jeniswisata
 * @property string $nama_jeniswisata
 *
 * @property KategoriWisata[] $kategoriWisatas
 */
class JenisWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jeniswisata'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jeniswisata' => 'Jenis Wisata',
            'nama_jeniswisata' => 'Nama Jenis Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriWisatas()
    {
        return $this->hasMany(KategoriWisata::className(), ['id_jeniswisata' => 'id_jeniswisata']);
    }
}
