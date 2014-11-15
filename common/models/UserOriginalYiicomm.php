<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $UserTypeId
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $Names
 * @property string $PreferredName
 * @property string $Surname
 * @property string $Gender
 * @property integer $Birthday
 * @property string $Website
 * @property string $FacebookId
 * @property string $TwitterId
 * @property string $IsLikedFanPage
 * @property string $PhotoUrl
 * @property string $IsPersonal
 * @property string $IdentityNumber
 * @property string $TaxNumber
 * @property string $TaxOffice
 * @property string $Comment
 * @property integer $role
 * @property integer $status
 * @property integer $lastLogin
 * @property integer $previousLogin
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Addresses[] $addresses
 * @property Logs[] $logs
 * @property Phones[] $phones
 * @property Usertypes $userType
 * @property Userrestdata[] $userrestdatas
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
            [['UserTypeId', 'Birthday', 'role', 'status', 'lastLogin', 'previousLogin', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'email'], 'required'],
            [['Comment'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'Website'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['Names', 'PreferredName', 'Surname'], 'string', 'max' => 50],
            [['Gender', 'IsLikedFanPage', 'IsPersonal'], 'string', 'max' => 1],
            [['FacebookId', 'TwitterId'], 'string', 'max' => 100],
            [['PhotoUrl'], 'string', 'max' => 1000],
            [['IdentityNumber'], 'string', 'max' => 11],
            [['TaxNumber', 'TaxOffice'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'UserTypeId' => 'User Type ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'Names' => 'Names',
            'PreferredName' => 'Preferred Name',
            'Surname' => 'Surname',
            'Gender' => 'Gender',
            'Birthday' => 'Birthday',
            'Website' => 'Website',
            'FacebookId' => 'Facebook ID',
            'TwitterId' => 'Twitter ID',
            'IsLikedFanPage' => 'Is Liked Fan Page',
            'PhotoUrl' => 'Photo Url',
            'IsPersonal' => 'Is Personal',
            'IdentityNumber' => 'Identity Number',
            'TaxNumber' => 'Tax Number',
            'TaxOffice' => 'Tax Office',
            'Comment' => 'Comment',
            'role' => 'Role',
            'status' => 'Status',
            'lastLogin' => 'Last Login',
            'previousLogin' => 'Previous Login',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Addresses::className(), ['UserId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogs()
    {
        return $this->hasMany(Logs::className(), ['UserId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phones::className(), ['UserId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserType()
    {
        return $this->hasOne(Usertypes::className(), ['UserTypeId' => 'UserTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserrestdatas()
    {
        return $this->hasMany(Userrestdata::className(), ['UserId' => 'id']);
    }
}
