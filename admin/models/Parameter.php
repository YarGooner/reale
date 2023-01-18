<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "app_options".
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property string $comment
 */
class Parameter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['key', 'value', 'comment'], 'string', 'max' => 255],
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
            'value' => 'Value',
            'comment' => 'Comment',
        ];
    }
}
