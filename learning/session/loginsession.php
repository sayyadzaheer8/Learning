<?PHP
session_start();
if ($_POST) {


    if ($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']) {
        echo "login successfully";
        header("location: dashboard.php");
    } else {
        echo "user id and password is incorrect";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Login page</title>
</head>

<body>
    <h1>Login now</h1>

    <form action="" method='POST'>
        <div>
            <label for="email">Email :</label>
            <input type="email" name=email>

        </div>

        <div>
            <label for="password">password :</label>
            <input type="password" name=password>

        </div>

        <button type='submit'>Login now</button>

    </form>

</body>

</html>