<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_GET['id'];
        $status = $_GET['Type'];

        $mysql = "UPDATE household SET status ='Inactive' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsArchive_household.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

