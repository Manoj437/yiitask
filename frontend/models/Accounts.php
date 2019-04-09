<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property string $id
 * @property string $user_id
 * @property double $payable_salary
 * @property double $basic_salary
 * @property double $tax_value
 *
 * @property User $user
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['payable_salary', 'basic_salary', 'tax_value'], 'number'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'uid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'payable_salary' => Yii::t('app', 'Payable Salary'),
            'basic_salary' => Yii::t('app', 'Basic Salary'),
            'tax_value' => Yii::t('app', 'Tax Value'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['uid' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return AccountsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountsQuery(get_called_class());
    }
}
