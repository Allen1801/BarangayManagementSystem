<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
  $sql = "SELECT * FROM staff WHERE id=$id";
    if ($result = mysqli_query($link, $sql))
    {
        $row = mysqli_fetch_array($result);
        $N = $row['name'];
        $U = $row['username'];
        $P = $row['password'];
    }    
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/adstaff.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action = "update_staff.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 110px;">
          <h1 style="margin-left: 220px; margin-top: -69px; font-size: 42px; font-weight: bolder;">MANAGE STAFF</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

          <input type="hidden" value="<?php echo $id; ?>" name="hidden_id" id="hidden_id">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">NAME : </p>
          <input type="text" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="name" value="<?php echo $N; ?>" autocomplete ="off">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">USERNAME : </p>
          <input type="text" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="username" value="<?php echo $U; ?>" autocomplete ="off">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">PASSWORD : </p>
          <input type="password" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="password" value="<?php echo $P; ?>" autocomplete ="off">
          </div>
          
        </div>
               
          <div class="buttons" style="margin-left: -125px;">
          	<a href="staff.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" name ="submit" value="RECORD">
          </div>
        </form>
	
</body>
</html>