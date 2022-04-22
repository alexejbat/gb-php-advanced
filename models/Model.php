<?php

// Создаем пространство имен класса Model
namespace app\models;

use app\engine\Db; // для доступа к классу Db

use app\interfaces\IModel; //  для доступа к классу IModels

abstract class Model implements IModel
{
    protected $props = [];

    public function __set($name, $value)
    {
        $this->props[$name] = true;
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __isset($name)
    {
        return true;
    }
}