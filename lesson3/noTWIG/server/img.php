<?php
include 'admin/config.php';

$sql = "SELECT * FROM images ORDER BY opened DESC";
$res = mysqli_query($connect, $sql);
?>