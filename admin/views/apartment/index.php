<?php

use admin\components\widgets\AdminWidgetHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Квартиры');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Apartment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            AdminWidgetHelper::getFixedWidthColumn('id'),
            ['attribute' => 'title'],
            ['attribute' =>'subtitle'],
            ['attribute' =>'description', 'format' => 'ntext'],
            ['attribute' =>'price'],
            //'floor',
            //'image',
            //'address',
            //'addname',
            //'room',
            //'addimage',
            //'TinyInt',

            ['class' => 'yii\grid\ActionColumn']
        ],
    ]); ?>
</div>
