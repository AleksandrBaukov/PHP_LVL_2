<?php
include_once('server/view.php');



// Внутренний шаблон.
$content = Templater(
    'templates/gallery.php');

// Внешний шаблон.
$page = Templater(
    'templates/main.php',
    array('content' => $content));

// Вывод.
echo $page;