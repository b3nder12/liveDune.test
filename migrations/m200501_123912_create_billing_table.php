<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billing}}`.
 */
class m200501_123912_create_billing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billing}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string(),
            'payment_sum' => $this->integer()
        ]);

        $this->createIndex(
            'idx-user_id',
            'billing',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user_id',
            'billing',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billing}}');
    }
}
