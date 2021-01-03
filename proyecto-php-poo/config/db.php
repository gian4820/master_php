<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'gian', '123', 'tienda_master', 3307);
        $db->query("SET NAMES 'utf-8");
        return $db;
    }
}