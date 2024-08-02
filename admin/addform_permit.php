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
        <link rel="stylesheet" href="../css/permit.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

    <form class= "form" action = "insert_permit.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px;">
          <h1 style="margin-left: 190px; margin-top: -69px; font-size: 42px; font-weight: bolder;">MANAGE PERMIT</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">OWNER : </p>
          <input type="text" class="name" placeholder="Last Name, First Name, Middle Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="owner">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">BUSINESS NAME : </p>
          <input type="text" class="username" placeholder="Business Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="business">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">BUSINESS ADDRESS : </p>
          <input type="text" class="number" placeholder="Business Address" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="address">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">TYPE OF BUSINESS : </p>
          <input type="text" class="username" placeholder="Type of Business" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="type">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">OR NUMBER : </p>
          <input type="text" class="username" placeholder="OR Number" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="num">
          
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">AMOUNT :  </p>
          <input type="text" class="number" placeholder="Amount" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="amount">
        </div>
               
          <div class="buttons" style="margin-left: -125px;">
            <a href="permit.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
    
</body>
</html>
