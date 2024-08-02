<?php
	
	$link = mysqli_connect("localhost", "root", "", "barangaydb");

	if($link === false){
		die("ERROR: Could not connect. ". mysqli_connect_error());
	}

    $id = $_POST['hidden_id'];
    $complainant = $_POST['complainant'];
    $complainee = $_POST['complainee'];
    $complaint = $_POST['complaint'];
    $status = $_POST['status'];
    $location = $_POST['location'];
    $action = $_POST['action'];
	

    $mysql = "UPDATE blotter SET complainant='$complainant' , complainee='$complainee', complaint='$complaint', status='$status', location='$location', action='$action' WHERE id='$id'";
        if(mysqli_query($link, $mysql))
      {
        header("Location: zone_blot.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

	mysqli_close($link);
?>