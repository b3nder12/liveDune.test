<?php

use yii\db\Migration;

/**
 * Class m200427_160852_drop_email_to_users
 */
class m200427_160852_drop_email_to_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('users', 'email');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200427_160852_drop_email_to_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200427_160852_drop_email_to_users cannot be reverted.\n";

        return false;
    }
    */
}
