<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        
        $P = $_POST['pos'];
        $N = $_POST['name'];
        $C = $_POST['contact'];
        $A = $_POST['address'];
        $S = $_POST['start'];
        $E = $_POST['end'];

        $mysql = "UPDATE officials SET pos='$P', name='$N', contact='$C', address='$A', start='$S', end='$E' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_officials.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

