<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

    $P = $_POST['position'];
    $N = $_POST['name'];
    $C = $_POST['contact'];
    $A = $_POST['address'];
    $S = $_POST['start'];
    $E = $_POST['end'];

    $sql = "INSERT INTO officials (pos, name, contact, address, start, end, status) 
    VALUES ('$P', '$N', '$C', '$A', '$S', '$E', 'Ongoing Term')";


    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_officials.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>