<?php

// Создаем пространство имен класса Model
namespace app\models; // для доступа к классу Db

use app\interfaces\IModel; //  для доступа к классу IModels

abstract class Model implements IModel
{
    protected $props = [];

    public function __set($name, $value)
    {
        //TODO разрешать менять только те поля, что есть в params
        $this->props[$name] = true;
        $this->$name = $value;
    }

    public function __get($name)
    {
        //TODO разрешать читать только те поля, что есть в params
        return $this->$name;
    }

    public function __isset($name)
    {
        return true;
    }


}