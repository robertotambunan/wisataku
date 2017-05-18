<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wisata".
 *
 * @property int $id_wisata
 * @property int $id_kategoriwisata
 * @property int $id_aplikasipariwisata
 * @property string $nama_wisata
 * @property string $sejarah_wisata
 * @property string $jam_operasional
 * @property string $nomor_telepon
 * @property string $alamat_wisata
 * @property string $gambar_wisata
 * @property string $keterangan_wisata
 *
 * @property TripPlan[] $tripPlans
 * @property KategoriWisata $kategoriwisata
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $file;
    public static function tableName()
    {
        return 'wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategoriwisata', 'id_aplikasipariwisata'], 'required'],
            [['id_kategoriwisata'], 'integer'],
            [['nama_wisata', 'jam_operasional', 'alamat_wisata', 'gambar_wisata'], 'string', 'max' => 200],
      [['file'],'file'],        
    [['sejarah_wisata'], 'string', 'max' => 3000],
            [['nomor_telepon'], 'string', 'max' => 30],
            [['keterangan_wisata'], 'string', 'max' => 1000],
            [['id_kategoriwisata'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriWisata::className(), 'targetAttribute' => ['id_kategoriwisata' => 'id_kategoriwisata']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_wisata' => 'Id Wisata',
            'id_kategoriwisata' => 'Nama Kategori wisata',
            'id_aplikasipariwisata' => 'Id aplikasi',
            'nama_wisata' => 'Nama Wisata',
            'sejarah_wisata' => 'Sejarah Wisata',
            'jam_operasional' => 'Jam Operasional',
            'nomor_telepon' => 'Nomor Telepon',
            'alamat_wisata' => 'Alamat Wisata',
              'file' => 'Gambar Wisata', 
            'gambar_wisata' => 'Gambar Wisata',
            'keterangan_wisata' => 'Keterangan Wisata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTripPlans()
    {
        return $this->hasMany(TripPlan::className(), ['id_wisata' => 'id_wisata']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriwisata()
    {
        return $this->hasOne(KategoriWisata::className(), ['id_kategoriwisata' => 'id_kategoriwisata']);
    }

       
    }
