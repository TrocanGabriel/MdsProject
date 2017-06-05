<?php
session_start();
require 'conect.php';
$id=$_GET['movie_id'];
?>

    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
    <body>
    <div id='resultNumber'></div>

    <?php

$sql = " select rating rating FROM ratings where movie_id=$id ";
$result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result); 
    $user_rating=   $row["rating"];
        
$sql = "select movie_rating FROM movies   WHERE movie_id =$id ";
$result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result); 
    $rating=    $row["movie_rating"];
$sql = "select * FROM movies WHERE movie_id='$id' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["movie_id"]. " - Name: " . $row["movie_title"] ;
        echo " <img src='".$row["src"]."'  alt ='image not found'>";
         ?> 
       <div id="ratingAll"></div>
  <div id="ratingUser"></div>
  <script>
  $(function () {
 
  $("#ratingAll").rateYo({
    rating: <?php echo $rating ?>,
  numStars: 10,
  maxValue: 10,
  readOnly: true,
  multiColor: {
 
      "startColor": "#FF0000",
      "endColor"  : "#00FF00"
    }
  });
  
  $("#ratingUser").rateYo({
    rating: <?php echo $user_rating ?>,
  numStars: 10,
  maxValue: 10,
  fullStar: true,
  precision: 1,
  multiColor: {
 
      "startColor": "#FF0000",
      "endColor"  : "#00FF00"
    },
  onSet: function (rating, rateYoInstance) {
    rateMovie(rating);
    window.location.reload();
    }
  });
 
}); </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        
        
        <?php
    }
  //  $_SESSION["user"] = $username;
} else {
    echo "0 results";
}


?>
<script>   
 function rateMovie(x) {
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("resultNumber").innerHTML=this.responseText;
    }
  }
  
  
  xmlhttp.open("GET","rate.php?q="+x+"&m="+<?php echo $id ?>,true);
  xmlhttp.send();
}    
        </script>