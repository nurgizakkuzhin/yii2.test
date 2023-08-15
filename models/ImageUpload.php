<?php

namespace app\models;

use yii\base\Model;

class ImageUpload extends Model
{
    public $image;

    public function uploadFile($file)
    {
        $file->saveAS(\Yii::getAlias('@web') . 'uploads/' . $file->name);
        return $file->name;
    }
}