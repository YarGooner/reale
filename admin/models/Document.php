<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property string $key
 * @property string $file
 */
class Document extends \yii\db\ActiveRecord
{
    public $document;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'file'], 'required'],
            [['key', 'file'], 'string', 'max' => 255],
            [['document'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'file' => 'File',
        ];
    }
}
