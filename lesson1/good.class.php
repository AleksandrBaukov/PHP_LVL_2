<?php
class good{
    protected $name;
    protected $price;
    protected $smallDescription;
    protected $fullDescription;
    protected $img;

    function __construct($name, $price, $smallDescription, $fullDescription, $img){
        $this->name = $name;
        $this->price = $price;
        $this->smallDescription =$smallDescription;
        $this->fullDescription =$fullDescription;
        $this->img = $img;
    }
}