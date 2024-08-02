<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

	$clearance = $_POST["clearance"];
	$resident = $_POST["resident"];
	$purpose = $_POST["purpose"];
	$orno = $_POST["orno"];

	$sql = "INSERT INTO clearance (date, clearanceno, resident, purpose, orno, status) VALUES (CURRENT_DATE, '$clearance', '$resident', '$purpose', '$orno', 'active')";
		if(mysqli_query($link, $sql)){
			header("Location: zone_clear.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	mysqli_close($link);
?>