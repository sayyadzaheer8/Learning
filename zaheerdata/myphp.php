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
            echo "User registered successfully!";
        } else {

            echo "User registration failed!" . mysqli_connect_error();
        }

    }
?>
