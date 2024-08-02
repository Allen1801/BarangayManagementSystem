<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $clea = $_POST['clearance'];
        $res = $_POST['resident'];
        $pur = $_POST['purpose'];
        $num = $_POST['number'];

        $mysql = "UPDATE clearance SET clearanceno='$clea', resident='$res', purpose='$pur', orno='$num' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_clearance.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

