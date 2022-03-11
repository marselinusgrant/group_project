<?php  
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}

require 'functions.php';
$appointment = query("SELECT * FROM appointment ORDER BY 'date' DESC");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Book</title>
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
                <li><a href="admin.php">Home</a></li>
                <li><a href="index.php">View</a></li>
                <li><a class="on" href="adminbook.php">Book</a></li>
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
<h1 class="title">LIST OF APPOINTMENTS</h1>
<br><br>
<div id="container">
<table>
    
    <tr>
        <th>No</th>
        <th class="action">Action</th>
        <th>Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Phone</th>
        <th>Booked Parts</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($appointment as $row) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td class="action">
            <a class="deleterow" href="deletebook.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
        <td><?php echo $row["customer_name"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
        <td><?php echo $row["time"]; ?></td>
        <td><?php echo $row["phone_number"]; ?></td>
        <td><?php echo $row["booked_parts"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>

</table>
</div>
<script src="js/jscript.js"></script>

</body>
</html>