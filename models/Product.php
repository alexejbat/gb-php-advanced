<?php

namespace app\models;

class Product extends DBModel
{
    protected $id;
    protected $image;
    protected $name;
    protected $description;
    protected $price;

    protected $props = [
        'name' => false,
        'description' => false,
        'price' => false
    ];


    public function __construct($image = null, $name = null, $description = null, $price = null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    protected static function getTableName()
    {
        return 'products';
    }
}