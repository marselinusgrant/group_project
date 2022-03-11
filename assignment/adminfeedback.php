<?php  
session_start();

if (!isset($_SESSION["login"])) {
	 header("Location: login.php");
	 exit;
}

require 'functions.php';
$feedback = query("SELECT * FROM feedback");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Feedback</title>
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
                <li><a href="adminbook.php">Book</a></li>
                <li><a class="on" href="adminfeedback.php">Feedback</a></li>
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
<h1 class="title">LIST OF FEEDBACK</h1>
<br><br>
<div id="container">
<table>

    <tr>
        <th>No</th>
        <th class="action">Action</th>
        <th>Usability</th>
        <th>Quality</th>
        <th>Satisfaction</th>
        <th>Suggestions</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($feedback as $row) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td class="action">
            <a class="deleterow" href="deletefeedback.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
        <td><?php echo $row["usability"]; ?></td>
        <td><?php echo $row["quality"]; ?></td>
        <td><?php echo $row["satisfaction"]; ?></td>
        <td><?php echo $row["suggestions"]; ?></td>

    </tr>
    <?php $i++; ?>
<?php endforeach; ?>

</table>
</div>



<script src="js/jscript.js"></script>

</body>
</html>