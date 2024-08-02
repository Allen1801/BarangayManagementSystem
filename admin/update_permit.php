<?php
    $link = mysqli_connect("localhost", "root", "", "barangaydb");
      if($link === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
      } 

      
        $id = $_POST['hidden_id'];
        $own = $_POST['owner'];
        $bus = $_POST['business'];
        $add = $_POST['address'];
        $type = $_POST['type'];
        $num = $_POST['num'];
        $amo = $_POST['amount'];

        $mysql = "UPDATE permit SET resident='$own', businessname='$bus', address='$add', type='$type', orno='$num', amount='$amo' WHERE id='$id'";
    
        if(mysqli_query($link, $mysql))
      {
        header("Location: logsUpdate_permit.php");
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
  
    mysqli_close($link);
?>

