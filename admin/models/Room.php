<?php

namespace admin\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property int $apartment_id
 * @property string $title
 * @property string $area
 * @property string $id_room
 *
 * @property Apartment $apartment
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apartment_id', 'title'], 'required'],
            [['apartment_id'], 'integer'],
            [['area'], 'number'],
            [['title', 'id_room'], 'string', 'max' => 255],
            [['apartment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Apartment::className(), 'targetAttribute' => ['apartment_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'apartment_id' => 'Apartment ID',
            'title' => 'Название',
            'area' => 'Площадь',
            'id_room' => 'Id Room',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApartment()
    {
        return $this->hasOne(Apartment::className(), ['id' => 'apartment_id']);
    }
}
