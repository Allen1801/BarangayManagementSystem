<?php
$link = mysqli_connect("localhost", "root", "", "barangaydb");


if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

if (isset($_POST['button'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM zone WHERE username='$username' AND password='$password'";
	$result = mysqli_query($link, $sql);
	$numrow_zone = mysqli_num_rows($result);
	if ($numrow_zone > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: zone leader/zone_clear.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="css/login_zone.css">
	  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
	  <link rel="icon" href="images/logo.png">
	  <title>Barangay System Management</title>
</head>

<body style = "background-image:url(images/bg.png);background-repeat: no-repeat;background-size:cover;">

  <div class="container">
  		<a href="index.php"><img src = "images/logo.png" style = "height: 100px; margin-left: 100px; "></a>
    	<h1>ZONE LEADER</h1>
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
        		<a href="zone leader/zone_clear.php" style="text-decoration: none;"> <button type = "button" class="sub">LOGIN</button></a>
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

		loginButton.addEventListener("click", (e) => {
		    e.preventDefault();
		    const username = loginForm.username.value;
		    const password = loginForm.password.value;

		    if (username === "customer" && password === "dejabrew") {
		        alert("You have successfully logged in.");
		        window.location.href="feedbacks.html";
		    } else {
		        loginErrorMsg.style.opacity = 1;
		    }
		})

  </script>
</body>
</html>