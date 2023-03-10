<?php

namespace admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "text".
 *
 * @property int $id
 * @property string $group_test
 * @property string $key
 * @property string $value
 */
class Text extends ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value', 'text'], 'required'],
            [['value', 'group_test'], 'string'],
            [['key'], 'string', 'max' => 255],
            [['image'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'value' => Yii::t('app', 'Value'),
        ];
    }

    public function fields()
    {
        return [
            'key',
            'value',
            'group_test',
            'text',
            'image',
            'comment',
        ];
    }
}
