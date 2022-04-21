<?php

namespace app\models;

    //Создать абстрактный класс Figure с методами вычисления площади и периметра, а также методом, выводящим информацию о фигуре на экран.
    abstract class Figure
    {
        public abstract function Area();
        public abstract function Perimeter();
        public abstract function ShowInfo();
    }

    //Создать производные классы: Rectangle (прямоугольник) со своими методами вычисления площади и периметра.
    class Rectangle extends Figure
    {
        public $a;
        public $b;

        public function Rectangle($a, $b)
        {
            this.$a = $a;
            this.$b = $b;
        }

    public function Area()
    {
        return $a * $b;
    }

        public function Perimeter()
        {
            return ($a + $b) * 2;
        }

        public function ShowInfo()
        {
            echo "Прямоугольник со сторонами {0} и {1}", $a, $b;
        }
    }

    //Создать производные классы: Triangle (треугольник) со своими методами вычисления площади и периметра.
    class Triangle extends Figure
    {
        public $a;
        public $b;
        public $c;

        public function Triangle($a, $b, $c)
        {
            this.$a = $a;
            this.$c = $c;
            this.$b = $b;
        }

        public function Perimeter()
        {
            return $a + $b + $c;
        }


        public function Area()
        {
            $p = Perimeter() / 2;
            return $p * ($p - $a) * ($p - $b) * ($p - $c))
        }

        public function ShowInfo()
        {
            echo "Треугольник со сторонами {0}, {1}, {2}", $a, $b, $c;
        }
    }

    //Создать производные классы: Circle (круг), со своими методами вычисления площади и периметра.
    class Circle : Figure
    {
        const pi = 3.14;
        public $r;

        public function Circle($r)
        {
            this.$r = $r;
        }

        public function Area()
        {
            return $pi * $r * $r;
        }

        public function Perimeter()
        {
            return 2 * $pi * $r;
        }

        public function ShowInfo()
        {
            echo "Круг радиусом {0}.", $r;
        }
    }