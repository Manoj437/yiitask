<?php

use yii\db\Migration;

/**
 * Class m190407_200708_userType
 */
class m190407_200708_userType extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usertype', [
            'user_type_id' => $this->primaryKey()->unsigned(),
            'user_type_name' => $this->string(45)->notNull(),
            'basic_salary' => $this->float(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usertype');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190407_200708_userType cannot be reverted.\n";

        return false;
    }
    */
}
