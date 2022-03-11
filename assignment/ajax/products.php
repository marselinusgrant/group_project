<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM products 
	WHERE product_name LIKE '%$keyword%'OR 
	category LIKE '%$keyword%'
	 ";         
	                    
$products = query($query);


?>
<table>
	<tr>
		<th>No</th>
		<th>Action</th>
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
		<td>
			<a class="updaterow" href="update.php?id=<?php echo $row["id"] ?>">Update</a> |
			<a class="deleterow" href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('are you sure?');">Delete</a>
		</td>
		<td><img src="img/<?php echo $row["image"]; ?>" width="50px"></td>
		<td><?php echo $row["product_name"]; ?></td>
		<td><?php echo $row["quantity"]; ?></td>
		<td><?php echo 'RM '.$row["price"]; ?></td>
		<td><?php echo $row["category"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>