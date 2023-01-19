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
    public $addimage;

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
            //[['image'], 'file'],
            //[['addimage'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'subtitle' => 'Подзаголовок',
            'description' => 'Описание',
            'price' => 'Цена',
            'floor' => 'Этаж',
            'image' => 'Фото',
            'address' => 'Адрес',
            'addname' => 'Доп.заголовок',
            'room' => 'Комнаты',
            'addimage' => 'Доп.фото',
            'TinyInt' => 'Флаг доступности по API',
        ];
    }
    public function fields()
    {
        return [
            'id',
            'title',
            'price',
            'floor',
            'image',
            'address',
            'rooms' => fn() => $this->rooms
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
