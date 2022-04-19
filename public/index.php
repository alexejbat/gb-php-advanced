<?php

use app\models\{Basket, Feedback, Gallery, News, Order, Product, User};
use app\engine\{Autoload, Db};

require_once realpath ("../engine/Autoload.php"); // Подключаем класс с методами автозагрузки моделей приложения
require_once realpath("../config/config.php");

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения в стеке автозагрузки

$db = new Db();

$product = new Product('', '1.png', 'Titan', 3600, 'Videocard».');
$product->insert();

echo $product->getOne(4);
echo $product->getAll();
//var_dump($product);

$user = new User($db);
$user->insert();

echo $user->getOne(1);
echo $user->getAll();
//var_dump($user);

