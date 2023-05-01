<?php 


if($_POST) {

$name = $_POST['name'];
 $username = $_POST['email'];
$password = $_POST['password'];


// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'zaheerdata';

$connection = new mysqli ("localhost", "root","","zaheerdata");

if ($connection_connect_error) {
    echo "unable to connect with db";
    die();
    
}


$sql = $connection->query("INSERT INTO newdata (name,email,password) VALUES ('$name','$email','$password')");

if($sql==true) 
{
echo "registered successfully";

} else "something is wrong!"







}




?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>My registration page </title>

    <style>
.body {

display: grid;


}



    </style>
</head>
<body>


    <section class="body"> 
    <h1 >  Register as a new user </h1>
   
<form  action="" method="post" class="main">


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

</form>

</section>
</body>
</html>