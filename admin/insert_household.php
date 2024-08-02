<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

    
    $N = $_POST['household'];
    $C = $_POST['zone'];
    $P = $_POST['total'];
    

    $sql = "INSERT INTO household (householdno, zone, totalmem, status) 
    VALUES ('$N', '$C', '$P', 'active')";



    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_household.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>