<?php
/**
 * @var $countries \app\models\Country;
 */
?>

<?php  \app\components\HelloWidget::widget([
    'name' => 'Иван',
])?>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <table class="table">
                <?php foreach ($countries as $country):?>
                    <tr>
                        <td><?php echo $country['code']?></td>
                        <td><?php echo $country['name']?></td>
                        <td><?php echo $country['population']?></td>
                        <td><?php echo $country['status']?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>