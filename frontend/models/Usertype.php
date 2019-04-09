<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Usertype".
 *
 * @property string $user_type_id
 * @property string $user_type_name
 * @property double $basic_salary
 */
class Usertype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Usertype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_type_name'], 'required'],
            [['basic_salary'], 'number'],
            [['user_type_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_type_id' => 'User Type ID',
            'user_type_name' => 'User Type Name',
            'basic_salary' => 'Basic Salary',
        ];
    }
}
