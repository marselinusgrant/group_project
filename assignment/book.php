<?php  

require 'functions.php';
//check if adding is successful
  if (isset($_POST["submitbook"])) {
    
  //check if adding is successful
    if (addbook($_POST)>0) {
        echo "
        <script>
            alert('Appointment Submitted');
            document.location.href = 'book.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
            alert('Failed to submit appointment');
            document.location.href = 'book.php';
        </script>
        ";
    }
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Book Appointment</title>
   
<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">

img{
  width: 100%;
  height: auto;
}
</style>
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
                      <li><a href="electric.php">Electric</a></li>
                  </ul>
            </li>
            <li><a class="on" href="book.php">Book</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </div>
</div>
</nav>
<img src="img/carousel3.jpg">
<div class="wrapper1">
    <h1 class="title">BOOK APPOINTMENT</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="inputfield">
                <input type="text" name="customer_name" id="customer_name" placeholder="Name" class="inputfill" required>
        </div>
        <div class="inputfield">
                <input type="date" name="date" id="date" placeholder="Date" class="inputfill" required>
        </div>
        <div class="inputfield">
                <select name="time" id="time"  required="" class="inputfill">
                    <optgroup label="Select Time">
                    <option value="10:00:00">10:00</option>
                    <option value="11:00:00">11:00</option>
                    <option value="14:00:00">14:00</option>
                    <option value="15:00:00">15:00</option>
                    <option value="16:00:00">16:00</option>
                    <option value="17:00:00">17:00</option>
                    <option value="18:00:00">18:00</option>
                    </optgroup>
                </select>
        </div>
        <div class="inputfield">
                <input type="number" name="phone_number" id="phone_number" placeholder="Phone Number" class="inputfill" required>
        </div>  
         <div class="inputfield">
                <input type="text" name="booked_parts" id="booked_parts" placeholder="Booked Parts" class="inputfill" required>
        </div>  
        <button type="submit" name="submitbook" class="addbook">Submit</button>

    </form>
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