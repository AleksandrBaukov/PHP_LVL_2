<?php
//include_once "../server/server.php";
include_once "../server/product.php";

try {
    $src = ['goods' => $goods];
    $template = $twig->render('main.tmpl', $src);
    echo $template;
} catch (Exception $e){
    $e->getMessage();
}