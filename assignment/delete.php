<?php
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
} 
require 'functions.php';


$id = $_GET["id"];
if (delete($id)>0) {
		echo "
		<script>
			alert('Products deleted successfully');
			document.location.href = 'admin.php';
		</script>
		";
	
}else{
	echo "
		<script>
			alert('Failed to delete products');
			document.location.href = 'admin.php';
		</script>
		";
}

 ?>