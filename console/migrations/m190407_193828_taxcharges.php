<?php

use yii\db\Migration;

/**
 * Class m190407_193828_taxcharges
 */
class m190407_193828_taxcharges extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('taxcharges', [
            'tax_id' => $this->primaryKey()->unsigned(),
            'salary_upto' => $this->float(4),
            'tax_percentage' => $this->float(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('taxcharges');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190407_193828_taxcharges cannot be reverted.\n";

        return false;
    }
    */
}
