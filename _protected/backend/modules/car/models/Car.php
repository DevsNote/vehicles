<?php

namespace backend\modules\car\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property integer $id
 * @property integer $brand_id
 * @property string $car_model
 * @property string $car_detail
 * @property integer $type_id
 * @property string $car_number
 * @property string $color
 * @property string $buy_date
 * @property string $price
 * @property string $buy_from
 * @property integer $driver
 * @property integer $status
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'type_id', 'driver', 'status'], 'integer'],
            [['car_detail'], 'string'],
            [['buy_date'], 'safe'],
            [['price'], 'number'],
            [['car_model', 'buy_from'], 'string', 'max' => 150],
            [['car_number'], 'string', 'max' => 20],
            [['color'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'car_model' => 'Car Model',
            'car_detail' => 'Car Detail',
            'type_id' => 'Type ID',
            'car_number' => 'Car Number',
            'color' => 'Color',
            'buy_date' => 'Buy Date',
            'price' => 'Price',
            'buy_from' => 'Buy From',
            'driver' => 'Driver',
            'status' => 'Status',
        ];
    }
}
