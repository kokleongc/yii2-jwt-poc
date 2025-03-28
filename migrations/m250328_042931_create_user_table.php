<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m250328_042931_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->char(255)->notNull()->unique(),
            'password' => $this->char(255)->notNull(),
            'authKey' => $this->char(255)->notNull(),
            'accessToken' => $this->char(255)->notNull(),
        ]);

        $this->batchInsert('{{%user}}', ['username', 'password', 'authKey', 'accessToken'], [
            ['admin', 'admin', 'admin', 'admin'],
            ['demo', 'demo', 'demo', 'demo'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
