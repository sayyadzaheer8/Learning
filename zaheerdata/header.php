<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title> My Blog</title>



    <style>
        .head {

            height: 60px;
            display: flex;
            justify-content: right;
            background-color: yellowgreen;
        }

        .menu {
            display: flex;
            margin-left: 10px;
            padding-right: 20px;


        }

        .links {
            font-size: 30px;
            padding-left: 30px;
            list-style-type: none;
        }

        .body {
            background-color: aquamarine;
        }

        .my {

            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 30px;
            border-style: solid;
            padding-bottom: 20px;
            padding-left: 20px;
        }
    </style>
</head>

<body class="body">
    <div class="head">
        <ul class="menu" style="list-style-type: none;" padding 20px 20px>
            <li><a class="links" href="/">Home</a></li>
            <li><a class="links" href="index.html">Categories</a></li>
            <li><a class="links" href="index.html">Contact us</a></li>
            <li><a class="links" href="login.php">Login now</a></li>
            <li><a class="links" href="add_blogs.php">Add blogs</a></li>
        </ul>

</body>

</html>