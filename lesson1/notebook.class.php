<?php
include_once "good.class.php";

class notebook extends  good {
    private $videoCard;
    private $gaming;

    function __construct($name, $price, $smallDescription, $fullDescription, $img, $videoCard, $gaming)
    {
        parent::__construct($name, $price, $smallDescription, $fullDescription, $img);
        $this->videoCard = $videoCard;
        $this->gaming = $gaming;?>

        <div>
            <h1>Название: <?=$this->name?></h1>
            <h2>Цена: <?=$this->price?> $</h2>
            <p>Видеокарта: <?=$this->videoCard?></p>
            <p>Игровой ? <?=$this->gaming?> </p>
            <p>Краткое описание: <?=$this->smallDescription?></p>
            <p>Подробное описание: <?=$this->fullDescription?></p>
        </div>
        <img src="<?= $this->img?>" alt="<?=$this->name?>">

    <?}
}