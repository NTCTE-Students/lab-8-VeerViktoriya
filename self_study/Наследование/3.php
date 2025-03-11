<?php 
class Material {
    public $title;
    public $author;
    function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
}
class Book extends Material {
    public $pages;
    function __construct($title, $author, $pages) {
        $this->pages = $pages;
        $this->title = $title;
        $this->author = $author;
}
}
class Article  extends Material { 
}
class Video extends Material {
    public $duration;
    function __construct($title, $author, $duration) {
        $this->title = $title;
        $this->author = $author;
        $this->duration = $duration;

    }
    
}