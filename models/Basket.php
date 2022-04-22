<?php

// Создаем пространство имен класса Basket
namespace app\models;

class Basket extends DBModel
{
    public $id;
    public $session_id;
    public $goods_id;

    protected $props = [
        'session_id' => false,
        'product_id' => false
    ];

    public static function getBasket() {
        return [];
    }

    protected static function getTableName()
    {
        return 'basket';
    }
}


