<?php 
session_start();
require 'functions.php';
//check cookie
if (isset($_COOKIE['id'])&&isset($_COOKIE['key'])) {
	$id=$_COOKIE['id'];
	$key=$_COOKIE['key'];
	
	//take username from id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id" );
	$row = mysqli_fetch_assoc($result);

	//check cookie and username
	if ($key===hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}

}


if (isset($_COOKIE['login'])){
	if ($_COOKIE['login']== 'true') {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION["login"])) {
	header("Location:admin.php");
	exit;
}



if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );


	//chek username
	if (mysqli_num_rows($result)===1) {
		//chek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			//set session
			$_SESSION["login"] = true;

			//chek remember me
			if (isset($_POST['remember'])) {
				//make cookie
				setcookie('id', $row['id'],time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: admin.php");
			exit;
		}
	}
	$error = true;

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
 <a href="index.php">Back</a>
<h1 class="title">ADMIN LOGIN</h1>

<?php if (isset($error)) : ?>
	<p style="color: red; margin-bottom: 10px; text-align: center;">wrong username or password</p>
<?php endif; ?>

<form action="" method="post">
	<div class="inputfield">
			<input type="text" name="username" id="username" placeholder="Username" class="inputfill">
	</div>
	<div class="inputfield">
			<input type="password" name="password" id="password" placeholder="Password" class="inputfill">
	</div>
	<div class="inputfield">
			<input type="checkbox" name="remember" id=remember class="tickrememberme">
			<label for="remember" class="rememberme">Remember me</label>
	</div>
	<button type="submit" name="login" class="login">LOGIN</button>
		
</form>
</div>
</body>
</html>