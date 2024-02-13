<?php
include 'connection.php';
SESSION_START();

if(isset($_SESSION['email']) && isset($_SESSION[ 'pwd'])) {
    header("Location: nextpage.php");
}
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/fieldCheck.js"></script>
    <link rel="stylesheet"  href="assets/css/style.css"> 
</head>
<body>
    <form class="form" method="post" id="data" action="#" enctype="multipart/form-data">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="pwd" name="pwd" required>
        <br>
        
        <input type="submit" id="confirm" value="Confirm">

        <div ><a href="createaccount.php" id="createAccount">Create an Account</a></div>
    </form>
</body>
</html>