<?php

session_start();

// Your code here

if ($_POST) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $connection = new mysqli("localhost", "root", "", "zaheerdata");

    if($connection->connect_error) {

        echo "Unable to connect" ;

        die();
    }

    $result = $connection->query("INSERT INTO userdata (username, email, password) VALUES ('$username', '$email', '$password')");

   
        if ($result == true) {
            echo $msg = "User registered successfully!";

        } else {

            echo "User registration failed!" . mysqli_connect_error();
        }

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Form</title>

    <style>

        .container{

            display: block;
            margin: 30px 30px 30px 30px;
            border-radius: 2px;
            border-style: solid;
            background-color: brown;
           
        }

        

        .d1 {

            margin: 30px;
        }

        .head {

            display: inline;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="head" > Registration for new uesr !</h1>

<form  method="post" action="">
    <div class="d1" >
        <label for="username">username</label>
        <input type="text" id="username" name="username">

    </div>

    <div class="d1">
        <label for="email">email</label>
        <input type="text" id="email" name="email">

    </div class="d1">

    <div class="d1">
        <label for="password">password</label>
        <input type="text" id="password" name="password">

    </div>

    <button type="submit" class="d1" >Register now</button>
</form>
</div>
</body>

</html>