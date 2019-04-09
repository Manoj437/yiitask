<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $uid
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $user_type_id
 * @property string $department_id
 *
 * @property Account[] $accounts
 * @property Department $department
 * @property Usertype $userType
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'password', 'user_type_id', 'department_id'], 'required'],
            [['user_type_id', 'department_id'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 45],
            [['email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'department_id']],
            [['user_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usertype::className(), 'targetAttribute' => ['user_type_id' => 'user_type_id']],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => Yii::t('app', 'Uid'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'user_type_id' => Yii::t('app', 'User Type ID'),
            'department_id' => Yii::t('app', 'Department ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Accounts::className(), ['user_id' => 'uid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserType()
    {
        return $this->hasOne(Usertype::className(), ['user_type_id' => 'user_type_id']);
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
