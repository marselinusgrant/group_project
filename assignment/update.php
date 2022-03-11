<?php 
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}
require 'functions.php';

//get data from url
$id = $_GET["id"];

//query data from id

$product = query("SELECT * FROM products WHERE id = $id;")[0];

//check if submit is pressed

if (isset($_POST["submit"])) {
	


	//check if data updated successfully
	if (update($_POST)>0) {
		echo "
		<script>
			alert('Data updated successfully');
			document.location.href = 'admin.php';
		</script>
		";
	}
	else{
		echo "
		<script>
			alert('Failed to update data');
			document.location.href = 'admin.php';
		</script>
		";
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
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
	<h1 class="title">Update Product</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $product["id"] ?>">
		<input type="hidden" name="oldimage" value="<?php echo $product["image"] ?>">
			<div class="inputfield">
				<input type="text" name="product_name" class="inputfill" id="product_name"
				 required value="<?php echo $product["product_name"]; ?>">
			</div>
			<div class="inputfield">
				<input type="number" name="quantity" class="inputfill" id="quantity" min="0"
				required value="<?php echo $product["quantity"]; ?>">
			</div>
			<div class="inputfield">
				<input type="number" name="price" class="inputfill" id="price" min="0" step="0.01"
				required value="<?php echo $product["price"]; ?>">
			</div>
			<div class="inputfield">
				<select name="category" id="category" class="inputfill" 
				required value= "<?php echo $product["category"]; ?>">
					<optgroup label="Car Type">
					<option value="Sedan" <?php if ($product["category"] == "Sedan"){ echo "selected";} ?>>Sedan</option>
					<option value="SUV" <?php if ($product["category"] == "SUV") { echo "selected";} ?>>SUV</option>
					<option value="Sport" <?php if ($product["category"]=="Sport") { echo "selected";} ?>>Sport</option>
					<option value="Electric" <?php if ($product["category"] =="Electric") { echo "selected";} ?>>Electric</option>
					</optgroup>
				</select>

			</div>
			<div class="inputfield">
				<label for="image" class="imagetext">Image</label>
				<br>
				<img src="img/<?php echo $product['image']; ?>" width="40">
				<br>
				<input type="file" name="image" id="image">
			</div>
				<button type="submit" name="submit" class="updateproduct">Update</button>
			
	</form>
	</div>
</body>
</html>