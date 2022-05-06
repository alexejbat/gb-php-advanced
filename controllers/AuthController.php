<?php

namespace app\controllers;

use app\models\repositories\UserRepository;
use app\engine\Request;

class AuthController extends Controller
{
    //action="/auth/login"
    public function actionLogin() {
        $login = (new Request())->getParams()['login'];
        $pass = (new Request())->getParams()['pass'];
        if ((new UserRepository())->Auth($login, $pass)) {
            header("Location: /");
            die();
        } else {
            die("Не верный логин пароль");
        }
    }

    public function actionLogout()
    {
        //TODO Переписать на Session
        session_regenerate_id();
        session_destroy();
        header("Location: /");
        die();
    }
}