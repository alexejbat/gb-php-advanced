<?php

namespace app\models;


class User extends DBModel
{
    public $id;
    public $login;
    public $pass;
    protected $hash;

    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    protected static function getTableName()
    {
        return 'users';
    }
}