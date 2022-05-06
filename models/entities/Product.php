<?php
namespace app\models\entities;


use app\models\Model;

class Product extends Model
{
    protected $id;
    protected $image;
    protected $name;
    protected $description;
    protected $price;

    protected $props = [
        'image' => false,
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
}