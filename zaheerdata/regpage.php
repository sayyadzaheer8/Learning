
<?php
session_start();

if($_POST)  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION["name"] = $name;

    $connection = new mysqli('localhost','root','','zaheerdata');

    if($connection->connect_error)  {

        echo "unable to connect";
        die();
    }


    if(empty($name) || empty($email)) {

        echo "details missing please fill all info";
        die();
        header("location: regpage.php");


    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL));  {

        ECHO "INVALID EMAIL";
        die();


    }

    $result = $connection->query("INSERT INTO newdata (name,email,password) VALUES ('$name','$email','$password')");

    if($result == true) {

        echo 'user registered succesfully'; 
        // header('location : loginnew.php');
    } 
    else {

        echo "unable to register you at this time";
    }



}










?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>My registration page </title>

    <style>
  .main {

    width: 40px;
    background-color: aqua;
  }



    </style>
</head>
<body>

    <h1 style="display: block;">  Register as a new user </h1>
    <div>
<form class="main" action="" method="post">


<div class="form">
    <label for="name" id="name"> Name :</label>
    <input type="text" placeholder="type your name" name="name">

</div>

<div class="form">
    <label for="email" id="email"> email :</label>
    <input type="text" placeholder="type email" name="email">

</div>

<div class="form">
    <label for="password" id="password"> password :</label>
    <input type="text" placeholder="type password" name="password">

</div>

<button type="submit" class="form"> Register now </button>

<div> Already have an account? <button type="button" onclick="window.location.href='loginnew.php'">Login here</button></div>

















</form>















    </div>
</body>
</html>