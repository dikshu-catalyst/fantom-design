<?php
SESSION_START();
$email = $_SESSION['email'];
include 'connection.php';
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$item5 = $_POST['item5'];
$img = '';

$sql_check = "SELECT * FROM data WHERE email = '$email'";
$result_check = mysqli_query($conn, $sql_check);
if(mysqli_num_rows($result_check) > 0){
    $sql = "UPDATE data SET item1 = '$item1', item2 = '$item2', item3 = '$item3', item4 = '$item4', item5 = '$item5'";
    
    if (isset($_FILES['upload_file'])) {
        $img = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $img);
        $sql .= ", img = '$img'";
    }

    $sql .= " WHERE email = '$email'";
} else {
    if (isset($_FILES['upload_file'])) {
        $img = $_FILES['upload_file']['name'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        move_uploaded_file($file_tmp, "assets/uploads/" . $img);
    }
    $sql = "INSERT INTO data ('img','item1','item2','item3','item4','item5')
            VALUES ('$img','$item1','$item2','$item3','$item4','$item5')";
}

if (mysqli_query($conn, $sql)) {
    echo "Records updated/inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
