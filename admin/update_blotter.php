<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $N = $_POST['date'];
        $U = $_POST['p1'];
        $P = $_POST['p2'];
        $S = $_POST['complain'];
        
        $L = $_POST['status'];
        $D = $_POST['location'];
        $A = $_POST['act'];

        $mysql = "UPDATE blotter SET date='$N', complainant='$U', complainee='$P', complaint='$S', status='$L', location='$D' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_blotter.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

