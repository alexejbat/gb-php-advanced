<?php

// 3. Дан код:

class A {
    public function foo() {
        static $x = 0; // Используем, что бы при наследовании получить доступ к классу, который наследовал статические методы или свойства
       echo ++$x; // Инкремент увеличивает -> выводим
    }
}
$a1 = new A(); // Создаем новый экземпляр объекта А с одной области памяти
$a2 = new A(); // Создаем второй объект А в такой же области памяти
$a1->foo(); // Операция инкремента, выведет значение 1
$a2->foo(); // Так как это экземпляр класса А static переменная x принадлежит классу А и хранит значение 1, будет выполнена операция инкремента и выведено значение 2
$a1->foo(); // x хранит значение 2, будет выполнена операция инкремента и выведено значение 3
$a2->foo(); // x хранит 3, будет выполнена операция инкремента и выведено значение 4

//Немного изменим п.5:

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A(); // Создаем новый объект А с одной области памяти
$b1 = new B(); // Создаем новый объект B с другой области памяти
$a1->foo(); // Операция инкремента, выведет значение 1
$b1->foo(); // Операция инкремента, выведет значение 1
$a1->foo(); // Операция инкремента, выведет значение 2
$b1->foo(); // Операция инкремента, выведет значение 2


// 5. *Дан код:

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
} // Скобки явно вызывают конструктор, по этому если вы не знаете есть ли у класса конструктор скобки писать надо
$a1 = new A; // так мы можем передать данные в конструктор класса А
$b1 = new B; // данные в конструктор класса B
$a1->foo(); // Операция инкремента, выведет значение 1
$b1->foo(); // Операция инкремента, выведет значение 1
$a1->foo(); // Операция инкремента, выведет значение 2
$b1->foo(); // Операция инкремента, выведет значение 2