<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Image */
/* @var $gallery_id int */

$this->title = 'Добавить изображение';
$this->params['breadcrumbs'][] = ['label' => 'Изображения', 'url' => ['image/create/' . $gallery_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
