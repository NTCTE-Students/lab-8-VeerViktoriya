<?php 
class Employee {
    public $salary;
    public $name;
    function __construct($salary, $name) {
        $this->salary = $salary;
        $this->name = $name;
    }
}
class Manager extends Employee {
    function manageTeam() {
        print("Это командса менеджмента");
    }
}
class Developer  extends Employee { 
    function writeCode() {
        print("пишу код ");
    }
}
class Designer extends Employee {
    function draw() { 
        print("рисую");
    }
}