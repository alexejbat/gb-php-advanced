<?php


namespace app\models;


class Product extends DBModel
{
    public $id;
    protected $image;
    public $name;
    public $description;
    public $price;

    public function __construct($name = null, $description = null, $price = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    protected function getTableName()
    {
        return 'products';
    }
}