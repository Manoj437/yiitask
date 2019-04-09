<?php

use yii\db\Migration;

/**
 * Class m190407_210705_accounts
 */
class m190407_210705_accounts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('accounts', [
            'id' => $this->primaryKey()->unsigned(),
            'user_id' => $this->integer(10)->unsigned()->notNull(),
            'payable_salary' => $this->float(4),
            'basic_salary' => $this->float(4),
            'tax_value' => $this->float(4),
        ]);
        
        $this->createIndex('idx_accounts_user_id_accounts', 'accounts', 'user_id');
        
        $this->addForeignKey('fk_accounts_user_id_accounts', 'accounts', 'user_id', 'user', 'uid', 'restrict', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_accounts_user_id_accounts', 'accounts');
        $this->dropIndex('idx_accounts_user_id_accounts', 'accounts');
        $this->dropTable('accounts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190407_210705_accounts cannot be reverted.\n";

        return false;
    }
    */
}
