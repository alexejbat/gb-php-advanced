<?php

// Создаем пространство имен класса Basket
namespace app\models\repositories;

use app\engine\Db;
use app\models\entities\Basket;
use app\models\Repository;
use app\engine\App;

class BasketRepository extends Repository
{
    public static function getBasket($session_id) {
        $sql = "SELECT basket.id as good_id, products.id prod_id, products.name, products.description, products.price FROM `basket`,`products` WHERE `session_id` = :session_id AND basket.product_id = products.id";
        return App::call()->db->queryAll($sql, ['session_id' => $session_id]);
    }

    protected function getEntityClass() {
        return Basket::class;
    }

    public function getTableName()
    {
        return 'basket';
    }
}