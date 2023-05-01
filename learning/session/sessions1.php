





<?php
session_start();


if($_POST)  {


$name=$_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $_SESSION["name"] = $name;
    $_SESSION['email']=$email;
    $_SESSION['password']= $password;
    

   if($_POST>0) {

    echo 'User registered succesfully';
   }  else {

    "please fill information to register";
   }

    // $_SESSION["name"] = $name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>

<div>


<h1> Registration form with sessions data</h1>
<form action="" method="post">


<label for="name" >Name :</label>
<input type="text"  placeholder="type your name here" name="name"><br>


<label for="email" >Email :</label>
<input type="email"  placeholder="type your email here" name="email"><br>


<label for="text" >Password :</label>
<input type="password"  placeholder="type your password here" name="password"><br>

<button type="submit">Register now</button>



</form>

<h2> Already have an account ?</h2><a href="loginsession.php">Click here </a>
</div>
    
</body>
</html>