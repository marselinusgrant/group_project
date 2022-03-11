<?php  

require 'functions.php';
//check if adding is successful
  if (isset($_POST["submitbook1"])) {




    //check if adding is successful
    if (addfeedback($_POST)>0) {
        echo "
        <script>
            alert('Feedback submitted thank you for taking the time to give us feedback');
            document.location.href = 'feedback.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
            alert('Failed to submit feedback');
            document.location.href = 'feedback.php';
        </script>
        ";
    }
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
   
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style type="text/css">

 body{
        background-image: url("img/carousel5.jpg");
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
                <li><a href="book.php">Book</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a class="on" href="feedback.php">Feedback</a></li>

            </ul>
      </div>
      </div>
    </nav>
<br><br><br><br>
<div class="wrapper2">
    <h1 class="title">FEEDBACK FORM</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <br>
       <label>1. How satisfied are you with the usability of our website ?</label><br>
        
        <span class="star-rating" required>
          <input type="radio" name="usability" value="Terrible" REQUIRED><i></i>
          <input type="radio" name="usability" value="Bad"><i></i>
          <input type="radio" name="usability" value="Good"><i></i>
          <input type="radio" name="usability" value="Great"><i></i>
          <input type="radio" name="usability" value="Excellent"><i></i>
        </span>
        <div class="clear"></div>
          <hr class="survey-hr">
          <br>
          <br>
        <label>2. How satisfied are you with the quality of information provided throughout the online booking ?</label><br>
        <span class="star-rating">
        <input type="radio" name="quality" value="Terrible" REQUIRED><i></i>
        <input type="radio" name="quality" value="Bad"><i></i>
        <input type="radio" name="quality" value="Good"><i></i>
         <input type="radio" name="quality" value="Great"><i></i>
    <input type="radio" name="quality" value="Excellent"><i></i>
  </span>
   <div class="clear"></div>
  <hr class="survey-hr">
  <label>3. Overall experience in using our website</label><br><br/>
        <div style="color:grey">
        <span style="float:left">
         POOR
        </span>
        <span style="float:right">
        BEST
        </span>
    </div>
    <span class="scale-rating">
      <label value="1">
      <input type="radio" name="satisfaction" value="1" REQUIRED>
      <label style="width:100%;"></label>
      </label>
      <label value="2">
      <input type="radio" name="satisfaction" value="2">
      <label style="width:100%;"></label>
      </label>
      <label value="3">
      <input type="radio" name="satisfaction" value="3">
      <label style="width:100%;"></label>
      </label>
      <label value="4">
      <input type="radio" name="satisfaction" value="4">
      <label style="width:100%;"></label>
      </label>
      <label value="5">
      <input type="radio" name="satisfaction" value="5">
      <label style="width:100%;"></label>
      </label>
      <label value="6">
      <input type="radio" name="satisfaction" value="6">
      <label style="width:100%;"></label>
      </label>
      <label value="7">
      <input type="radio" name="satisfaction" value="7">
      <label style="width:100%;"></label>
      </label>
      <label value="8">
      <input type="radio" name="satisfaction" value="8">
      <label style="width:100%;"></label>
      </label>
      <label value="9">
      <input type="radio" name="satisfaction" value="9">
      <label style="width:100%;"></label>
      </label>
      <label value="10">
      <input type="radio" name="satisfaction" value="10">
      <label style="width:100%;"></label>
      </label>
    </span>
    <div class="clear"></div>
      <hr class="survey-hr">
      <br>

  <label for="1"> 4. Any Other suggestions (optional):</label><br/><br/>
  <textarea cols="75" name="suggestions" rows="7" style="100%" class="inputfill"></textarea><br>
  <br>
    <div class="clear"></div>


        
        <button type="submit" name="submitbook1" class="addfeedback">Submit</button>

    </form>
    </div>
    <br><br><br><br><br><br><br><br>
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