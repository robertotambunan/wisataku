<?php

namespace app\models;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "foto_wisata".
 *
 * @property int $id_fotowisata
 * @property int $id_user
 * @property string $foto
 *
 * @property User $user
 */
class FotoWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
      public $file;
    public static function tableName()
    {
        return 'foto_wisata';
    }

    /**
     * @inheritdoc
     */
    public $imageFiles;
    public function rules()
    {
        return [
             [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['id_user', 'foto'], 'required'],
              [['file'],'file'], 
            [['id_user'], 'integer'],
            [['foto'], 'string', 'max' => 200],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id_user']],
        ];
        }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fotowisata' => 'Id Fotowisata',
             'file' => 'Foto',
            'id_user' => 'Id User',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }
    
    public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }
}
