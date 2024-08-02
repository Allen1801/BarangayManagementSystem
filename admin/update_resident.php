<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $bday = $_POST['bday'];
        $bplace = $_POST['bplace'];
        $zone = $_POST['zone'];
        $household = $_POST['household'];
        $civil = $_POST['civil'];
        $total = $_POST['total'];
        $religion = $_POST['religion'];
        $nationality = $_POST['nationality'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $address = $_POST['address'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $mysql = "UPDATE residents SET lname='$lname', fname='$fname', mname='$mname', bdate='$bday', bplace='$bplace', baranagay='Brgy.Talaga', zone='$zone',
        totalhousemem='$household', civilstatus='$civil',
        housenum='$total', religion='$religion', nationality='$nationality', gender='$gender', 
        ownership='$status', address='$address', username='$user', password='$pass' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_resident.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

