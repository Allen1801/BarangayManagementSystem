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
        <link rel="stylesheet" href="../css/zone.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action = "insert_zone.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 30px;">
          <h1 style="margin-left: 143px; margin-top: -69px; font-size: 42px; font-weight: bolder;">MANAGE ZONE LEADER</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">ZONE NO. : </p>
          <input type="text" class="name" placeholder="Zone No." style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="zone">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">USERNAME : </p>
          <input type="text" class="username" placeholder="Username" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="username">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">PASSWORD : </p>
          <input type="password" class="number" placeholder="Password" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="password">
          </div>
          
        </div>
               
          <div class="buttons" style="margin-left: -125px;">
          	<a href="zone_leader.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
