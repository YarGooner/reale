<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Gallery */

$this->title = 'Редактирование галереи: ' . $model->gallery_name;
$this->params['breadcrumbs'][] = ['label' => 'Галереи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gallery_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
