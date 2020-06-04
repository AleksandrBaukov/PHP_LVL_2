<?php
spl_autoload_register(function ($className){
    include "$className.php";
});

$digital = new Digital(2);
echo $digital->getProfit()."<br>";


$single = new Single(5);
echo $single->getProfit()."<br>";

$weigt = new Weight(30, 1000);
echo $weigt->getProfit()."<br>";