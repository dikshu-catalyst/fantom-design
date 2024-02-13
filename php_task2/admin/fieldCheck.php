<?php
include('connection.php');
SESSION_START();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];  

    $sql_check = "SELECT email, pwd FROM credentials WHERE email ='$email' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $sql_check);

    if(mysqli_num_rows($result) != 0) {
        echo "success"; // Login successful

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = $pwd;

        if(isset($_SESSION['email']) && isset($_SESSION[ 'pwd'])) {
            $_SESSION['loggedin'] = true;
            if(isset($_POST['confirm']))
        {
            $email = $_POST['email'];
            header("Location: index.php");
        }

        }

    } else {
        echo "fail"; // Login failed
    }
} 
?>