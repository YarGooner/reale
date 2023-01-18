<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Parameter */

$this->title = 'Update App Options: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>