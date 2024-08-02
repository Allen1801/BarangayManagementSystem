<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}


	$complainant = $_POST["complainant"];
	$complainee = $_POST["complainee"];
	$complaint = $_POST["complaint"];
	$status = $_POST["status"];
	$action = $_POST["action"];
	$location = $_POST["location"];

	$sql = "INSERT INTO blotter (date, complainant, complainee, complaint, status, location, action, type) VALUES (CURRENT_DATE, '$complainant', '$complainee', '$complaint', '$status', '$location', '$action', 'active')";
		if(mysqli_query($link, $sql)){
			header("Location: zone_blot.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	mysqli_close($link);
?>