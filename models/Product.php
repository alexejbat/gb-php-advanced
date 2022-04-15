<?php


namespace app\models;


class Product extends Model
{
    public $id;
    protected $image;
    public $name;
    public $description;
    public $price;


    protected function getTableName()
    {
        return 'products';
    }
}