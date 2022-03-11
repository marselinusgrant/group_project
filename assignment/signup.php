<?php 

session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}


require 'functions.php';
if (isset($_POST["register"])) {
	
	if (signup($_POST) > 0) {
		 header("Location: admin.php");
	}else{
		echo mysqli_error($conn);
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">

	<style type="text/css">
		body{
			background: #ffc700;
		}
		
		
	</style>
</head>

<body>
<div class="wrapper">
 <a href="admin.php">Back</a>
<h1 class="title">CREATE NEW ACCOUNT</h1>
<form action="" method="post">
	<div class="inputfield">
		<input type="text" name="username" id="username" placeholder="Username" class="inputfill">
	</div>
	<div class="inputfield">
		<input type="password" name="password" id="password" placeholder="Password" class="inputfill">
	</div>	
	<div class="inputfield">
		<input type="password" name="password2" id="password2" placeholder="Confirm Password" class="inputfill">
	</div>
	<button type="submit" name="register" class="register">REGISTER</button>
		
</form>
</div>
</body>
</html>