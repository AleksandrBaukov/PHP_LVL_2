<?php
spl_autoload_register(function ($className){
    include "$className.php";
});

class Weight extends  Good {
    private $price;
    private $weight;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function __construct($price,$weight){
        self::setPrice($price);
        self::setWeight($weight);
    }

    public function getCost()
    {
        return $this->price * $this->weight;
    }
    public function getProfit()
    {
        return $this->getCost() / 20;
    }
}