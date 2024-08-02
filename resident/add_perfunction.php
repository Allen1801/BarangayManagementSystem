<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}


	$name = $_POST["name"];
	$bname = $_POST["bname"];
	$address = $_POST["address"];
	$type = $_POST["type"];
	

	$sql = "INSERT INTO permit (date, resident, businessname, address, type, orno, amount, status) VALUES (CURRENT_DATE, '$name', '$bname', '$address', '$type', ' ', ' ', 'active')";
		if(mysqli_query($link, $sql)){
			header("Location: res_per.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	mysqli_close($link);
?>