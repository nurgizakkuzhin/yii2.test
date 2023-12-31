<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public function rules()
    {
        return [
            [['code', 'name', 'population', 'status'], 'required'],
            ['code', 'unique'],
            ['population', 'integer'],
            ['status', 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'code' => 'Код страны',
            'name' => 'Страна',
            'population' => 'Колиичество жителей',
            'status' => 'Статус',
        ];
    }
}