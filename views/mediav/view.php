<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mediav */

$this->title = $model->Judul;
$this->params['breadcrumbs'][] = ['label' => 'Database Video', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mediav-view">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Judul',
            'Deskripsi:ntext',
            'Tanggal_Pembuatan',
            'Tanggal_Edit',
            'filename:ntext',
            'filepath:ntext',
            
        ],
    ]) ?>

</div>
