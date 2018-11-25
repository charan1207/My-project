<?php
session_start();
if (isset($_SESSION['email'])) {
  header('location:sellerdashboard.php');
}
if (isset($_GET['logout'])) {
  unset($_SESSION['email']);
  session_destroy();
  header('location:home.php');
}

if (isset($_SESSION['buyeremail'])) {
  header('location:buyerdashboard.php');
}
if (isset($_GET['logout'])) {
  unset($_SESSION['buyeremail']);
  session_destroy();
  header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Fruit Market</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Home.js"></script>
  <link rel="stylesheet" type="text/css" href="Home.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           
      </button>
      <a class="navbar-brand" href="#myPage">FRUIT MARKET</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">RETAILER
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="SellerReg.html">REGISTER</a></li>
            <li><a href="sellerlogin.php">LOGIN</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOPPER
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="BuyerReg.html">REGISTER</a></li>
            <li><a href="Buyerlogin.php">LOGIN</a></li> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/4th.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="img/5th.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="img/6th.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>THE ONLINE FRUIT MARKET</h3>
  <p><em></em></p>
  <p>The fruit is delicious and nutritious. It grows on plants and trees in the gardens. Fruits like mangoes, jackfruits, leeches, apples, pomegranates, oranges, grapes, papaya, guavas, etc. are consumed with relish and pleasure by us. They are available in different seasons of the year. Oranges, apples, grapes, pomegranates etc. are generally given to the ailing patients to regain health. These fruits are known to be extremely nutritious. Fruit juice gives strength, and not unnecessary fats to the human body. So fruits are being recommended as a part of diet by the physicians for the children and the sick patients.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>50% offer</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/apple_2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
     
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>25% offer</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/cherry.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>35% offer</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/guava.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; <strong>charan</strong></p> 
</footer>

</body>
</html>
