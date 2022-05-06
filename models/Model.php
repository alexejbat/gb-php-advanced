<?php

// Создаем пространство имен класса Model
namespace app\models; // для доступа к классу Db

abstract class Model
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
        return isset($this->$name);
    }


}