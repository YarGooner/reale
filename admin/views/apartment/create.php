<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\Apartment */


$this->title = 'Создание квартиры';
$this->params['breadcrumbs'][] = ['label' => 'Квартиры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
