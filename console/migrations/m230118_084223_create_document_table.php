<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m230118_084223_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string()->notNull(),
            'file' => $this->string()->notNuLL(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%document}}');
    }
}
