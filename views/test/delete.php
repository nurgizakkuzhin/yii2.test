<?php if (Yii::$app->session->hasFlash('success')):?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
        <?php echo Yii::$app->session->getFlash('success')?>
    </div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
        <?php echo Yii::$app->session->getFlash('success')?>
    </div>
<?php endif;?>
