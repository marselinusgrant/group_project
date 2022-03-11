<?php 

$conn = mysqli_connect("localhost","root","", "mycar");

function query($query){
	global $conn;
	$result =mysqli_query($conn, $query);
	$rows= [];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function add($data){

	//get data from element in a form
	global $conn;
	$product_name = htmlspecialchars($data["product_name"]);
	$quantity = htmlspecialchars($data["quantity"]);
	$price = htmlspecialchars($data["price"]);
	$category = htmlspecialchars($data["category"]);

	// upload image
	$image = upload();
	if (!$image) {
		return false;
	}

	//query insert data
	$query = "INSERT INTO products
	VALUES
	('', '$product_name','$quantity','$price','$category','$image')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function upload(){
	$filename = $_FILES ['image']['name'];
	$size = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	// if no image
	if ($error ===4) {
		echo "<script>
		alert('choose an image');
		</script>";
		return false;
	}

	// check if it is an image
	$validimageextension = ['jpg', 'jpeg', 'png'];
	$imageextension = explode('.', $filename);
	$imageextension = strtolower(end($imageextension));
	if (!in_array($imageextension, $validimageextension)) {
		echo "<script>
		alert('Not an image');
		</script>";
		return false;
	}

	//if size is too big
	if ($size > 100000000) {
		echo "<script>
		alert('File is too big');
		</script>";
		return false;
	}



	
	//generate new file name to prevent error if there are files with the same name
	$newfilename = uniqid();
	$newfilename .= '.';
	$newfilename .= $imageextension; 

	move_uploaded_file($tmpName, 'img/'. $newfilename);
	return $newfilename;


}

function delete($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM products WHERE id = $id");
	return mysqli_affected_rows($conn);

}

function update($data){
	global $conn;

	$id = $data["id"];
	$product_name = htmlspecialchars($data["product_name"]);
	$quantity = htmlspecialchars($data["quantity"]);
	$price = htmlspecialchars($data["price"]);
	$category = htmlspecialchars($data["category"]);
	$oldimage = htmlspecialchars($data["oldimage"]);

	//cek if user upload new image
	if ($_FILES['image']['error'] ===4) {
		$image = $oldimage;
	}
	else{
	$image = upload();

	}

	$query = "UPDATE products
	SET product_name = '$product_name', quantity = '$quantity', price = '$price',
	category = '$category', image = '$image'
	WHERE id = '$id';
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function search ($keyword){
	$query = "SELECT * FROM products 
	WHERE product_name LIKE '%$keyword%'OR 
	category LIKE '%$keyword%'
	 ";
	return query($query);
}

function signup ($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	//check is username has been used
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('username is not available')
		</script>";

		return false;
	}
	if ($password=='') {
		echo "<script>
		alert('please fill in empty field');
		</script>";

		return false;

	}



	//check password confirmation
	if ($password !== $password2) {
		echo "<script>
		alert('wrong password confirmation');
		</script>";

		return false;

	}

	//password encryption
	$password = password_hash($password, PASSWORD_DEFAULT);

	//add new user to database
	mysqli_query($conn, "INSERT INTO user VALUES('','$username', '$password')");

	return mysqli_affected_rows($conn);


}

function addbook($data){

	//get data from element in a form
	global $conn;
	$customer_name = htmlspecialchars($data["customer_name"]);
	$date = htmlspecialchars($data["date"]);
	$time = htmlspecialchars($data["time"]);
	$phone_number = htmlspecialchars($data["phone_number"]);
	$booked_parts = htmlspecialchars($data["booked_parts"]);

	
	

	//query insert data
	$query = "INSERT INTO appointment
	VALUES
	('', '$customer_name','$date','$time','$phone_number','$booked_parts')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function deletebook($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM appointment WHERE id = $id");
	return mysqli_affected_rows($conn);

}
function addfeedback($data){

	//get data from element in a form
global $conn;
$usability = htmlspecialchars($data["usability"]);
$quality = htmlspecialchars($data["quality"]);
$satisfaction = htmlspecialchars($data["satisfaction"]);
$suggestions = htmlspecialchars($data["suggestions"]);

	//query insert data
	$query = "INSERT INTO feedback
	VALUES
	('', '$usability','$quality','$satisfaction','$suggestions')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function deletefeedback($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM feedback WHERE id = $id");
	return mysqli_affected_rows($conn);

}

 ?>

