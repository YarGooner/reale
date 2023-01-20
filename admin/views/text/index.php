<?php

use admin\components\widgets\AdminWidgetHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\TextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Texts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            AdminWidgetHelper::getFixedWidthColumn('id'),
            ['attribute' => 'group_test'],
            ['attribute' => 'key'],
            AdminWidgetHelper::getEditableItem('value' ),
            /*[
                'attribute' => 'value',
                'value' => function($data){
                    return htmlspecialchars_decode($data->value);
                },
                'format' => 'html'
            ],*/

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>
</div>
