<?php

include 'connection.php';
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$item5 = $_POST['item5'];
$img = '';

    if (isset($_FILES['upload_file'])) {
        $img = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $img);
    }
    $sql = "INSERT INTO data (item1, item2, item3, item4, item5, img)
            VALUES ('$item1','$item2','$item3','$item4','$item5','$img')";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
