<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\ImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $gallery_id int */


$this->title = Yii::t('app', \admin\models\Gallery::findOne($gallery_id)->gallery_name);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Image', ['image/create/' . $gallery_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'gallery_id',
            'image',
            'title',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
