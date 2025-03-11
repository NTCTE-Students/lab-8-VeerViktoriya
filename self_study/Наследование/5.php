<?php
class Device {
    public $brand;
    public $model;
    public function __construct($model,$brand) {
        $this->model = $model;
        $this->brand = $brand;
    }
}

// Производный класс Dog
class Smartphone extends Device {
    function call() {
        print("вам звонят");
    }
}

// Производный класс Cat
class Laptop extends Device {
}
class Tablet extends Device {
}
