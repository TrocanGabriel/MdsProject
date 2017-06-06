<?php
session_start();

require 'conect.php';
$rating=$_GET['q'];
$movie_id=$_GET['m'];

$sess= $_SESSION["user_id"];
$sql = "INSERT INTO ratings 
VALUES ($sess,$movie_id,$rating) on duplicate KEY UPDATE rating=$rating ";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
/*
$sql = "SELECT avg(rating) av FROM ratings where movie_id=$movie_id";
$avg;
if (mysqli_query($conn, $sql)) {
    echo "Avg";
    $avg=$row[""];
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
$sql = "UPDATE movies SET movie_rating=(SELECT avg(rating) FROM ratings where movie_id=$movie_id)";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>