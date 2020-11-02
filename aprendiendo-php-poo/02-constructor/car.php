<?php

class Car{
    // atributos o propiedades

    //PUBLIC: PODEMOS ACCEDER desde cualquier lugar, dentro de la clase actual, dentro de la clase que hereden
    //y fuera de la clase
    public $color;

    /*PROTECTED: podemos acceder desde la clase que los define. Y desde clases que hereden*/
    protected $brand;

    //PRIVATE: solo podemos acceder desde esta clase. 
    private $model;

    public $engine;
    public $cv;
    public $seat;


    //CONSTRUCTOR SIEMPRE DEBE SER PUBLIC
    public function __construct($color, $brand, $model, $engine, $cv, $seat)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
        $this->cv = $cv;
        $this->seat = $seat;
    }

    //metodos o acciones
    public function getColor(){
        return $this->color;
    }
    //Setea valor
    public function setColor($color){
        $this->color = $color;
    }

    //Setea valor
    public function setModel($model){
        $this->model = $model;
    }

    //Setea valor
    public function setBrand($brand){
        $this->brand = $brand;
    }

    //devuelve valor, para propiedades private
    public function getModel(){
        return $this->model;
    }



    public function showInfo(Car $car12){

        if(is_object($car12)){
            $info = "<h1>Car info</h1>";
            $info .= "Color: ".$car12->color;
            $info .= "<br> Brand: " .$car12->brand;
            $info .= "<br> Model: " .$car12->model;
        }else{
            $info = "Your data is: $car12";
        }

  
        
        return $info;
    }

}
