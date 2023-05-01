<?php
session_start();

 if ($_POST) {






    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zaheerdata";
    
    $connection = new mysqli($servername, $username, $password, $dbname);
    
    if ($connection->connect_error) {
        die("connection faild");
    }

    $email = $_POST['email'];
    $providedPass = $_POST['password'];

    
     $sql = "SELECT * FROM userdata WHERE email = '$email' AND password = '$providedPass' ";
    
    
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
    
        $_SESSION['username'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        // user doesn't exist, show error message
        echo "Invalid username or password.";
    }
    
 }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Login page</title>

    <style>
        .login {

            display: flex;
        }
    </style>
</head>

<body>


    <h1> Login now</h1>

    <form class="login" action="" method="post">
        <div class="d1">
            <label for="email">email</label>
            <input type="text" id="email" name="email"><br>

        </div>

        <div class="d1">
            <label for="password">password</label>
            <input type="text" id="password" name="password">


        </div>

        <button type="submit" class="d1">Register now</button>

    </form>
</body>

</html>