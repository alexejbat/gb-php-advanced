<?php

namespace app\controllers;

use app\models\Gallery;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        echo $this->render('index');
    }

    public function actionGallery()
    {
        $page = $_GET['page'] ?? 0;

        $gallery = Gallery::getLimit(($page + 1) * 2);
        echo $this->render('gallery/gallery', [
            'gallery' => $gallery
            'image' => ++$image
        ]);
    }

    public function actionImage()
    {
        $id = $_GET['id'];
        $image = Gallery::getOne($id);

        echo $this->render('gallery/image', [
            'gallery' => $gallery
        ]);
    }
}