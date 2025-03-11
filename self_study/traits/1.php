<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User{
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this -> log("Пользователь {$name} создан.");
    }
}
$vv = new User();
$vv->createUser("jsjsj");
// Далее создай объект и протестируй метод.