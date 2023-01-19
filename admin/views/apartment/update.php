<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Apartment */

$this->title = 'Редактирование квартиры: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Квартиры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apartment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
