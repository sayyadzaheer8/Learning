<?php


if ($_POST)  {
    $content = $_POST['content'];



    $connection = new mysqli("localhost", "root", "", "zaheerdata");

    if ($connection->connect_error) {
        echo "Failed to connect!";
        die();
    }

    $result = $connection->query("INSERT INTO blogs (content) VALUES ('" . htmlspecialchars($content) . "')");
}

require 'header.php';
?>





</div>

<h1 style="font-style: italic;"> Welcome to your own Blogs content share area!</h1>
<h2> here we can share our own contents in this blog website and its like an open blog for everyone. So whoever is intrested
    in posting a blog can share there experiance here just like quora platform.
</h2>

<h3 style="font-style: oblique;"> here is the place where you can add your content which will get added to the main blog websites and will be visible
    for evryone whoever is on our websites so here we ccan share each one's experiance with the whol world and a new era of blogging will begins from here. </h3>

<form action="" method="post">
    <!--<input type="text" style="width: 1500px ; height: 400px;"> -->
    <textarea type="text" style="width: 1500px; height: 400px; padding: 0; margin: 0; text-align: left;" name="content"></textarea>
    <button type="submit" style="background-color: green;">Submit</button>
</form>


<p> once we have succesfully added our contents it will become visible to evryone. Happy bloggig!</p>
</body>

</html>