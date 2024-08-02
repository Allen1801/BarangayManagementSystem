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
        <link rel="stylesheet" href="../css/res_permit.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action="add_perfunction.php" method="POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 100px;">
          <h1 style="margin-left: 213px; margin-top: -69px; font-size: 40px; font-weight: bolder;">REQUEST PERMIT</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

         <div style="margin-left: 10px;">
            <br>
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">OWNER NAME : </p>
          <input type="text" class="number" name="name" placeholder="Owner Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">BUSINESS NAME : </p>
          <input type="text" class="number" name="bname" placeholder="Business Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">BUSINESS ADDRESS : </p>
          <input type="text" class="number" name="address" placeholder="Business Address" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">TYPE OF BUSINESS : </p>
          <input type="text" class="number" name="type" placeholder="Type of Business" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          </div>

          <div>
              <p style="text-align: center; margin-top: 20px; font-size: 12px;" ><i>In accordance with the RA 10173 otherwise known as “Data Privacy Act of 2012”, all personal information<br> shared will be rest assured to be treated with the utmost confidentiality and privacy. Hence, only authorized persons shall be allowed to keep, handle, and extract any data or whatever information gathered from this online record management system. Unauthorized reproduction of this information or whatever analogous acts shall be dealt with accordingly.</i></p>

              <input type="checkbox" value="I Agree" style="margin-left: 42px;" required> <i><b>I hereby agree with the data privacy agreement and willing to continue answering the form.</b></i>
            </div>
            <br>
          <div class="buttons" style="margin-left: -110px;">
          	<a href="res_per.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
