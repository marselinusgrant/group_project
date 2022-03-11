<?php
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
} 
require 'functions.php';


$id = $_GET["id"];
if (deletebook($id)>0) {
		echo "
		<script>
			alert('Appointment deleted successfully');
			document.location.href = 'adminbook.php';
		</script>
		";
	
}else{
	echo "
		<script>
			alert('Failed to delete appointment');
			document.location.href = 'adminbook.php';
		</script>
		";
}


 ?>