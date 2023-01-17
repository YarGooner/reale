<?php
/**
 * Created by PhpStorm.
 * User: d.korablev
 * Date: 27.02.2019
 * Time: 15:13
 */

namespace api\modules\v1\controllers;

use yii\filters\auth\HttpBearerAuth;
use common\models\Text;

class SiteController extends AppController
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(),[
            'authentificator' => [
                'class' => HttpBearerAuth::className(),
                'except' => ['index','error']
            ],
        ]);
    }

    // >>>   INDEX   >>>
    public function actionIndex(){
        $texts = Text::find()->all();
        return $this->returnSuccess(['texts' => $texts]);
    }
    // <<<   INDEX   <<<

    // >>>   ERROR   >>>
    public function actionError(){
        return $this->returnErrorBadRequest();
//        return "BAD";
    }
    // <<<   ERROR   <<<

}