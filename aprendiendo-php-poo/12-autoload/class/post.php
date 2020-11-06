<?php

class Post{
    public $post;
    public $category;

    public function __construct(){
        $this->post = 'Hola a todos';
        $this->category = 'Nueva categoria';
    }
}