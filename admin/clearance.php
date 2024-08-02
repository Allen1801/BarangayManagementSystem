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
        <link rel="stylesheet" href="../css/clearancecss.css">
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
        <h1>BARANGAY CLEARANCE</h1>
    </div>

    <div class="add-delete">
       <a href="addform_clearance.php"> <button class="btn btn-primary btn-sm" id="add"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Clearance</button></a>
        
    </div>

    <!-- TABLE -->

    <div class="grid">
        <form method="post">
        <table class="table-box">
            <thead>
                <tr>                   
                    <th style="background-color: powderblue; text-align: center;">DATE RECORDED</th>
                    <th style="background-color: #f9dcc4; text-align: center;">CLEARANCE NO.</th>
                    <th style="background-color: powderblue; text-align: center;">RESIDENT NAME</th>
                    <th style="background-color: #f9dcc4; text-align: center;">PURPOSE</th>
                    <th style="background-color: powderblue; text-align: center;">OR NUMBER</th>
                    <th style="width: 130px !important; background-color: #f9dcc4; text-align: center;">OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($link, "select * from clearance where status ='active'");
                    while($row = mysqli_fetch_array($sql))
                    {
                        echo'
                        <tr>';
                                $id = $row['id'];
                                $date = $row['date'];
                                $clearanceno = $row['clearanceno'];
                                $resident = $row['resident'];
                                $purpose = $row['purpose'];
                                $orno = $row['orno'];
                                $status = $row['status'];
                        echo '
                            <td>' .$row['date'].  '</td>
                            <td>' .$row['clearanceno'].  '</td>
                            <td>' .$row['resident']. '</td>
                            <td>' .$row['purpose']. '</td>
                            <td>' .$row['orno']. '</td>   
                            <td style="text-align: center; padding: 2px;">';
                                
                                echo "<button type='submit' class='btn btn-primary btn-sm' id='edit'><a href='updateform_clearance.php?id=$id&clearanceno=$clearanceno&resident=$resident&purpose=$purpose&orno=$orno' style='color:white';>
                                Edit</a></button>";

                                echo "<button type='submit' class='btn btn-danger btn-sm' id='archive'>
                                <a href='archive_clearance.php?id=$id&status=$status' style='color:white'; style='color:white';>
                                Archive</a></button>";
                                
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