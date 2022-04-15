<?php

// Создаем пространство имен класса Db
namespace app\engine;

class Db
{
    //Методы возвращает результат выполнения запроса значения в БД

    public function queryOne($sql, $params = [])
    {
        return $sql . "<br>";
    }


    public function queryAll($sql, $params = [])
    {
        return $sql . "<br>";
    }


}