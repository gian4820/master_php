<?php

class usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->db->real_escape_string($this->nombre);
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->db->real_escape_string($this->apellido);
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getEmail(){
        return $this->db->real_escape_string($this->email);
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol = $rol;
    }

    public function getImagen(){
        return $this->imagen;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES (NULL, '{this->getNombre()}', '{this->getApellido()}', '{this->getEmail()}','{this->getPassword()}', 'user', NULL);";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }


}