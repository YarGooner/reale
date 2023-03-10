<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Room */

$this->title = 'Редактирование комнаты: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Комнаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
