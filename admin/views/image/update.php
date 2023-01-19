<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Image */
/* @var $gallery_id int */
/* @var $model admin\models\Gallery */

$this->title = $model->gallery_name;
$this->params['breadcrumbs'][] = ['label' => 'Изображения', 'url' => ['image/update/'. $gallery_id]];
$this->params['breadcrumbs'][] = ['label' => $model->gallery_name, 'url' => ['view', 'id' => $model->gallery_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
