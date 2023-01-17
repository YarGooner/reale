<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apartments}}`.
 */
class m230117_085047_create_apartment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apartment}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'subtitle' => $this->string()->notNull(),
            'description' => $this->text(),
            'price' => $this->decimal(2)->notNull(),
            'floor' => $this->integer()->notNull(),
            'image' => $this->string(),
            'address' => $this->string(),
            'addname' => $this->string(),
            'room' => $this->integer(),
            'addimage' => $this->string(),
            'TinyInt' => $this->boolean()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%apartment}}');
    }
}
