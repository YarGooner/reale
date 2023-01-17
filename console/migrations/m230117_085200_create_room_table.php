<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%room}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%apartment}}`
 */
class m230117_085200_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'apartment_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'area' => $this->decimal(2),
            'id_room' => $this->string(),
        ]);

        // creates index for column `apartment_id`
        $this->createIndex(
            '{{%idx-room-apartment_id}}',
            '{{%room}}',
            'apartment_id'
        );

        // add foreign key for table `{{%apartment}}`
        $this->addForeignKey(
            '{{%fk-room-apartment_id}}',
            '{{%room}}',
            'apartment_id',
            '{{%apartment}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%apartment}}`
        $this->dropForeignKey(
            '{{%fk-room-apartment_id}}',
            '{{%room}}'
        );

        // drops index for column `apartment_id`
        $this->dropIndex(
            '{{%idx-room-apartment_id}}',
            '{{%room}}'
        );

        $this->dropTable('{{%room}}');
    }
}
