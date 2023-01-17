<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "apartment".
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property string $price
 * @property int $floor
 * @property string $image
 * @property string $address
 * @property string $addname
 * @property int $room
 * @property string $addimage
 * @property int $TinyInt
 *
 * @property Room[] $rooms
 */
class Apartment extends \yii\db\ActiveRecord
{
    public $text;
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apartment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subtitle', 'price', 'floor', 'TinyInt'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['floor', 'room', 'TinyInt'], 'integer'],
            [['title', 'subtitle', 'image', 'address', 'addname', 'addimage'], 'string', 'max' => 255],
            ['text', 'trim'],
            ['image', 'types' => 'jpg, png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'price' => 'Price',
            'floor' => 'Floor',
            'image' => 'Image',
            'address' => 'Address',
            'addname' => 'Addname',
            'room' => 'Room',
            'addimage' => 'Addimage',
            'TinyInt' => 'Tiny Int',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['apartment_id' => 'id']);
    }
}
