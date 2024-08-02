<?php

$link = mysqli_connect("localhost", "root", "", "barangaydb");

if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/zone_permit.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<!-- SIDE BAR -->

<body style="background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;">
    <div class="sidebar">
        
        <header>BARANGAY TALAGA</header>
        <img src="../images/logo.png">
        <ul>
            <li><a href="zone_clear.php">Clearance</a></li>
            <li><a href="zone_blot.php">Blotter</a></li>
            <li><a href="zone_per.php">Permit</a></li>
        </ul>
    </div>

          <!-- LOG OUT -->

          <div class="dropdown">
          <img src="../images/person.png">
          <button onclick="myFunction()" class="dropbtn" >ZONE LEADER</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="../index.php">LOG OUT</a>
          </div>
        </div>

        <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>

        <!-- HEADER -->

    <div>
    <div class="header">
        <h1>BARANGAY PERMIT</h1>
    </div>

    <div class="add-delete">
       <a href="addform_perzone.php"> <button class="btn btn-primary btn-sm" id="add"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Permit</button></a>
        
    </div>

    <!-- TABLE -->

    <div class="grid">
        <form method="post">
        <table class="table-box">
            <thead>
                <tr> 
                    <th style="background-color: powderblue; text-align: center;">DATE</th>                  
                    <th style="background-color: #f9dcc4; text-align: center;">RESIDENT</th>
                    <th style="background-color: powderblue; text-align: center;">BUSINESS NAME</th>
                    <th style="background-color: #f9dcc4; text-align: center;">BUSINESS ADDRESS</th>
                    <th style="background-color: powderblue; text-align: center;">TYPE OF BUSINESS</th>
                    <th style="background-color: #f9dcc4; text-align: center;">OR NUMBER</th>
                    <th style="background-color: powderblue; text-align: center;">AMOUNT</th>
                    <th style="width: 130px !important; background-color: #f9dcc4; text-align: center;">OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($link, "select * from permit WHERE status = 'active'");
                    while($row = mysqli_fetch_array($sql))
                    {
                echo'
                <tr>';

                    $id = $row['id'];
                    $resident = $row['resident'];
                    $businessname = $row['businessname'];
                    $address = $row['address'];
                    $type = $row['type'];
                    $orno = $row['orno'];
                    $amount = $row['amount'];
                    $status = $row['status'];

                echo '
                    <td>' .$row['date'].  '</td>
                    <td>' .$row['resident'].  '</td>
                    <td>' .$row['businessname']. '</td>
                    <td>' .$row['address'].  '</td>
                    <td>' .$row['type']. '</td>   
                    <td>' .$row['orno'].  '</td>
                    <td>' .$row['amount']. '</td>     
                    <td style="text-align: center; padding: 2px;">';
                        echo "<button type='submit' class='btn btn-primary btn-sm' id='edit'> <a href='editform_perzone.php?id=$id&resident=$resident&businessname=$businessname&address=$address&type=$type&orno=$orno&amount=$amount' style='color:white;'> Edit </a></button>
                            <button class='btn btn-danger btn-sm' id='archive' name='archive'><i class='fa fa-trash-o' aria-hidden='true'><a href='archive_perzone.php?id=$id&status=$status' style='color:white';> Archive </a></i></button>";
                   echo '</td>
                </tr>';
                    }
                    ?>
            </tbody>
        </table>
        </form>
    </div>
</div>  
</body>
</html>