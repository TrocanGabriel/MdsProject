<?php
require 'conect.php';

$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$sql = "INSERT INTO user_data (username, password, email)
VALUES ('$username', '$password','$email ')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>