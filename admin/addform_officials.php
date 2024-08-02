<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/off.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body style = "background-image: url(../images/main.png); background-repeat: no-repeat; background-size: cover;" >

	<form class= "form" action = "insert_officials.php" method = "POST">
          <img src="../images/logo.png" style="height: 100px; width: 100px; margin-top: 20px; margin-left: 30px;">
          <h1 style="margin-left: 143px; margin-top: -69px; font-size: 40px; font-weight: bolder;">MANAGE BRGY. OFFICIALS</h1>
         <h3 style="margin-top:10px; margin-left: 6px;">__________________________________________________</h3>

         <div style="margin-left: 10px;">
          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">POSITION : </p>
          <select class="position" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="position">
              <option value="">--Select Position--</option>
              <option value="Barangay Captain">Barangay Captain</option>
              <option value="Barangay Kagawad (Ordinance)">Barangay Kagawad (Ordinance)</option>
              <option value="Barangay Kagawad (Public Safety)">Barangay Kagawad (Public Safety)</option>
              <option value="Barangay Kagawad (Tourism)">Barangay Kagawad (Tourism)</option>
              <option value="Barangay Kagawad (Budget & Finance)">Barangay Kagawad (Budget & Finance)</option>
              <option value="Barangay Kagawad (Agriculture)">Barangay Kagawad (Agriculture)</option>
              <option value="Barangay Kagawad (Education)">Barangay Kagawad (Education)</option>
              <option value="Barangay Kagawad (Infrastracture)">Barangay Kagawad (Infrastracture)</option>
              <option value="SK Chairman">SK Chairman</option>
              <option value="Barangay Secretary">Barangay Secretary</option>
              <option value="Barangay Treasurer">Barangay Treasurer</option>
          </select>

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">NAME : </p>
          <input type="text" class="username" placeholder="Last Name, First Name, Middle Name" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="name">

          <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">CONTACT # : </p>
          <input type="text" class="number" placeholder="Contact Number" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="contact">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;">ADDRESS : </p>
          <input type="text" class="number" placeholder="Address" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="address">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;" >START TERM : </p>
          <input type="date" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="start">

           <p style="margin-bottom: 0px; font-weight: bolder; margin-left: 110px;" >END TERM : </p>
          <input type="date" style="width: 450px; margin-bottom: 10px; margin-left: 110px;" name="end">
          </div>
                   
          <div class="buttons" style="margin-left: -115px;">
          	<a href="officials.php"><input type="button" class="cancel" value="BACK" style="margin-left: 235px;" ></a>
            <input type="reset" class="clear" value="CLEAR" style="margin-left: 90px;">
            <input type="submit" class="add" value="RECORD">
          </div>
        </form>
	
</body>
</html>
