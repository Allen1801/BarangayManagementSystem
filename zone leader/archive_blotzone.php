<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

    $id = $_GET['id'];
    $type = $_GET['type'];
	

    $mysql = "UPDATE blotter SET type = 'inactive' WHERE id='$id'";
        if(mysqli_query($link, $mysql))
      {
        header("Location: zone_blot.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

	mysqli_close($link);
?>