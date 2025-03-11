<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this -> username = $username;
        $this -> password = $password;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }

    public function checkPassword() {
        print("{$this -> password} это пароль!<br>");
    }

}