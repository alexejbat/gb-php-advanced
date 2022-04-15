<?php

use app\models\{Basket, Feedback, Gallery, News, Order, Product, User};
use app\engine\{Autoload, Db};

include "../engine/Autoload.php"; // Подключаем класс с методами автозагрузки моделей приложения

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения в стеке автозагрузки

$db = new Db();

$product = new Product($db);


echo $product->getOne(4);
echo $product->getAll();
//var_dump($product);

$user = new User($db);

echo $user->getOne(1);
echo $user->getAll();
//var_dump($user);

/* Пример полиморфизма
function foo(IModels $model) {
    return $model->getTableName();
}
echo foo($product);
echo foo($users);
*/