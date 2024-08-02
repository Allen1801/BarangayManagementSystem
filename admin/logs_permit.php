<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

$sql = "INSERT INTO logs (user, date, action) 
    VALUES ('Administrator', CURRENT_DATE, 'ADDED A RECORD IN PERMIT')";

if (mysqli_query($link, $sql)) {
    header ("Location: permit.php");
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>