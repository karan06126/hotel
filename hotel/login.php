<!DOCTYPE html>
<html lang="en">
<head>

  <style>
  body{
    background-image: url('../hotel/img/sushi.png');
  }
  </style>

  <meta charset="UTF-8">
   <script>
function validateform(){
  var name=document.register.email.value;
  if (name==null || name==""){
  alert("Email can't be blank");
  return false;
}
  var password=document.register.psw.value;
  if (password==null || password==""){
  alert("password cannot be left blank");
  return false;
}
  }
</script>
<link rel = "stylesheet" type= "text/css" href="style1.css">

  <title>Hotel Mangement</title>
</head>
<body>
  <header>
    <div class="title1">
      <span>Hotel Mangement</span>
    </div>
    <nav class="navright">
       <a class="navigation-item" href="register.php">Register</a>

    </nav>
  </header>
  <aside>


   <?php
    session_start();


     if (isset($_POST['login']))
     {
  $con = mysqli_connect('127.0.0.1','root','');

   if(!$con)
      {
        echo 'Not Connected To Server';

      }
   if(!mysqli_select_db($con,'hotel'))
      {
          echo 'Database Not Selected';
      }

   $Email = $_POST['email'];
   $Pass  = $_POST['psw'];
   $cookie_name = "user";
   $cookie_value = $Email;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


   $check = "select * from register where Email = '$Email'";

 $result =  mysqli_query($con,$check);
 $num =  mysqli_num_rows($result);
 if($num ==1)
   {
      $row = mysqli_fetch_array($result);
      if($row["password"]==$Pass){
      $_SESSION["email"] = $row["email"];
      $_SESSION["userId"] = $row["id"];
       header('Refresh: 0; URL=http://localhost:8080/hotel/index.php');
     }

      else {


           echo '<h1 style="color:red;margin-left:20px;">Wrong Details Entered, Enter Again</h1>';
         }

   }

 else {


           echo '<h1 style="color:red;margin-left:20px;">Wrong Details Entered, Enter Again</h1>';
        }
    }

   ?>


      <form  name = "register" method = "post" onsubmit = "return validateform()">
  <div class="container">
    <br>

    <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <hr>

    <button type="submit" name = "login" class="registerbtn">Login</button>
  </div>


</form>


  </aside>
</body>
</html>
