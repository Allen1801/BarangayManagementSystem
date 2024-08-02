<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

	$resident = $_POST["resident"];
	$purpose = $_POST["purpose"];


	$sql = "INSERT INTO clearance (date, clearanceno, resident, purpose, orno, status) VALUES (CURRENT_DATE, ' ', '$resident', '$purpose', ' ', 'active')";
		if(mysqli_query($link, $sql)){
			header("Location: res_clear.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	mysqli_close($link);
?>