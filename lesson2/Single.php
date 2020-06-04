<?php
spl_autoload_register(function ($className){
    include "$className.php";
});

class Single extends Digital {

    public function __construct($quantity)
    {
        parent::__construct($quantity);
    }

    public function getPrice(){
        return parent::PRICE * 2;
    }

    public function getCost()
    {
        return self::PRICE * parent::getQuantity();
    }
    public function getProfit()
    {
        return $this->getCost() / 20; //20 - процент дохода с продаж
    }
}