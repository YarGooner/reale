<?php

namespace admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * RoomSearch represents the model behind the search form of `app\models\Room`.
 */
class RoomSearch extends Room
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'apartment_id'], 'integer'],
            [['title', 'id_room'], 'safe'],
            [['area'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Room::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'apartment_id' => $this->apartment_id,
            'area' => $this->area,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'id_room', $this->id_room]);

        return $dataProvider;
    }
}
