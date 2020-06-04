<?php

trait ForSingleton{
    private function __construct(){}

    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    private function __clone(){}
    private function __wakeup(){}
}

class Singleton{
    protected static $_instance;
    use ForSingleton;
}

$obj = Singleton::getInstance();
var_dump($obj);