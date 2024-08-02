<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

	$id = $_POST["hidden_id"];
	$resident = $_POST["resident"];
	$clearance = $_POST["clearance"];
	$purpose = $_POST["purpose"];
	$orno = $_POST["orno"];

	

    $mysql = "UPDATE clearance SET clearanceno='$clearance' , resident='$resident', purpose='$purpose', orno='$orno' WHERE id='$id'";
        if(mysqli_query($link, $mysql))
      {
        header("Location: zone_clear.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

	mysqli_close($link);
?>