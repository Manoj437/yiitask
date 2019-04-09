<?php

use yii\db\Migration;

/**
 * Class m190407_185000_department_table
 */
class m190407_185000_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('department', [
            'department_id' => $this->primaryKey()->unsigned(),
            'department_name' => $this->string(45)->notNull(),
            'commision' => $this->integer(10),
            'allowance' => $this->float(4),
            'deduction' => $this->float(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('department');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190407_185000_department_table cannot be reverted.\n";

        return false;
    }
    */
}
