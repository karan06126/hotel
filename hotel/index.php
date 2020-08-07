<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Hotel Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="/hotel/css/style.css">
     <link rel="stylesheet" href="login.html">
     <link rel="stylesheet" href="book.html">
     <link rel="stylesheet" href="restaurant.html">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="http://127.0.0.1:3000/Bootstrap%204%20Site%20Files/#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
    <?php
    if(!isset($_SESSION['email'])){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="overview.php">Overview</a>
      <?php
    }else{
      ?>
      <li class="nav-item">
        <a class="nav-link" href="book.php">Booking</a>
      </li>
        </ul>
      <li class="nav-item">
        <a class="float-right " href="logout.php">Logout</a>
      </li>
      <?php
    }
     ?>




          </div>
        </nav>

        <!--- Image Slider -->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="view">
                <img class="d-block w-100" src="/hotel/img/image-5.jpg" height="600" width="1800"
                  alt="First slide">
                <div class="mask rgba-black-light"></div>
              </div>
              <div class="carousel-caption">
                <h1 class="h3-responsive"></h1>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="/hotel/img/slider2.jpg" height="600" width="1800"
                  alt="Second slide">
                <div class="mask rgba-black-strong"></div>
              </div>
              <div class="carousel-caption">
                <h1 class="h3-responsive"></h1>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" src="/hotel/img/slider3.jpg" height="600" width="1800"
                  alt="Third slide">
                <div class="mask rgba-black-slight"></div>
              </div>
              <div class="carousel-caption">
                <h1 class="h3-responsive"></h1>
                <p></p>
              </div>
            </div>
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->





        <!--- Jumbotron -->
  <div class="container-fluid">
  <div class="row jumbotron">
  	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
  		<p class="lead"></p>
  	</div>
  	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
  		<a href="http://127.0.0.1:3000/Bootstrap%204%20Site%20Files/#"><button type="button" class="btn btn-outline-secondary btn-lg">About Us</button></a>
  	</div>
    </div>
  </div>

  <div class="container-fluid padding">
  	<div class="row welcome text-center">
  		<div class="col-12">
  			<div class="ab">
  			<h1 class="display-4">Hotel Management</h1>
  		</div>
  		</div>
  		<hr>
  		<div class="col-12" style="text-align:justify">
  			<div class="tr">
  			<p>Hotel Management is an area of study that covers a wide range of topics concerned with the operational aspects of hoteliery.
          Educational courses in hotel management are varied and cover topics as wide ranging as marketing, eco-tourism,
          leisure, business administration and management.
        Early Check-in, Free Breakfast & Wi-Fi Available. Book on MakeMyTrip Now! Lowest Prices, Multiple Hotel Options,
        Best-in-class Booking Experience. Pay at Checkout. MMT Value Plus Hotels. Best Price Guaranteed. 24*7 Customer Service.
         Amenities: WiFi, Pool, Breakfast.</p>
  		</div>
  	</div>
  	</div>
  </div>


  <!--- Three Column Section -->
       <section class="about-section bg-grey bd-bottom padding">
  <div class="container-fluid padding" >
  	<div class="row text-center padding">
  		<div class="col-xs-12 col-sm-6 col-md-4" >
  			<div class="projectinner">
  			<img src="https://www.vispl.co.in/img/01/32.j" alt="">
  		<h4>PMKVY</h4>
  			<p class="lead">Early Check-in, Free Breakfast & Wi-Fi Available. Book on MakeMyTrip Now! Lowest Prices, Multiple Hotel Options,
        Best-in-class Booking Experience. Pay at Checkout. MMT Value Plus Hotels. Best Price Guaranteed. 24*7 Customer Service.
         Amenities: WiFi, Pool, Breakfast. </p>
  		</div>
  	</div>
  		<div class="col-xs-12 col-sm-6 col-md-4" >
  			<div class="project1inner">
  			<img src="https://www.vispl.co.in/img/08/ddugky.j" alt="">
  			<h4>DDUGKY</h4>
  			<p class="lead">Early Check-in, Free Breakfast & Wi-Fi Available. Book on MakeMyTrip Now! Lowest Prices, Multiple Hotel Options,
        Best-in-class Booking Experience. Pay at Checkout. MMT Value Plus Hotels. Best Price Guaranteed. 24*7 Customer Service.
         Amenities: WiFi, Pool, Breakfast.</p>
  		</div>
  	</div>
  		<div class=" col-sm-12 col-md-4">
  			<div class="project2inner">
  			<img src="https://www.vispl.co.in/img/01/rpl.j" alt="">
  			<h4>RPL</h4>
  			<p class="lead">Early Check-in, Free Breakfast & Wi-Fi Available. Book on MakeMyTrip Now! Lowest Prices, Multiple Hotel Options,
        Best-in-class Booking Experience. Pay at Checkout. MMT Value Plus Hotels. Best Price Guaranteed. 24*7 Customer Service.
         Amenities: WiFi, Pool, Breakfast.</p>
  		</div>
  	</div>
  	</div>

  </div>
  	<hr class="my-4">
  </section><br/><br/>

  <hr class="my-4">

  <!--- Fixed background -->
  <figure>
  	<div class="fixed-wrap">
  		<div id="fixed">
  		</div>

  	</div>
  </figure>








  <!--- Footer -->
  <footer>
  	<div class="container-fluid padding">
  		<div class="row text-left">
  			<div class="col-md-4">
  				<hr class="light">
  				<h5>Portallinks</h5>
  				<hr class="light">
  			<a href="http://127.0.0.1:3000/Bootstrap%204%20Site%20Files/#">	<p>It admin</p></a>
  				<p>Hotels</p>
  				<p>Airport</p>
  				<p>Restaurants</p>
  				<p>Utility Management</p>
  				<p>Online Evaluation Admin</p>
  				<p>E joining Admin</p>

  			</div>
  			<div class="col-md-4">
  				<hr class="light">
  				<h5>Cities</h5>
  				<hr class="light">
  				<p>Chennai</p>
  				<p>Banglore</p>
  				<p>Vadodara</p>
  				<p>Amritsar</p>
  				<p>Patna</p>
  				<p>Noida</p>
  				<p>Terms&amp;Conditions</p>

  			</div>
  			<div class="col-md-4">
  				<h2>Hotel</h2>
  				<hr class="light">
  				<p>A-11,Sector-67,Noida</p>
  				<p>UP-201301</p>
  				<p>Telephone:+91 - 8802003333</p>
  				<p>karan23@gmail.com</p>
          <!--- Connect -->
  				<div class="container-fluid padding">
  					<div class="row text-center padding">
  						<div class="col-12">
  							<h2><u>Connect</u></h2>
  						</div>
  						<div class="col-12 social padding">
  							<a href="#"><i class="fab fa-facebook"></i></a>
  								<a href="#"><i class="fab fa-twitter"></i></a>
  									<a href="#"><i class="fab fa-linkedin"></i></a>
  										<a href="#"><i class="fab fa-instagram"></i></a>
  											<a href="#"><i class="fab fa-youtube"></i></a>

  						</div>
  					</div>
  				</div>

  			</div>
  		</div>

  			</div>
  		</div>

  	</div>
  </footer>

  </body>
</html>
