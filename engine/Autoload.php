<?php

// Пространство имен класса Autoload
namespace app\engine;

class Autoload
{
    private $path = [
        'models',
        'engine',
        'interfaces'
    ];

    public function loadClass($className)
    {
        $replace = [ // Ассоциативный массив замен
            'app' => '..', //Ключ - Что меняем
            '\\' => '/'    // Значение - На что меняем
        ];


        foreach ($this->path as $path) {
            $correctPath = str_replace(array_keys($replace), array_values($replace), $className); // Формируем корректный путь к файлу
            $fileName = "{$correctPath}.php";
            if (file_exists($fileName)) {
                include $fileName;
                break;
            }
        }
    }
}