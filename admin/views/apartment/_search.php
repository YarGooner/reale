<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApartmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'subtitle') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'addname') ?>

    <?php // echo $form->field($model, 'room') ?>

    <?php // echo $form->field($model, 'addimage') ?>

    <?php // echo $form->field($model, 'TinyInt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
