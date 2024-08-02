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
        <link rel="stylesheet" href="../css/logcss.css">
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
            <li><a href="officials.php">Barangay Officials</a></li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="zone_leader.php">Zone Leader</a></li>
            <li><a href="household.php">Household</a></li>
            <li><a href="residents.php">Resident</a></li>
            <li><a href="clearance.php">Clearance</a></li>
            <li><a href="blotter.php">Blotter</a></li>
            <li><a href="permit.php">Permit</a></li>
            <li><a href="logs.php">Logs</a></li>
        </ul>
    </div>

          <!-- LOG OUT -->

          <div class="dropdown">
          <img src="../images/person.png">
          <button onclick="myFunction()" class="dropbtn" >ADMINISTRATOR</button>
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
        <h1>LOGS</h1>
    </div>

    </div>

    <!-- TABLE -->

    <div class="grid">
        <form method="post">
        <table class="table-box">
            <thead>
                <tr>                   
                    <th style="background-color: #f9dcc4; text-align: center;">USER</th>
                    <th style="background-color: powderblue; text-align: center;">DATE</th>
                    <th style="background-color: #f9dcc4; text-align: center;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($link, "select * from logs ");
                    while($row = mysqli_fetch_array($sql))
                    {
                echo'
                <tr>
                    <td>' .$row['user'].  '</td>
                    <td>' .$row['date']. '</td>
                    <td>' .$row['action']. '</td> ';
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