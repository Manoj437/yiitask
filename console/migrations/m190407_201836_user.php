<?php

use yii\db\Migration;

/**
 * Class m190407_201836_user
 */
class m190407_201836_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'uid' => $this->primaryKey()->unsigned(),
            'first_name' => $this->string(45)->notNull(),
            'last_name' => $this->string(45)->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'user_type_id' => $this->integer(10)->unsigned()->notNull(),
            'department_id' => $this->integer(10)->unsigned()->notNull(),
        ]);
        
        $this->createIndex('idx_user_user_type_id_user', 'user', 'user_type_id');
        $this->createIndex('idx_user_department_id_user', 'user', 'department_id');
        $this->addForeignKey('fk_user_user_type_id_user', 'user', 'user_type_id', 'usertype', 'user_type_id', 'restrict', 'cascade');
        $this->addForeignKey('fk_user_department_id_user', 'user', 'department_id', 'department', 'department_id', 'restrict', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_user_type_id_user', 'user');
        $this->dropForeignKey('fk_user_department_id_user', 'user');
        $this->dropIndex('idx_user_user_type_id_user', 'user');
        $this->dropIndex('idx_user_department_id_user', 'user');
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190407_201836_user cannot be reverted.\n";

        return false;
    }
    */
}
