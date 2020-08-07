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
  var name=document.register.name.value;
  if (name==null || name==""){
  alert("Name can't be blank");
  return false;
}
  var x = document.register.email.value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a valid e-mail address");
    return false;
  }
var a = document.getElementById("psw").value;
var b = document.getElementById("psw-repeat").value;
  if (a==null || a==""){
  alert("Pass can't be blank");
  return false;
}
  if (b==null || b==""){
  alert("Confirm Pass can't be blank");
  return false;
}
  if(a!=b)
  {alert("Password not same")
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

      <a class="navigation-home" href="login.php">Login</a>

    </nav>
  </header>

  <aside>

    <?php
     if (isset($_POST['signup']))
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

   $Name = $_POST['name'];
   $Email = $_POST['email'];
   $Pass = $_POST['pass'];


   $check = "select * from register where Email = '$Email'";
   $sql = "INSERT INTO register (name,email,password) VALUES ('$Name','$Email','$Pass')";
 $result =  mysqli_query($con,$check);
 $num =  mysqli_num_rows($result);
 if($num ==1)
   {
    echo '<h1 style="color:red;margin-left:20px;">Email id is already registered</h1>';

   }

 else {
        $result = mysqli_query($con,$sql);

           echo '<h1 style="color:green;margin-left:20px;">Successfully registered !! Redirecting to the login page in 3 Seconds</h1>';
           header('Refresh: 5; URL=http://localhost:8080/hotel/login.php');
        }
    }

   ?>

   <form  method ="post" name="register" onsubmit="return validateform()">
    <div class="container">
    <BR>
    <label for="name"></label>
    <input type="text" placeholder="Enter name" name="name">
    <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" id="psw" name="pass">

    <label for="psw-repeat"></label>
    <input type="password" placeholder="Repeat Password" id="psw-repeat">
    <hr>

    <button type="submit" name = "signup" class="registerbtn">Register</button>
  </div>


</form>


  </aside>
</body>
</html>
