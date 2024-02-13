<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
    <link rel="stylesheet"  href="assets/css/style.css"> 
</head>
<body>
    <form class="form" method="post" id="data" action="#" enctype="multipart/form-data">
    <div id="inputCredentials">
             <label for="firstName">First Name:</label>
             <input  type="text" id="firstName" name="fname" required><br><br>

             <label for="lastName">Last Name:</label>
             <input type="text"  id="lastName" name="lname"><br><br>

             <label for="email">Email:</label>
             <input type="email" id="email" name="email" required><br><br>

             <label for="password">Password:</label>
             <input type="password" id="pwd" name="pwd" required><br><br>

             <label for="confirmPassword">Confirm Password:</label>
             <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
             <input type="submit" id="submit" value="Submit">
         </div>
    </form>
</body>
</html>