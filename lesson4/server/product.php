<?php
include_once "../model/functions.php";

$goods = getAll($db,'goods',$id = 0);

//if(isset($_GET['id'])){
//    $id= $_GET['id'];
//}