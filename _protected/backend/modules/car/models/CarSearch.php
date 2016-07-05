<?php

namespace backend\modules\car\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\car\models\Car;

/**
 * CarSearch represents the model behind the search form about `backend\modules\car\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brand_id', 'type_id', 'driver', 'status'], 'integer'],
            [['car_model', 'car_detail', 'car_number', 'color', 'buy_date', 'buy_from'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Car::find();

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
            'brand_id' => $this->brand_id,
            'type_id' => $this->type_id,
            'buy_date' => $this->buy_date,
            'price' => $this->price,
            'driver' => $this->driver,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'car_model', $this->car_model])
            ->andFilterWhere(['like', 'car_detail', $this->car_detail])
            ->andFilterWhere(['like', 'car_number', $this->car_number])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'buy_from', $this->buy_from]);

        return $dataProvider;
    }
}
