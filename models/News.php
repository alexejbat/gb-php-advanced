<?php

namespace app\models;

class News extends DBModel
{
    public $id;
    public $title;
    public $preview;
    public $full;

    public function __construct($title = null, $preview = null, $full = null)
    {
        $this->login = $login;
        $this->preview = $preview;
        $this->preview = $preview;
    }

    protected function getTableName()
    {
        return 'news';
    }

}