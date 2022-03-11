<?php  

require 'functions.php';

$products = query("SELECT * FROM products WHERE quantity > 0 && category = 'Electric';");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Electric</title>
   
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
 <nav>
    <a href="index.php"><img src="img/logo.png"</a>
      <div class= "nav-links">
      
      <div class="dropdown">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="">Products</a>
                    <ul>
                        <li><a href="sedan.php">Sedan</a></li>
                        <li><a href="suv.php">SUV</a></li>
                        <li><a href="sport.php">Sport</a></li>
                        <li><a class="on" href="electric.php">Electric</a></li>
                    </ul>
                </li>
                <li><a href="book.php">Book</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="feedback.php">Feedback</a></li>

            </ul>
      </div>
      </div>
    
        </nav>
    <div id="container">
    <?php foreach($products as $row) : ?>
        <div class="column">
            <div class="card">
                <img class="cardimage" src="img/<?php echo $row["image"]; ?>" width="175px"/>
                <h3><?php echo $row["product_name"]; ?></h3>
                <h4><?php echo 'RM '.number_format($row["price"], 2); ?></h4>
                <h4><?php echo 'In Stock: '. number_format($row["quantity"]); ?></h4>
            </div>
            <br><br>
        </div>
	<?php endforeach; ?>
</div>
 <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
              <h4>QUICK LINKS</h4>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="book.php">Book</a></li>
                  <li><a href="aboutUs.php">About Us</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  <li><a href="admin.php">Admin</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>PRODUCTS</h4>
              <ul>
                  <li><a href="sedan.php">Sedan</a></li>
                  <li><a href="suv.php">SUV</a></li>
                  <li><a href="sport.php">Sport</a></li>
                  <li><a href="electric.php">Electric</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>CONTACT US</h4>
              <ul>
                  <li>+6012345678</li>
                  <li>Jalan Taylor's No 1, Subang Jaya</a></li>
              </ul>
          </div>
          </div>
      </div>
  </footer>
</body>
</html>