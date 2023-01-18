<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%gallery}}`
 */
class m230118_093405_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'gallery_id' => $this->integer()->notNull(),
            'image' => $this->string()->notNull(),
            'title' => $this->string(),
            'text' => $this->string(),
        ]);

        // creates index for column `gallery_id`
        $this->createIndex(
            '{{%idx-image-gallery_id}}',
            '{{%image}}',
            'gallery_id'
        );

        // add foreign key for table `{{%gallery}}`
        $this->addForeignKey(
            '{{%fk-image-gallery_id}}',
            '{{%image}}',
            'gallery_id',
            '{{%gallery}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%gallery}}`
        $this->dropForeignKey(
            '{{%fk-image-gallery_id}}',
            '{{%image}}'
        );

        // drops index for column `gallery_id`
        $this->dropIndex(
            '{{%idx-image-gallery_id}}',
            '{{%image}}'
        );

        $this->dropTable('{{%image}}');
    }
}
