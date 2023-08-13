<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
/**
 * @var $model \app\models\EntryForm
 */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->input('text', ['placeholder' => 'Введите имя'])->label('Ваше Имя:')?>

<?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите email'])->label('Ваш e-mail:') ?>
<?= $form->field($model, 'topic')->input('text', ['placeholder' => 'Введите текст'])->label('Тема:') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>