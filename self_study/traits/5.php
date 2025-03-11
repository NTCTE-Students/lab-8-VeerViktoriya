<?php
trait Authenticatable {
    private $isAuthenticated = false;
    public function login($username, $password) {
        $this->isAuthenticated = true;
        return "Пользователь {$username} авторизован.";
    }
    public function logout() {
        $this->isAuthenticated = false;
        return "Пользователь вышел.";
    }
    public function isAuthenticated() {
        return $this->isAuthenticated;
    }
}
class User {
    use Authenticatable;
    private $username;
    public function __construct($username) {
        $this->username = $username;
    }
}