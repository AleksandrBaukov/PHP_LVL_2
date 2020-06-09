<?php
include 'admin/config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM images WHERE id='$id'";
$res = mysqli_query($connect, $sql);
$sqlopened = "UPDATE images SET opened=opened+1 WHERE id=";

if(mysqli_num_rows($res)>0) {
    mysqli_query($connect, $sqlopened . $id);
    $data = mysqli_fetch_assoc($res);
    $bigImage = $data["path-big"] . $data["filename"];
    $title = $data["filename"];
}



