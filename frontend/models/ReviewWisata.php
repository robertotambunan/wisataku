<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review_wisata".
 *
 * @property int $id_reviewwisata
 * @property int $id_user
 * @property string $konten_review
 *
 * @property User $user
 */
class ReviewWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review_wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'konten_review'], 'required'],
            [['id_user'], 'integer'],
            [['konten_review'], 'string', 'max' => 400],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id_user']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reviewwisata' => 'Id Reviewwisata',
            'id_user' => 'Id User',
            'konten_review' => 'Konten Review',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id_user' => 'id_user']);
    }
}
