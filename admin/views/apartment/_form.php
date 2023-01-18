<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model admin\models\Apartment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apartment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

    <?php /*= $form->field($model, 'description')->textarea(['rows' => 6])*/?>


    <?= $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
        ],
    ]); ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?php /*= $form->field($model, 'image')->textInput(['maxlength' => true]) */?>

    <?php
    echo $form->field($model, 'image')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'showCaption' => false,
            'showUpload' => false,
        ]
    ]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addname')->textInput(['maxlength' => true]) ?>

    <?php /*= $form->field($model, 'room')->textInput() */?>

    <?php /*= $form->field($model, 'addimage')->textInput(['maxlength' => true]) */?>

    <?php
    echo $form->field($model, 'addimage')->widget(FileInput::class, [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'showCaption' => false,
            'showUpload' => false,
        ]
    ]) ?>

    <?= $form->field($model, 'TinyInt')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
