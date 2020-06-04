<?php
spl_autoload_register(function ($className){
    include "$className.php";
});

class Digital extends Good {
    const PRICE = 1000;
    private $quantity;

    public function __construct($quantity){
        self::setQuantity($quantity);
    }

    public function getPrice(){
        return self::PRICE;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getCost()
    {
        return self::PRICE * $this->quantity;
    }
    public function getProfit()
    {
        return $this->getPrice() / 20; //20 - процент дохода с продаж
    }
}