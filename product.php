<?php

class Computer // Класс компьютер (родитель)
{
    protected $processor;
    protected $memory;
    protected $graphic;

    protected function __construct($processor = null, $memory = null, $graphic = null)
    {
        $this->processor = $processor;
        $this->memory = $memory;
        $this->graphic = $graphic;
    }

    public function aboutMe() // Функция выдает информацию о компьютере
    {
        echo $this->prepareContent();
    }

    protected function prepareContent()
    {
        return "<p>Процессор: {$this->processor}</p>
                <p>Память: {$this->memory} GB</p>
                <p>Видеокарта: {$this->graphic}</p>";
    }

    public function compareCharacteristic(Computer $computer) // Функция сравнивает характеристики
    {
        echo "<h3>Сравнение:</h3>
              {$this->processor} - {$computer->processor}<br>
              {$this->memory} - {$computer->memory}<br>
              {$this->graphic} - {$computer->graphic}";
    }
}

class Notebook extends Computer // Наследник - ноутбук
{
    protected $mobility; // Дополнительное свойство для ноутбука

    public function __construct($processor = null, $memory = null, $graphic = null, $mobility = null)
    {
        parent::__construct($processor, $memory, $graphic);
        $this->mobility = $mobility;
    }

    public function aboutMe()
    {
        parent::aboutMe();
        echo "<p>Мобильность: {$this->mobility}</p>"; // расширение функционала
    }
}

class PersonalComputer extends Computer // Наследник - персональный компьютер
{
    protected $noiseLevel; // Дополнительное свойство для персональный компьютер

    public function __construct($processor = null, $memory = null, $graphic = null, $noiseLevel = null)
    {
        parent::__construct($processor, $memory, $graphic);
        $this->noiseLevel = $noiseLevel;
    }

    public function aboutMe()
    {
        parent::aboutMe();
        echo "<p>Уровень шума: {$this->noiseLevel} дБ</p>"; // расширение функционала
    }
}

function showOptions(Computer $options) // Метод для пользователя
{
    $options->aboutMe();
}

$notebook = new Notebook("Intel", 32, "Nvidia", "Да"); // Создаем новый класс Ноутбука
showOptions($notebook); // Запуск функции ноутбука (полиморфизм)
var_dump($notebook);

$personalComputer = new PersonalComputer("AMD", 16, "AMD Radeon", 51); // Создаем класс компьютера
showOptions($personalComputer); // Запуск функции компьютера (полиморфизм)
var_dump($personalComputer);

$notebook->compareCharacteristic($personalComputer);

// Инкапсуляция по классам, методы завернуты внутрь классов