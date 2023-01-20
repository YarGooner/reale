<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Комнаты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать комнату', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            \admin\components\widgets\AdminWidgetHelper::getDropdownColumn(
                'apartment_id',
                \admin\models\Apartment::find()->select(['title', 'id'])->indexBy('id')->column(),
                false
            ),
            'title',
            'area',
            'id_room',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
