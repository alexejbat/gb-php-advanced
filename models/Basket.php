<?php

// Создаем пространство имен класса Basket
namespace app\models;

class Basket extends DBModel
{
    public $id;
    public $session_id;
    public $goods_id;

    public function __construct($session_id = null, $goods_id = null)
    {
        $this->session_id = $session_id;
        $this->goods_id = $goods_id;
    }

    public static function getBasket() {

    }

    protected function getTableName()
    {
        return 'basket';
    }
}


