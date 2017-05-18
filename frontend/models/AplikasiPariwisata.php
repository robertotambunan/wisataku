<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aplikasi_pariwisata".
 *
 * @property int $id_aplikasipariwisata
 * @property string $nama_aplikasi
 */
class AplikasiPariwisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aplikasi_pariwisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_aplikasi'], 'required'],
            [['nama_aplikasi'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_aplikasipariwisata' => 'Id Aplikasipariwisata',
            'nama_aplikasi' => 'Nama Aplikasi',
        ];
    }
}
