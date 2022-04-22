<?php

namespace app\models;

class Gallery extends DBModel
{
    public $id;
    public $filename;
    public $likes;

    public function __construct($filename = null, $likes = null)
    {
        $this->filename = $filename;
        $this->likes = $likes;
    }

    public static function getGallery() {
        return [];
    }
    protected static function getTableName()
    {
        return 'gallery';
    }
}