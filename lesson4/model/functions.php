<?php
include "../server/server.php";


function getAll($db,$table, $id){
    $sql = "SELECT * FROM {$table} WHERE id>$id limit 3";
    $result = $db->query($sql);


    if(!$result){
        die(mysqli_error($db));
    }

    while ($row = $result->fetch()){
        $res[]= $row;
    }

    return $res;
}