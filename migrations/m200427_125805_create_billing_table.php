<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billing}}`.
 */
class m200427_125805_create_billing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billing}}');
    }
}
