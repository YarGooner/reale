<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%app_options}}`.
 */
class m230118_081751_create_app_options_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%app_options}}', 'key', $this->string()->notNull());
        $this->addColumn('{{%app_options}}', 'value', $this->string()->notNull());
        $this->addColumn('{{%app_options}}', 'comment', $this->string());

        $this->insert('{{%app_options}}', ['key' => 'admin_mail', 'value' => '']);
        $this->insert('{{%app_options}}', ['key' => 'password', 'value' => '']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%app_options}}', 'key');
        $this->dropColumn('{{%app_options}}', 'value');
        $this->dropColumn('{{%app_options}}', 'comment');

        $this->delete('{{%app_options}}', ['key' => 'admin_mail']);
        $this->delete('{{%app_options}}', ['key' => 'password']);
    }
}
