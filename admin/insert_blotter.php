<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}


    $G = $_POST['date'];
    $N = $_POST['p1'];
    $C = $_POST['p2'];
    $P = $_POST['complain'];
    $U = $_POST['act'];
    $S = $_POST['status'];
    $A = $_POST['location'];
    

    $sql = "INSERT INTO blotter (date, complainant, complainee, complaint, action, status, location, type) 
    VALUES ('$G', '$N', '$C', '$P', '$U', '$S', '$A', 'active')";


    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_blotter.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>