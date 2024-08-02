<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $house = $_POST['household'];
        $zone = $_POST['zone'];
        $total = $_POST['total'];

        $mysql = "UPDATE household SET householdno='$house', zone='$zone', totalmem='$total' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_household.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

