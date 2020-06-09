<?php
include 'server/view.php';
include "server/imgBig.php";


$page = Templater(
    'templates/big.php',
    array('title' => $title, 'path'=>$bigImage));   //'title' => $title,

// Вывод.
echo $page;