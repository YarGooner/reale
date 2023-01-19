<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = Yii::t('app', 'Галереи');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать галерею', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gallery_name',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {list}',
                'buttons' => [
                        'list' => function($url, \admin\models\Gallery $model) {
                            return Html::a('<svg xmlns="http://www.w3.org/2000/svg" width="1.125em" height="1em" viewBox="0 0 24 24"><path d="M19 0H5a5.006 5.006 0 0 0-5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5V5a5.006 5.006 0 0 0-5-5ZM5 2h14a3 3 0 0 1 3 3v14a2.951 2.951 0 0 1-.3 1.285l-9.163-9.163a5 5 0 0 0-7.072 0L2 14.586V5a3 3 0 0 1 3-3Zm0 20a3 3 0 0 1-3-3v-1.586l4.878-4.878a3 3 0 0 1 4.244 0l9.163 9.164A2.951 2.951 0 0 1 19 22Z"/><path d="M16 10.5A3.5 3.5 0 1 0 12.5 7a3.5 3.5 0 0 0 3.5 3.5Zm0-5A1.5 1.5 0 1 1 14.5 7 1.5 1.5 0 0 1 16 5.5Z"/></svg>',
                                ['image/index/' . $model->id], ['class' => 'text-primary']);
                        }
                ]
            ],
        ],
    ]); ?>
</div>
