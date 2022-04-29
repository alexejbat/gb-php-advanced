<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\Basket;

class BasketController extends Controller
{
    public function actionIndex()
    {
        $session_id = session_id();
        $basket = Basket::getBasket($session_id);
        echo $this->render('basket', [
            'basket' => $basket
        ]);
    }

    public function actionAdd()
    {
        $id = (new Request())->getParams()['id'];
        $session_id = session_id();

        $basket = new Basket($session_id, $id);
        $basket->save();

        $response = [
            'status' => 'ok',
            'count' => Basket::getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }

    public function actionDelete()
    {
        $id = (new Request())->getParams()['id'];
        $session_id = (new Session())->getId();

        $error = "ok";
        $basket = Basket::getOne($id);

        if (!$basket) {
            $error = "error2";
        } else
            if ($session_id == $basket->session_id) {
                $basket->delete();
            } else {
                $error = "error1";
            }

        $response = [
            'status' => $error,
            'count' => Basket::getCountWhere('session_id', $session_id)
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }
}