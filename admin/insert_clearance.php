<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
 
    $N = $_POST['clearance'];
    $C = $_POST['resident'];
    $P = $_POST['purpose'];
    $U = $_POST['number'];
    

    $sql = "INSERT INTO clearance (date, clearanceno, resident, purpose, orno, status) 
    VALUES (CURRENT_DATE, '$N', '$C', '$P', '$U', 'active')";


    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_clearance.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>