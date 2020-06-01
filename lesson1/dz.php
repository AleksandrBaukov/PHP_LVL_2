<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();  // 1
$a2->foo();  // 2
$a1->foo();  // 3
$a2->foo();  // 4 потому что переменная статичная, привязана к классу "А" и она перезаписывается при всех 4ех вызовах



class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1 класс А первый вызов
$b1->foo(); // 1  класс В первый вызов
$a1->foo(); // 2 класс А второй вызов
$b1->foo(); // 2 класс В второй вызов
// обращаются 2 разных класса, поэтому переменная для них имеетразное значение и не меняется при обращении другим классом


// Задание 7 видимо случайно написан тот же код что и в 6ом =)
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();