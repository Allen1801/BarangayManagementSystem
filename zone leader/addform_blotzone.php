<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/zone_blotter.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action="add_blotfunction.php" method="POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px;">
          <h1 style="margin-left: 190px; margin-top: -69px; font-size: 42px; font-weight: bolder;">MANAGE BLOTTER</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINANT : </p>
          <input type="text" class="name" name="complainant" placeholder="Last Name, First Name, Middle Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" >

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINEE : </p>
          <input type="text" class="username" name="complainee" placeholder="Last Name, First Name, Middle Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINT : </p>
          <input type="text" class="number" name="complaint" placeholder="Complaint" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">ACTION : </p>
          <input type="text" class="username" name="action" placeholder="Action" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">
          
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">STATUS : </p>
          <div>
          <select name="status" class="name" style="width: 450px; margin-bottom: 10px; height: 23px; margin-left: 110px;">
                  <option value="none"></option>
                  <option value="Solved">Solved</option>
                  <option value="Unsolved">Unsolved</option>
                </select>
          </div>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">LOCATION OF INCIDENT :  </p>
          <input type="text" class="number" name="location" placeholder="Location of Incident" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          

        </div>
               
          <div class="buttons" style="margin-left: -125px;">
          	<a href="zone_blot.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
