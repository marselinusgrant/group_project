<?php 
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}

require 'functions.php';


//check if submit button is pressed

if (isset($_POST["submit"])) {
	
	


	//check if adding is successful
	if (add($_POST)>0) {
		echo "
		<script>
			alert('Products added successfully');
			document.location.href = 'admin.php';
		</script>
		";
	}
	else{
		echo "
		<script>
			alert('Failed to add products');
			document.location.href = 'admin.php';
		</script>
		";
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
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
	<h1 class="title">Add Product</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="inputfield">
				<input type="text" name="product_name" id="product_name" placeholder="Product Name" class="inputfill" required>
		</div>
		<div class="inputfield">
				<input type="number" name="quantity" id="quantity" placeholder="Quantity" class="inputfill" min="0" required>
		</div>
		<div class="inputfield">
				<input type="number" name="price" id="price" placeholder="Price" class="inputfill" min="0" step="0.01" required>
		</div>	
		<div class="inputfield">
				<select name="category" id="category"  required="" class="inputfill">
					<optgroup label="Car Type">
					<option value="Sedan">Sedan</option>
					<option value="SUV">SUV</option>
					<option value="Sport">Sport</option>
					<option value="Electric">Electric</option>
					</optgroup>
				</select>
		</div>	
		<div class="inputfield">
			<label for="image" class="imagetext">Image</label>
				<input type="file" name="image" id="image">
				
		</div>	
	
		<button type="submit" name="submit" class="addproduct">ADD</button>

	</form>
	</div>
</body>
</html>