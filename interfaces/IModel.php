<?php

// Создаем пространство имен класса GeneralModel
namespace app\interfaces;

interface IModel
{
    public static function getOne($id);    // Метод выполнения SQL запроса для одной позиции
    public static function getAll();       // Метод выполнения SQL запроса для всех позиций
}
