<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

    $id = $_GET['id'];
    $status = $_GET['status'];
	

    $mysql = "UPDATE clearance SET status = 'inactive' WHERE id='$id'";
        if(mysqli_query($link, $mysql))
      {
        header("Location: zone_clear.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

	mysqli_close($link);
?>