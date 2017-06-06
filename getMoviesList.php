<?php

$q=$_GET['q'];
require 'conect.php';

$sql = "select * FROM movies   WHERE movie_title like '%$q%' LIMIT 5 ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $link="show_movie.php?movie_id=".$row["movie_id"];
        echo "<a href='$link'>id: " . $row["movie_id"]. " - Name: " . $row["movie_title"]. "</a> " ;
    }
    $_SESSION["user"] = $username;
} else {
    echo "0 results";
}


?>
