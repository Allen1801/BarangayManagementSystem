<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

$sql = "INSERT INTO logs (user, date, action) 
    VALUES ('Administrator', CURRENT_DATE, 'UPDATED A RECORD IN BARANGAY OFFICIALS')";

if (mysqli_query($link, $sql)) {
    header ("Location: officials.php");
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>