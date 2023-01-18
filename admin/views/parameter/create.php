<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Parameter */

$this->title = 'Create App Options';
$this->params['breadcrumbs'][] = ['label' => 'App Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-options-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
