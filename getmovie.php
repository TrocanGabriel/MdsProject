<?php

$q=$_GET['q'];
require 'conect.php';

$sql = "select * FROM movies m join movie_genres mg using(movie_id)  WHERE mg.movie_genre='$q' ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["movie_id"]. " - Name: " . $row["movie_title"]. " " ;
    }
    $_SESSION["user"] = $username;
} else {
    echo "0 results";
}

