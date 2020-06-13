<?php
require_once "../vendor/autoload.php";

//Создание объекта Twig
try {
    $loader = new \Twig\Loader\FilesystemLoader('../templates');
    $twig = new \Twig\Environment($loader);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}

// подключение к бд
try {
    $db = new PDO('mysql:dbname=online_store; host=localhost', 'root', '');
}
catch (PDOException $error){
    echo "Error = ". $error->getMessage();
}
// установка error режима
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);