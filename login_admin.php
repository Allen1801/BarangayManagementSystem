<?php
$link = mysqli_connect("localhost", "root", "", "barangaydb");


if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

if (isset($_POST['button'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$staff = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
	$staffresult = mysqli_query($link, $staff);

	$admin = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$adminresult = mysqli_query($link, $admin);

	$numrow_staff = mysqli_num_rows($staffresult);
	$numrow_admin = mysqli_num_rows($adminresult);
	if ($numrow_staff > 0) {
		$row = mysqli_fetch_assoc($staffresult);
		$_SESSION['username'] = $row['username'];
		header("Location: admin/officials.php");
	} elseif ($numrow_admin > 0) {
		$row = mysqli_fetch_assoc($adminresult);
		$_SESSION['username'] = $row['username'];
		header("Location: admin/officials.php");
	}else  
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}


?>


<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="css/login_admin.css">
	  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
	  <link rel="icon" href="images/logo.png">
	  <title>Barangay System Management</title>
</head>

<body style = "background-image:url(images/bg.png);background-repeat: no-repeat;background-size:cover;">

  <div class="container">
  		<a href="index.php"><img src = "images/logo.png" style = "height: 100px; margin-left: 100px; "></a>
    	<h1>ADMINISTRATOR</h1>
    	<hr>

		    <form id = "login-form" method="POST">
		      <div class="form-control">
		        <input type="text" required id="mail" name = "username"> 
		        <label><b>USERNAME: </b></label>
		      </div>
		      <div class="form-control">
		        <input type="password" required id="pass" name = "password">
		        <label><b>PASSWORD: </b></label>
		      </div>
		      <div class = "bttons">
        		<button type = "submit" class="sub" name="button">LOGIN</button>
        		<button type = "reset" class = "can"  value = "Reset"> CLEAR </button>
		    </form>
  </div>

  <script>
  	const labels = document.querySelectorAll('.form-control label')

		labels.forEach(label => {
		    label.innerHTML = label.innerText
		    .split('')
		    .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
		    .join('')
		})
  </script>
  
</body>
</html>