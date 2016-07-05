<?php

namespace backend\modules\car\models;

use Yii;

/**
 * This is the model class for table "car_brand".
 *
 * @property integer $id
 * @property string $brand_name
 */
class CarBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_name' => 'Brand Name',
        ];
    }
}
