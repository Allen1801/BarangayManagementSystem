<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

    
    $A = $_POST['lname'];
    $B = $_POST['fname'];
    $C = $_POST['mname'];
    $D = $_POST['bday'];
    $F = $_POST['bplace'];
    $P = $_POST['zone'];
    $G = $_POST['total'];
    $J = $_POST['civil'];
    $E = $_POST['household'];
    $L = $_POST['religion'];
    $N = $_POST['nationality'];
    $H = $_POST['gender'];
    $K = $_POST['address'];
    $I = $_POST['status'];
    $M = $_POST['image'];
    $O = $_POST['user'];
    $Q = $_POST['pass'];
    

    $sql = "INSERT INTO residents (lname, fname, mname, bdate, bplace, baranagay, zone, totalhousemem, civilstatus, housenum, religion, nationality, gender, address, ownership, username, password, status) 
    VALUES ('$A', '$B', '$C', '$D', '$F', 'Brgy.Talaga', '$P', '$G', '$J', '$E', '$L', '$N', '$H', '$K', '$I', '$O', '$Q', 'active')";

    if (mysqli_query($link, $sql)) {
	    header ("Location: logs_resident.php");
    } else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);

?>