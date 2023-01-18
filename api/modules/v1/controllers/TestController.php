<?php

namespace api\modules\v1\controllers;

use admin\models\Apartment;
use admin\models\Document;
use admin\models\Gallery;
use admin\models\Text;
use yii\filters\auth\HttpBearerAuth;

class TestController extends AppController
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(),[
            'authentificator' => [
                'class' => HttpBearerAuth::className(),
                'except' => ['text', 'apartments', 'document', 'gallery']
            ],
        ]);
    }

    public function actionApartments(int $id = null)
    {
        if ($id) {
            $apartment = Apartment::find()->where(['id' => $id])->one();
            return $this->returnSuccess(['apartment' => $apartment]);
        }

        $apartments = Apartment::find()->all();
        return $this->returnSuccess([
            'apartments' => $apartments
        ]);
    }
    public function actionText()
    {
        $text = Text::find()->all();
        return $this->returnSuccess([
            'text' => $text
        ]);
    }

    public function actionDocument()
    {
        $document = Document::find()->all();
        return $this->returnSuccess([
            'document' => $document
        ]);
    }

    public function actionGallery(int $id = null)
    {
        if($id) {
            $gallery = Gallery::find()->where(['id' => $id])->one();
            return $this->returnSucces(['gallery' => $gallery]);
        }

        $gallery = Gallery::find()->all();
        return $this->returnSuccess([
            'gallery' => $gallery
        ]);
    }
}