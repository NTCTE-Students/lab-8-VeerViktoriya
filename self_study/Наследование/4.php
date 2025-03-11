<?php
class Animal {
    public $name;
    public $age;
    function eat() {
        print("оно ест");
    }
    function sleep() {
        print("оно спит ");
    }
}
class Bird extends Animal {
    function fly() {
        print("оно летает");
    }
}
class Fish extends Animal {
    function swim() {
        print("оно плавает");
    }
}
class Mammal extends Animal {
}
