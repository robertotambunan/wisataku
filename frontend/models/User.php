<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $password_hash
 * @property string $email
 *
 * @property FotoWisata[] $fotoWisatas
 * @property ReviewWisata[] $reviewWisatas
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password', 'email','password_hash'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'password_hash' => 'Password Hash'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotoWisatas()
    {
        return $this->hasMany(FotoWisata::className(), ['id_user' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewWisatas()
    {
        return $this->hasMany(ReviewWisata::className(), ['id_user' => 'id_user']);
    }
    
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
}
