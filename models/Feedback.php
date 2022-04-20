<?php

namespace app\models;

class Feedback extends DBModel
{
    public $id;
    public $name;
    public $feedback;

    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    protected function getTableName()
    {
        return 'feedbacks';
    }

}