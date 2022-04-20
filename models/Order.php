<?php

namespace app\models;

class Order extends DBModel
{
    public $id;
    public $name;
    public $phone;
    public $address;
    public $session_id;

    public function __construct($name = null, $phone = null, $address = null, $session_id)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->session_id = $session_id;
    }

    protected function getTableName()
    {
        return 'orders';
    }
}