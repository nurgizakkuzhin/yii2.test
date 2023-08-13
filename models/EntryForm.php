<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $topic;



    public function rules()
    {
        return [
            [['name', 'email', 'topic'], 'required'],
            ['email', 'email'],
            ['topic', 'string', 'min' => 3],
            ['topic', 'string', 'max' => 5],
        ];
    }
}