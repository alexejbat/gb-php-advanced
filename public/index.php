<?php

session_start();

use app\engine\Render;
use app\engine\Request;

require_once '../vendor/autoload.php';
include "../config/config.php";

try
{
    $request = new Request();

    $controllerName = $request->getControllerName() ?: 'product';
    $actionName = $request->getActionName();

    $controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new Render());
        $controller->runAction($actionName);
    } else {
        die("Нет такого контроллера");
    }
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
} catch (Exception $exception) {
    var_dump($exception);
}

