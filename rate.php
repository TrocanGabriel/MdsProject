<?php
session_start();
if( $_SESSION["user"]) 
echo "Welcome ". $_SESSION["user"] ;
    
require 'conect.php';
$rating=$_GET['q'];
$movie_id=$_GET['m'];

$sess= $$_SESSION["user_id"];
$sql = "UPDATE ratings SET (movie_id,user_id,rating)
VALUES ('$sess', '$movie_id','$rating ')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
