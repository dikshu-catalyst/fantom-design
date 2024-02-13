<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, Website Development">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Diksha" />
    <meta name="description" content="Figma Design">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    
    <title>Fantom</title>

    <link rel="stylesheet" href="assets/css.css" />
</head>
<body>
    <header>
        <div class="header-wrapper">
         <div class="container header">
            <a href="#">
                <!-- <img src="Logo.png"> -->
                <div class="img">
                <?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                                 echo "<img src='admin/assets/uploads/" . $row['img'] . "' alt='Image' style='max-width: 100px; max-height: 100px;'>";   
                            }
                        } ?>
                </div>
            </a>
            <nav>
                <ul>
                    <li><a href="#"><?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                                 echo $row["item1"];   
                            }
                        } ?></a></li>
                    <li><a href="#"><?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                             echo $row["item2"];   
                            }
                            } ?></a></li>
                    <li><a href="#"><?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                            echo $row["item3"];   
                            }
                            } ?></a></li>
                    <li><a href="#"><?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                             // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                             echo $row["item4"];   
                            }
                            } ?></a></li>
                    <li><a href="#"><?php $sql = "SELECT * FROM data"; 
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                             // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                             echo $row["item5"];   
                            }
                            } ?></a></li>
                </ul>
            </nav>
         </div>
        </div>
    </header>
    <section>
        <div class="banner-wrapper">
            <div class="banner-image container">
                <div class="">
                    <img src="background.png">
                </div>
                <div class="banner-text">
                    <h1><span>Security</span> first</h1>
                    <h6>Industry-leading, automated smart contract security solutions for developers.</h6>
                    <div class="primarybutton"><a href="#">Dig into the details</a></div>
                </div>
            </div>
        </div>
    </section>
    <section>
    
    <div class="image-section">

        <div class="container">
            <div class="image">
                <div class="left">
                    <div class="text">
                        <h6>
                            Watchdog
                        </h6>
                        <p>
                            A static EVM byte-code analyzer that identifies security vulnerability in smart contracts.
                        </p>
                        <a href="#">Learn more</a>
                    </div>
                    <img src="dog.png">
                </div>
                <div class="right">
                    <div class="text">
                        <h6>
                            Contract library
                        </h6>
                        <p>
                            A widely-used tool that presents deployed smart contracts in an easy to read format.
                        </p>
                        <a href="#">Learn more</a>
                    </div>
                    <img src="man.png">
                </div>
            </div>
        </div>

    </div>

    </section>   
</body>
</html>