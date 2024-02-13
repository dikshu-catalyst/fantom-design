<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/next.js"></script>
    <script src="assets/uploads"></script>
    <link rel="stylesheet" href="assets/css/style.css">
       
</head>
<body>
<form class="form" method="post" id="data" action="#" enctype="multipart/form-data">
  
<label for="logo">Choose input type for logo</label>
    <select name="logo" id="logo">
        <option></option>
        <option id="image" value="image">image</option>
        <option id="text" value="text">text</option>
    </select>

    <div class="logo-image">
    <label for="logo">Logo:</label>
    <input type="file" name="logo_file" accept="image/*">
</div>

<div class="logo-txt">
    <label for="text">Text for logo:</label>
    <input type="text" name="text">
</div>

<br>
    <label for="item1">Menu Item 1:</label>
    <input type="text" id="item1" name="item1" required>
<br>
    <label for="item2">Menu Item 2:</label>
    <input type="text" id="item2" name="item1" required>
<br>
    <label for="item3">Menu Item 3:</label>
    <input type="text" id="item3" name="item1" required>
<br>
    <label for="item4">Menu Item 4:</label>
    <input type="text" id="item4" name="item1" required>
<br>
    <label for="item5">Menu Item 5:</label>
    <input type="text" id="item5" name="item1" required>
<br>
    
    <input type="submit" id="submit-button" value="Submit">
  <br>
    <a href="logout.php">logout</a>
</form>
</body>
</html>