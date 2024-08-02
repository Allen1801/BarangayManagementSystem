<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
  <link rel="icon" href="images/logo.png">
  <title>Barangay System Management</title>
</head>
<body style = "background-image:url(images/home.png);background-repeat: no-repeat;background-size:cover;">
  
  <div class="navbar">
    <a><img src = "images/logo.png" style = "float: left; width: 47px; height: 47px; padding: 1px 12px; margin-top: 2px;"></a>
    <a><img src = "images/navname.png" style = "float: left; width: 220px; height: 47px; padding: 4px 0px;"></a>
      <div class="dropdown">
      <button class="dropbtn"><b>ACCOUNT</b></button>
        <div class="dropdown-content">
            <a href="login_admin.php"><b>ADMIN</b></a>
            <a href="login_resident.php"><b>RESIDENT</b></a>
            <a href="login_zone.php"><b>ZONE LEADER</b></a>
        </div>
      </div>
      <div class="dropdown1">
      <button class="dropbtn1"><b>ABOUT</b></button>
        <div class="dropdown-content1">
            <a href="about_official.php"><b>OFFICIALS</b></a>
            <a href="about_history.php"><b>HISTORY</b></a>
            <a href="about_announcement.php"><b>ANNOUNCEMENTS</b></a>
        </div>
      </div>
      <a class="active" href="index.php"><b>HOME</b></a> 
  </div>

    <a href="home_projects.php"> <button type="button" class="btn" id="btn">VIEW ALL PROJECTS</button> </a>
</body>
</html>
