<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
  $sql = "SELECT * FROM residents WHERE id=$id";
    if ($result = mysqli_query($link, $sql))
    {
        $row = mysqli_fetch_array($result);
    $A = $row['lname'];
    $B = $row['fname'];
    $C = $row['mname'];
    $D = $row['bdate'];
    $F = $row['bplace'];
    $P = $row['zone'];
    $G = $row['totalhousemem'];
    $J = $row['civilstatus'];
    $E = $row['housenum'];
    $L = $row['religion'];
    $N = $row['nationality'];
    $H = $row['gender'];
    $K = $row['address'];
    $I = $row['ownership'];
    $O = $row['username'];
    $Q = $row['password'];
    
    }    
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/resident.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

    <form class= "form" action = "update_resident.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px;">
              <h1 style="font-weight: bolder; margin-top: -70px; margin-left: 190px;">MANAGE RESIDENT</h1>
              <h3 style="margin-top:10px;">___________________________________________________</h3>

              <input type="hidden" value="<?php echo $id; ?>" name="hidden_id" id="hidden_id">

            <div style="margin-left: 28px;">
              <p>LAST NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp FIRST NAME: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMIDDLE NAME:</p>
              <div class="input">
                <input type="text" class="Lastname" value="<?php echo $A; ?>" autocomplete ="off" name="lname">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="Firstname" value="<?php echo $B; ?>" autocomplete ="off" name="fname">&nbsp;&nbsp;&nbsp;
                <input type="text" class="middlename" value="<?php echo $C; ?>" autocomplete ="off" name="mname">
              </div>


              <p style="margin-top: 10px;" >BIRTHDAY:&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                HOUSEHOLD NO.:</p>
              <div class="input2">
                <input type="date" class="birthday" style="width: 300px;" value="<?php echo $D; ?>" autocomplete ="off" name="bday">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" class="household" style="width: 300px;" value="<?php echo $E; ?>" autocomplete ="off" name="household">&nbsp;&nbsp;&nbsp;&nbsp;
              </div>

              <p style="margin-top: 10px;">BIRTH PLACE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTOTAL HOUSEHOLD MEMBER:</p>
              <div class="input2">
                <input type="text" class="birtplace" style="width: 300px;" value="<?php echo $F; ?>" autocomplete ="off" name="bplace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="totalhousehold" style="width: 300px;" value="<?php echo $G; ?>" autocomplete ="off" name="total">&nbsp;&nbsp;&nbsp;&nbsp;
              </div>

              <p style="margin-top: 10px;">GENDER:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHOUSE OWNERSHIP STATUS</p>
              <div class="input2">
                <input type="text" class="gender" style="width: 300px;" value="<?php echo $H; ?>" autocomplete ="off" name="gender">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="status" class="status" style="width: 300px; height:23px" value="<?php echo $I; ?>" autocomplete ="off" name="status">
                  <option value="none"></option>
                  <option value="Ownhouse">Own House</option>
                  <option value="rental">Rental House</option>
                  <option value="living">Living with parents</option>
                </select>
                
              </div>

              <p style="margin-top: 10px;">CIVIL STATUS:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPRESENT ADDRESS:</p>
              <div class="input2">
                <input type="text" class="civil" style="width: 300px;" value="<?php echo $J; ?>" autocomplete ="off" name="civil">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="address" style="width: 300px;" value="<?php echo $K; ?>" autocomplete ="off" name="address">&nbsp;&nbsp;&nbsp;&nbsp;
              </div>

              <p style="margin-top: 10px;">RELIGION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
              <div class="input2">
                <input type="text" class="religion" style="width: 300px;" value="<?php echo $L; ?>" autocomplete ="off" name="religion"> 
              </div>

              <p style="margin-top: 10px;">NATIONALITY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                USERNAME:</p>
              <div class="input2">
                <input type="text" class="national" style="width: 300px;" value="<?php echo $N; ?>" autocomplete ="off" name="nationality">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="user" style="width: 300px;" value="<?php echo $O; ?>" autocomplete ="off" name="user">&nbsp;&nbsp;&nbsp;&nbsp;
              </div>

              <p style="margin-top: 10px;">ZONE NO.:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                PASSWORD:</p>
              <div class="input2">
                <input type="text" class="zone" style="width: 300px;" value="<?php echo $P; ?>" autocomplete ="off" name="zone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" class="pass" style="width: 300px;" value="<?php echo $Q; ?>" autocomplete ="off" name="pass">&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              </div>

               
          <div class="buttons" style="margin-left: -205px;">
            <a href="residents.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
    
</body>
</html>
