<?php
$db_host = "localhost";
$db_name = "zaheerdata";
$db_user = "root";
$db_pass = "";

$conn =  mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo "DB not connected";
} else {
    echo "DB Connected";
}

$sql = "SELECT *
        FROM users
        ;";

$result = mysqli_query($conn, $sql); 
$rows = mysqli_fetch_all($result);


require 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
</head>
<body>
<p>Blog Content: <?php 
    foreach ($rows as $row) {
        echo $row[1];
        echo '<br />';
    }
?></p>
</body>
</html>
