<?php

class Thermostat {
    private $temperature;

    public function __construct($temperature) {
        $this -> temperature = $temperature;
    }

    public function setThermostat($temperature) { 
        $this -> temperature = $temperature;
    }

    public function checkThermostat() {
        if ($this -> temperature < (100) and $this -> temperature > (-100)) {
            print("{$this -> temperature} это температура!<br>");
        } else {
            print( "слишком большие температуры");
        }
    }

}
$temp = new Thermostat(120);
$temp->checkThermostat();