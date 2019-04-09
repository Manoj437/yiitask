<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Department".
 *
 * @property string $department_id
 * @property string $department_name
 * @property int $commision
 * @property double $allowance
 * @property double $deduction
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name'], 'required'],
            [['commision'], 'integer'],
            [['allowance', 'deduction'], 'number'],
            [['department_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'department_name' => 'Department Name',
            'commision' => 'Commision',
            'allowance' => 'Allowance',
            'deduction' => 'Deduction',
        ];
    }
}
