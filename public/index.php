<?php

use app\models\{Basket, Feedback, Gallery, News, Order, Product, User};
use app\engine\{Autoload, Db};

require_once realpath ("../engine/Autoload.php"); // Подключаем класс с методами автозагрузки моделей приложения
require_once realpath("../config/config.php");

spl_autoload_register([new Autoload(), 'loadClass']); // Регистрируем класс и его метод автозагрузки моделей приложения в стеке автозагрузки

$product = new Product('Titan', 'Videocard', 100000);

$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    die("Нет такого контроллера");
}

