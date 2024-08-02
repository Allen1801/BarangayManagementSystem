<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

    
    $N = $_POST['zone'];
    $C = $_POST['username'];
    $P = $_POST['password'];
    

    $sql = "INSERT INTO zone (zone, username, password, Type) 
    VALUES ('$N', '$C', '$P', 'Active')";


    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_zone.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>