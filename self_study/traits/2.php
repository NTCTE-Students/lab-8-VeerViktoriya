<?php
trait Timestampable {
    public $createdAt;
    public $updatedAt;
    public function time($tut) {
        $this->createdAt = date('d-m-y h-m-s');
        print("Время создание {$tut} ". $this->createdAt);
    }
    public function gettime() {
        print($this ->createdAt);
    }
}

class Post {
    use Timestampable;
    public function createPost($name) {
        // Логика создания пользователя
        $this -> time($name);
    }
}
class Comment {
    use Timestampable;
    public function createComment($name) {
        // Логика создания пользователя
        $this -> time($name);
    }
}
$vv = new Post();
$vv->createPost("jsjsj");
$com = new Comment();
$com->createComment("LOL");