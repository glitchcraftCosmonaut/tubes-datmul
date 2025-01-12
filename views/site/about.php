<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
    <?php
    foreach($medias as $media) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?php echo Yii::getAlias('@web').'/'.$media->filepath;?>" class="card-mg-top" width="100%">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $media->filename; ?></h5>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>



    <!-- <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code> -->
</div>
