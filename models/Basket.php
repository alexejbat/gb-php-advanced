<?php

// Создаем пространство имен класса Basket
namespace app\models;

use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $session_id;
    protected $good_id;

    protected $props = [
        'session_id' => false,
        'good_id' => false
    ];

    public function __construct($session_id = null, $good_id = null)
    {
        $this->session_id = $session_id;
        $this->good_id = $good_id;
    }


    public static function getBasket($session_id) {
        $sql = "SELECT basket.id as good_id, products.id prod_id, products.name, products.description, products.price FROM `basket`,`products` WHERE `session_id` = :session_id AND basket.good_id = products.id";
        return Db::getInstance()->queryAll($sql, ['session_id' => $session_id]);
    }

    public static function getTableName()
    {
        return 'basket';
    }
}