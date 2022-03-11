<?php
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}
require 'functions.php';


$id = $_GET["id"];
if (deletefeedback($id)>0) {
		echo "
		<script>
			alert('Feedback deleted successfully');
			document.location.href = 'adminfeedback.php';
		</script>
		";

}else{
	echo "
		<script>
			alert('Failed to delete feedback');
			document.location.href = 'adminfeedback.php';
		</script>
		";
}


 ?>
