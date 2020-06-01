<?php
include_once "good.class.php";

class phone extends good {
    private $processor;
    private $screen;
    private $camera;

    function __construct($name, $price, $processor, $screen, $camera, $smallDescription, $fullDescription, $img)
    {
        parent::__construct($name, $price, $smallDescription, $fullDescription, $img);
        $this->processor = $processor;
        $this->screen = $screen;
        $this->camera = $camera;?>

        <div>
            <h1>Название: <?=$this->name?></h1>
            <h2>Цена: <?=$this->price?> $</h2>
            <p>Процессор: <?=$this->processor?></p>
            <p>Экран: <?=$this->screen?> inches</p>
            <p>Камеры: <?=$this->camera?> MP</p>
            <p>Краткое описание: <?=$this->smallDescription?></p>
            <p>Подробное описание: <?=$this->fullDescription?></p>
        </div>
        <img src="<?= $this->img?>" alt="<?=$this->name?>">


<!--        echo "Название: $this->name<br>";-->
<!--        echo "Цена: $this->price $<br>";-->
<!--        echo "Процессор: $this->processor<br>";-->
<!--        echo "Экран: $this->screen inches<br>";-->
<!--        echo "Камеры: $this->camera MP<br>";-->
<!--        echo "Краткое описание: $this->smallDescription<br>";-->
<!--        echo "Подробное описание: $this->fullDescription";-->
    <?}
}