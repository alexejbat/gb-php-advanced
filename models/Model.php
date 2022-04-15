<?php

// Создаем пространство имен класса Model
namespace app\models;

use app\engine\Db; // для доступа к классу Db

use app\interfaces\IModel; //  для доступа к классу IModels

abstract class Model implements IModel
{

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    protected $db;

    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return $this->db->queryAll($sql);
    }

    protected abstract function getTableName();


}