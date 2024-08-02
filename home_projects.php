<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home_projects.css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
  <link rel="icon" href="images/logo.png">
  <title>Barangay System Management</title>
</head>
<body style = "background-image:url(images/bg1.png);background-repeat: no-repeat;background-size:cover;">
  
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
      <a class="nav" href="index.php"><b>HOME</b></a> 
  </div>

  <hr>
  <h1 class="heading"> LIST OF BARANGAY PROJECTS </h1>
  <hr>

    <div class="box">
    <div class="tab">
      <input id="tab-1" type="checkbox">
      <label for="tab-1">I. Economic Development </label>
      <div class="content"><p>• Entrepreneurship/Livelihood Program<br>
                              • Local Economic Development Tourism Project<br>
                              • Omsim Road Construction<br>
                              • Slaughterhouse Rehabilitation
                            </p></div>
    </div>

    <div class="tab">
      <input id="tab-2" type="checkbox">
      <label for="tab-2">II.  Social Development</label>
      <div class="content"><p>• Construction of Multi-Purpose Hall<br>
                              • Street Lighting System Installation and Maintenance<br>
                              • Barangay Health Station Rehabilitation<br>
                              • Construction/Rehabilitation Potable Water Supply System Owned by the Barangay
</p></div>
    </div>

    <div class="tab">
      <input id="tab-3" type="checkbox">
      <label for="tab-3">III. Infrastructures Development</label>
      <div class="content"><p>• Reforestation/Urban Greening<br>
                              • Solid Waste Management Program<br>
                              • Playground Benches Fabrication<br>
                              • Construction of Proposed Riverside and Alleys
</p></div>
    </div>
</body>
</html>
