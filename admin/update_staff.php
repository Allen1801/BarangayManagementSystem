<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $name = $_POST['name'];
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $mysql = "UPDATE staff SET name='$name', username='$user', password='$pass' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_staff.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

