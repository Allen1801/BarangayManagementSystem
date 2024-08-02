<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

	$id = $_POST["hidden_id"];
	$name = $_POST["name"];
	$bname = $_POST["bname"];
	$address = $_POST["address"];
	$type = $_POST["type"];
	$orno = $_POST["orno"];
	$amount = $_POST["amount"];
	

    $mysql = "UPDATE permit SET resident='$name' , businessname='$bname', address='$address', type='$type', orno='$orno', amount='$amount' WHERE id='$id'";
        if(mysqli_query($link, $mysql))
      {
        header("Location: zone_per.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

	mysqli_close($link);
?>