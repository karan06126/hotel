<?php
session_start();
if(!isset($_SESSION['email'])){
  header("location: /hotel/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
 function validateform(){
   var name=document.register.email.value;
   if (name==null || name==""){
   alert("Email can't be blank");
   return false;
 }
}
</script>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="index.html">
        <style>
        body{
          background-image: url('../hotel/img/sushi.png');
        }
        </style>
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
              <li class="nav-item">
                <a class="nav-link" href="book.php">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="overview.php">Overview</a>
            </ul>
          </div>
        </nav><br>

        <div class="container-fluid">
    <form action="payment.php" method="post" onsubmit = "return validateform()">
		 <label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    			<input id="name" name="name" placeholder="Full Name" required="" tabindex="1" type="text"><br><br>

		<label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    			<input id="email" name="email" placeholder="Email" required="" type="email"><br><br>

		<label for="mobile">Mobile No:</label> &nbsp;
            		<input id="phone" name="mobile" placeholder="Number" required="" type="text"> <br><br>

		<div style="position:relative;height:80px;">

		<label for="in">Check in:</label> &nbsp;&nbsp;&nbsp;&nbsp;
            		<input type="date" name="in" data-date-inline-picker="true" /> <br><br>

		<label for="out">Check out:</label> &nbsp;&nbsp;
            		<input type="date" name="out" data-date-inline-picker="true" /> <br><br>

		</div><br><br>
		Room Type:
			<select name="room">
				<option value="A/C">A/C</option>
				<option value="Non-A/C">Non-A/C</option>
			</select>
			<select  name="type">
				<option value="single">Single</option>
				<option value="double">Double</option>
				<option value="three">Three</option>
			</select>
		<br/><br/><br/>
<a href="payment.php"><input type="submit" name="submit" value="Book"/></a>
<input type="reset" name="reset" value="Reset" />
</form>
</div>

  </body>
</html>
