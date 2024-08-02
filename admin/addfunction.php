<?php
  
  $link = mysqli_connect("localhost", "root", "", "dbplp");

  if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
  }


  $lname = $_POST["lname"];
  $fname = $_POST["fname"];
  $mname = $_POST["mname"];
  $bday = $_POST["bday"];
  $household = $_POST["household"];
  $uname = $_POST["uname"];
  $pass = md5($_POST["pass"]);

  $sql = "INSERT INTO usertb (username, fullname, password, datecreated, action) VALUES ('$uname', '$fname', '$pass', CURRENT_DATE, 'Edit')";
    if(mysqli_query($link, $sql)){
      header("Location: SanGabriel_BSIT2A_View.php");
    } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

  mysqli_close($link);
?>
