<?php
namespace admin\models;

use Yii;
use yii\base\Model;
use console\models\UserAdmin;


class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;



    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
    {

        return [
            'username' => 'Имя пользователя',
            'rememberMe' => 'Запомнить меня',
            'password' => 'Пароль',
        ];
    }


    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user){
                $this->addError($attribute, 'Incorrect username.');
//                if (!$user->validatePassword($this->password)){
//                    $this->addError($attribute, 'Incorrect password.');
//                }
            }

        }
    }


    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }

        return false;
    }


    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = UserAdmin::findByUsername($this->username);
        }

        return $this->_user;
    }
}
