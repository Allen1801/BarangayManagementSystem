<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}


	$name = $_POST["name"];
	$bname = $_POST["bname"];
	$address = $_POST["address"];
	$type = $_POST["type"];
	$orno = $_POST["orno"];
	$amount = $_POST["amount"];
	

	$sql = "INSERT INTO permit (date, resident, businessname, address, type, orno, amount, status) VALUES (CURRENT_DATE, '$name', '$bname', '$address', '$type', ' $orno', '$amount', 'active')";
		if(mysqli_query($link, $sql)){
			header("Location: zone_per.php");
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

	mysqli_close($link);
?>