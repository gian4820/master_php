<?php

class Note{
    public $name;
    public $content;

    function getName(){
        return $this->name;
    }

    function getContent(){
        return $this->content;
    }

    function setName($name){
        $this->name = $name;
    }

    function setContent($content){
        $this->content = $content;
    }

    /* ------ */

    //Sacar notas
    public function selectAll(){
        echo "Sacamos todos los usuarios";
    }
}