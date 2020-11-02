<?php

class ConfigStatic{
    public static $color;
    public static $newsleter;
    public static $environment;

    //GETTERS
    public static function getColor(){
        return self :: $color;
    }

    public static function getNewsletter(){
        return self :: $newsleter;
    }

    public static function getEnvironment(){
        return self :: $environment;
    }

    //SETTERS
    public static function setColor($color){
        self :: $color = $color;
    }

    public static function setNewsletter($newsleter){
        self :: $newsleter = $newsleter;
    }

    public static function setEnvironment($environment){
        self :: $environment = $environment;
    }
}