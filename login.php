<?php
session_start();
require 'conect.php';


$username=$_POST["username"];
$password=$_POST["password"];
$sql = "select * FROM user_data WHERE username='$username' AND password='$password' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    
    $_SESSION["user"] = $username;
    $_SESSION["user_id"] = $row["user_id"];
    echo  $row["user_id"];
}
} else {
    echo "0 results";
}

?>