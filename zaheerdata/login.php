/*<?php

    if (count($_POST)>0) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connection = new mysqli("localhost", "root", "", "zaheerdata");

        if ($connection->connect_error) {
            echo "Failed to connect!";
            die();
        }

        $result = $connection->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

        if ($result == true) {
            echo "User registered successfully!";
        } else {

            echo "User registration failed!" . mysqli_connect_error();
        }

    }

?>*/


<?php $title = 'Register'; ?>
<?php require 'header.php'; ?>
  <body class="bg-gray-100">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold text-gray-800 my-8">Tailwind CSS Login & Registration</h1>

      <!-- Registration Form -->
      <div class="my-8">
        <h2 class="text-xl font-bold text-gray-800 mb-2">Registration</h2>
        <form class="bg-white p-6 rounded-lg shadow-md" method="POST" action="">
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="username">
              Username
            </label>
            <input class="border border-gray-400 p-2 w-full rounded-lg" type="text" id="username" name="name" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
              Email
            </label>
            <input class="border border-gray-400 p-2 w-full rounded-lg" type="email" id="email" name="email" />
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="password">
              Password
            </label>
            <input class="border border-gray-400 p-2 w-full rounded-lg" type="password" id="password" name="password" />
          </div>
          <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue" type="submit">
            Register
          </button>
        </form>
      </div>
    </div>
  </body>
  </html>