<?php
session_start();
if ($_POST) {


    $email =$_POST['email'];
    $password =$_POST['password'];
    // $_SESSION["name"]=$name;

    $connection = new mysqli ('localhost','root','','zaheerdata');

    if($connection->connect_error) {

        echo 'unable to connect to server';
        die();
    }

$sql = ("SELECT * FROM newdata WHERE email='$email' AND password='$password'");

    $result= $connection->query($sql);

    if($result->num_rows>0) {

        header("location: dashboard.php");
    }  else {
        echo 'bhakkk Bhosdike';
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    <title>New Login page</title>
</head>
<body>
    <h1> Login here</h1>
<form action="" method="post">
 <div>
<label for="email">Email</label>
<input type="email" name=email>
 </div>

 <div>
<label for="password">password</label>
<input type="test" name=password>
 </div>

 <button type="submit"> Login now</button>
 </form>

</body>
</html>