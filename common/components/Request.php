<?php
/**
 * Created by PhpStorm.
 * User: dpotekhin
 * Date: 06.08.2018
 * Time: 15:00
 */

namespace common\components;


class Request extends \yii\web\Request
{
    public $web;
    public $adminUrl;

    public function getBaseUrl()
    {
        return str_replace($this->web, "", parent::getBaseUrl()) . $this->adminUrl;
    }

}