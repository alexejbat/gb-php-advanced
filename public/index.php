<?php

session_start();

use app\engine\Autoload;
use app\models\{Product, User};
use app\engine\Render;

include "../engine/Autoload.php";
include "../config/config.php";

spl_autoload_register([new Autoload(), 'loadClass']);
require_once '../vendor/autoload.php';

$url = explode('/', $_SERVER['REQUEST_URI']);

$controllerName = $url[1] ?: 'product';
$actionName = $url[2];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
 //   $controller = new $controllerClass(new \app\engine\TwigRender());
    $controller->runAction($actionName);
} else {
    die("Нет такого контроллера");
}



