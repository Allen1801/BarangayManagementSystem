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
        <link rel="stylesheet" href="../css/zone_blottercss.css">
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
        <h1>BLOTTER</h1>
    </div>

    <div class="add-delete">
        <a href="addform_blotzone.php"><button class="btn btn-primary btn-sm" id="add" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Blotter</button></a>
        
    </div>

    <!-- TABLE -->

    <div class="grid">
        <form method="post">
        <table class="table-box">
            <thead>
                <tr>                   
                    <th style="background-color: #f9dcc4; text-align: center;">DATE RECORDED</th>
                    <th style="background-color: powderblue; text-align: center;">COMPLAINANT</th>
                    <th style="background-color: #f9dcc4; text-align: center;">PERSON TO COMPLAIN</th>
                    <th style="background-color: powderblue; text-align: center;">ACTION TAKEN</th>
                    <th style="background-color: #f9dcc4; text-align: center;">STATUS</th>
                    <th style="background-color: powderblue; text-align: center;">LOCATION OF INCIDENTS</th>
                    <th style="background-color: #f9dcc4; text-align: center;">ACTION</th>
                    <th style="width: 130px !important; background-color: #f9dcc4; text-align: center;">OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($link, "SELECT * FROM blotter WHERE type = 'active'");
                    while($row = mysqli_fetch_array($sql))
                    {
                echo'
                <tr>';

                    $id = $row['id'];
                    $date = $row['date'];
                    $complainant = $row['complainant'];
                    $complainee = $row['complainee'];
                    $complaint = $row['complaint'];
                    $status = $row['status'];
                    $location = $row['location'];
                    $action = $row['action'];
                    $type = $row['type'];

                echo '
                    <td>' .$row['date'].  '</td>
                    <td>' .$row['complainant']. '</td>
                    <td>' .$row['complainee'].  '</td>
                    <td>' .$row['complaint']. '</td>
                    <td>' .$row['status'].  '</td>
                    <td>' .$row['location']. '</td>
                    <td>' .$row['action']. '</td>        
                    <td style="text-align: center; padding: 2px;">';
                       echo" <button class='btn btn-primary btn-sm' id='edit'><a href='editform_blotzone.php?id=$id&date=$date&complainant=$complainant&complainee=$complainee&complaint=$complaint&status=$status&location=$location&action=$action'; style='color:white';> Edit </a></button>
                            <button class='btn btn-danger btn-sm' id='archive' name='archive'><i class='fa fa-trash-o' aria-hidden='true'><a href='archive_blotzone.php?id=$id&type=$type' style='color:white';> Archive </a></i></button>";
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