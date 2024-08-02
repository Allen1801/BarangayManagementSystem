<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
  $sql = "SELECT * FROM officials WHERE id=$id";
    if ($result = mysqli_query($link, $sql))
    {
        $row = mysqli_fetch_array($result);
        $P = $row['pos'];
        $N = $row['name'];
        $C = $row['contact'];
        $A = $row['address'];
        $S = $row['start'];
        $E = $row['end'];
    }    
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/officials.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action = "update_officials.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 30px;">
          <h1 style="margin-left: 143px; margin-top: -69px; font-size: 40px; font-weight: bolder;">MANAGE BRGY. OFFICIALS</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

         <input type="hidden" value="<?php echo $id; ?>" name="hidden_id" id="hidden_id">

         <div style="margin-left: 10px;">
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">POSITION : </p>
          <select class="position" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="pos" value="<?php echo $P; ?>" autocomplete ="off">
              <option value="">--Select Position--</option>
              <option value="Barangay Captain">Barangay Captain</option>
              <option value="Barangay Kagawad (Ordinance)">Barangay Kagawad (Ordinance)</option>
              <option value="Barangay Kagawad (Public Safety)">Barangay Kagawad (Public Safety)</option>
              <option value="Barangay Kagawad (Tourism)">Barangay Kagawad (Tourism)</option>
              <option value="Barangay Kagawad (Budget & Finance)">Barangay Kagawad (Budget & Finance)</option>
              <option value="Barangay Kagawad (Agriculture)">Barangay Kagawad (Agriculture)</option>
              <option value="Barangay Kagawad (Education)">Barangay Kagawad (Education)</option>
              <option value="Barangay Kagawad (Infrastracture)">Barangay Kagawad (Infrastracture)</option>
              <option value="SK Chairman">SK Chairman</option>
              <option value="Barangay Secretary">Barangay Secretary</option>
              <option value="Barangay Treasurer">Barangay Treasurer</option>
          </select>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">NAME : </p>
          <input type="text" class="username" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="name" value="<?php echo $N; ?>" autocomplete ="off">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">CONTACT # : </p>
          <input type="text" class="number" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="contact" value="<?php echo $C; ?>" autocomplete ="off">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">ADDRESS : </p>
          <input type="text" class="number" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="address" value="<?php echo $A; ?>" autocomplete ="off">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;" >START TERM : </p>
          <input type="date" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="start" value="<?php echo $S; ?>" autocomplete ="off">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;" >END TERM : </p>
          <input type="date" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="end" value="<?php echo $E; ?>" autocomplete ="off">
          </div>
                   
          <div class="buttons" style="margin-left: -115px;">
          	<a href="officials.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
