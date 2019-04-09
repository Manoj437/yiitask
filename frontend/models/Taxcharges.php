<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Taxcharges".
 *
 * @property string $tax_id
 * @property double $salary_upto
 * @property double $tax_percentage
 */
class Taxcharges extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Taxcharges';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['salary_upto', 'tax_percentage'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tax_id' => 'Tax ID',
            'salary_upto' => 'Salary Upto',
            'tax_percentage' => 'Tax Percentage',
        ];
    }
}
