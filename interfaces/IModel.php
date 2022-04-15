<?php

// Создаем пространство имен класса GeneralModel
namespace app\interfaces;

interface IModel
{
    public function getOne($id);    // Метод выполнения SQL запроса для одной позиции
    public function getAll();       // Метод выполнения SQL запроса для всех позиций
    public function getTableName(); // Метод формирования имени таблицы в БД
}
