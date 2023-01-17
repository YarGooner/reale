<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%appoptions}}`.
 */
class m230117_121928_create_appoptions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%appoptions}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%appoptions}}');
    }
}
