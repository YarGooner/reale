<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%text}}`.
 */
class m230117_114526_create_text_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%text}}', 'group_test', $this->string());
        $this->addColumn('{{%text}}', 'image', $this->string());
        $this->addColumn('{{%text}}', 'comment', $this->string());
        $this->addColumn('{{%text}}', 'deletable', $this->boolean()->notNull()->defaultValue(1));

        $this->insert('{{%text}}', ['group_test' => 'contact', 'key' => 'main_address', 'value' => '', 'deletable' => 0]);
        $this->insert('{{%text}}', ['group_test' => 'contact', 'key' => 'main_phone', 'value' => '', 'deletable' => 0]);
        $this->insert('{{%text}}', ['group_test' => 'contact', 'key' => 'sales_office_address', 'value' => '', 'deletable' => 0]);
        $this->insert('{{%text}}', ['group_test' => 'contact', 'key' => 'sales_office_phone', 'value' => '', 'deletable' => 0]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%text}}', 'group_test');
        $this->dropColumn('{{%text}}', 'image');
        $this->dropColumn('{{%text}}', 'comment');
        $this->dropColumn('{{%text}}', 'deletable');

        $this->delete('{{%text}}', ['key' => 'main_address']);
        $this->delete('{{%text}}', ['key' => 'main_phone']);
        $this->delete('{{%text}}', ['key' => 'sales_office_address']);
        $this->delete('{{%text}}', ['key' => 'sales_office_phone']);
    }
}
