<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var $country \app\models\Country
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php if(Yii::$app->session->hasFlash('error')):?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <?php echo Yii::$app->session->getFlash('success')?>
                </div>
            <?php endif;?>


            <?php $form = ActiveForm::begin([
                'id' => 'my-form',
                'options' => [
                    'class' => 'form-horizontal'
                ],
            ]); ?>

            <?= $form->field($country, 'name')->input('text', ['placeholder' => 'Введите название страны'])?>
            <?= $form->field($country, 'population')->input('text', ['placeholder' => 'Введите количество жителей'])?>
            <?= $form->field($country, 'status')->checkbox(); ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>