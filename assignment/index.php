<?php  

require 'functions.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
   
   <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<section class="header">
<nav>
  <a href="index.php"><img src="img/logo.png"</a>
      <div class= "nav-links">
      
      <div class="dropdown">
            <ul>
                <li><a class="on" href="index.php">Home</a></li>
                <li>
                    <a href="">Products</a>
                    <ul>
                        <li><a href="sedan.php">Sedan</a></li>
                        <li><a href="suv.php">SUV</a></li>
                        <li><a href="sport.php">Sport</a></li>
                        <li><a href="electric.php">Electric</a></li>
                    </ul>
                </li>
                <li><a href="book.php">Book</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="feedback.php">Feedback</a></li>

            </ul>
      </div>
      </div>
    
        </nav>
    <div class="text-box">
    <h1>Drive smoothly and safely with our service</h1><br>
    <p>Mycar provides the best service for your car!</p>
    <a href ="aboutUs.php" class="visit_btn">Visit us to know more</a>
        
    </div>

  </section>
<!-----Services-------->    
    
    
<section class="service"> 
  <h1>Services We Offer</h1>
     <p>A better way forward </p>
    
      <div class="row">
      <div class="service-col">
      <h3>Services</h3>
      <p>At Mycar.com we will provide you with the best service. 
      A full detailed summary of the changes will be sent to your number. Want to upgrade, fix, service your car? We are here for you!  </p>
      </div>
      <div class="service-col">
      <h3>Spare Parts</h3>
      <p>We want you to feel safe while driving! Our spare parts are all from the factory and we provide 1 year of international warranty.  </p>
      </div>
      <div class="service-col">
      <h3>Custom Parts</h3>
      <p>Do you require custom parts? We have a team to assist you from designing til the development stage you will be able to participate and keep track of every process.</p>
      </div>
      </div>
    
    </section>
    
    
    <!-----Car Parts--------> 
    
    <section class="car-parts">
      <h1>Car Parts</h1>
      <p>Do you require custom parts? We have a team to assist you from designing til the development stage you will be able to participate and keep track of every process.</p>
      
    <div class="row">
      <div class="car-parts-col">
      <img src=  "img/sedan_hoover.jpg">
        <div class="layer">
        <h3>Sedan</h3>
        </div>
      </div>
      <div class="car-parts-col">
      <img src=   "img/suv_hoover.jpg">
        <div class="layer">
        <h3>SUV</h3>
        </div>
      </div>
      <div class="car-parts-col">
      <img src=   "img/super_hoover.jpg">
        <div class="layer">
        <h3>Super Car</h3>
        </div>
      </div>
      <div class="car-parts-col">
      <img src=   "img/electric_hoover.jpg">
        <div class="layer">
        <h3>Electric</h3>
        </div>
      </div>
      
      </div>
    <br><br><br><br><br><br>
    </section>
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