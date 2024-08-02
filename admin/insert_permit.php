<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

    
    $N = $_POST['owner'];
    $C = $_POST['business'];
    $P = $_POST['address'];
    $U = $_POST['type'];
    $G = $_POST['num'];
    $H = $_POST['amount'];
    

    $sql = "INSERT INTO permit (date, resident, businessname, address, type, orno, amount, status) 
    VALUES (CURRENT_DATE, '$N', '$C', '$P', '$U', '$G', '$H', 'active')";

    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_permit.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>