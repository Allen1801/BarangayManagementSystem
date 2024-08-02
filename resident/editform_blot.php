<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
    
    $id = $_GET['id'];
    $complainant = $_GET['complainant'];
    $complainee = $_GET['complainee'];
    $complaint = $_GET['complaint'];
    $location = $_GET['location'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/res_blot.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action="update_blotfunction.php" method="POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 190px;">
          <h1 style="margin-left: 313px; margin-top: -69px; font-size: 40px; font-weight: bolder;">REPORT</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

         <div style="margin-left: 10px;">
            <br>
            <input type="hidden"  value="<?php echo $id; ?>" name="hidden_id" id="hidden_id"/>
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINANT : </p>
          <input type="text" class="complaint" name="complainant" value="<?php echo $complainant; ?>" placeholder="Complainant" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINEE : </p>
          <input type="text" class="complainee" name="complainee" value="<?php echo $complainee; ?>" placeholder="Complainee" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">COMPLAINT : </p>
          <input type="text" class="complaint" name="complaint" value="<?php echo $complaint; ?>" placeholder="Complaint" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">LOCATION OF INCIDENTS : </p>
          <input type="text" class="location" name="location" value="<?php echo $location; ?>" placeholder="Location Of Incidents" style="width: 450px; margin-bottom: 10px; margin-left: 110px;">

          </div>

          <div>
              <p style="text-align: center; margin-top: 20px; font-size: 12px;"><i>In accordance with the RA 10173 otherwise known as “Data Privacy Act of 2012”, all personal information<br> shared will be rest assured to be treated with the utmost confidentiality and privacy. Hence, only authorized persons shall be allowed to keep, handle, and extract any data or whatever information gathered from this online record management system. Unauthorized reproduction of this information or whatever analogous acts shall be dealt with accordingly.</i></p>

              <input type="checkbox" value="I Agree" style="margin-left: 42px;" required> <i><b>I hereby agree with the data privacy agreement and willing to continue answering the form.</b></i>
            </div>
            <br>
          <div class="buttons" style="margin-left: -110px;">
          	<a href="res_blot.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
