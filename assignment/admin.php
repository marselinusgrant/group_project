<?php  
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}

require 'functions.php';

$products = query("SELECT * FROM products;");

//tombol is pressed
if (isset($_POST["search"])) {
	$products = search($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<style type="text/css">
body{
	background: #ffc700;
}
</style>

</head>
<body>
<nav class="navadmin">
    <label class="hname">Admin Dashboard</label>
      <div class= "nav-links">
      
      <div class="dropdown">
           <ul>
                <li><a class="on" href="admin.php">Home</a></li>
                <li><a href="index.php">View</a></li>
                <li><a href="adminbook.php">Book</a></li>
                <li><a href="adminfeedback.php">Feedback</a></li>
                 <li>
                    <a href="">More</a>
                    <ul>
                        <li><a href="signup.php" class="signup">New Admin</a></li>
                        <li><a href="logout.php" class="logout">Logout</a></li>
                    </ul>
      </div>
      </div>
    </nav>

<div class="wrappertable">
<h1 class="title">LIST OF PRODUCTS</h1>
<a href="add.php" class="add">Add Product</a>
<br><br>

<form action="" method="post" class="form-search">

	<input type="text" name="keyword" size="40" autofocus placeholder="Input search keywords.." autocomplete="off" id="keyword">
	<!--<button type="submit" name="search" id="searchbutton">Search!</button>-->
	
</form>

<div id="container">
<table>
	
	<tr>
		<th>No</th>
		<th class="action">Action</th>
		<th>Image</th>
		<th>Name</th>
		<th>Qty</th>
		<th>Price</th>
		<th>Category</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach($products as $row) : ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td class="action">
			<a class="updaterow" href="update.php?id=<?php echo $row["id"] ?>">Update</a> |
			<a class="deleterow" href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
		</td>
		<td><img src="img/<?php echo $row["image"]; ?>" width="50px"></td>
		<td><?php echo $row["product_name"]; ?></td>
		<td><?php echo $row["quantity"]; ?></td>
		<td><?php echo 'RM '. $row["price"]; ?></td>
		<td><?php echo $row["category"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>
</div>

<script src="js/jscript.js"></script>

</body>
</html>