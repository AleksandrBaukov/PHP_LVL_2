<?php
include_once "phone.class.php";
include_once "notebook.class.php";

//new phone("Oneplus 7 Pro","600", "snapdgagon 855 Plus","6.7", "48+48+24+5", "smallDesk", "fullDesk");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="good">
    <? new phone("Oneplus 7 Pro","600", "snapdgagon 855 Plus","6.7", "48+48+24+5", "smallDesk", "fullDesk", "img/oneplus7tPro.jpg");
    ?>
    </div>
    <div class="good">
    <? new notebook("asusPredator", "3000", "smalldesc", "fulldesc", "img/asusPredator.jpg", "Nvidia 2080 TI", "yes")?>
    </div>
</body>
</html>
