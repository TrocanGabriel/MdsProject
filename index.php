<?php
session_start();
if( isset($_SESSION["user"])) {
echo "Welcome ". $_SESSION["user"] ;
//print_r($_SESSION);
}
?>
<head>
<script>
function showGenre(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getmovie.php?q="+str,true);
  xmlhttp.send();
}
    
    function liveSearch(str) {
  if (str=="") {
    document.getElementById("dropDown").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("dropDown").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getMoviesList.php?q="+str,true);
  xmlhttp.send();
}
    
</script>
</head>
<h2> Register</h2>
<form action="register.php" method="post">
Name: <input type="text" name="username"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<h2> Login</h2>
<form  method="post">
Name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<?php
require 'conect.php';

if(isset($_POST['username'])) {
$username=$_POST["username"];
$password=$_POST["password"];
$sql = "select * FROM user_data WHERE username='$username' AND password='$password' ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
    $_SESSION["user"] = $username;
    $_SESSION["user_id"] = $row["user_id"];
} else {
    echo "User or password is incorrect ";
}
}
 ?>


<form>
<select name="users" onchange="showGenre(this.value)">
<option value="">Select a movie genre:</option>
<option value="adventure">Adventure</option>
<option value="fantasy">Fantasy</option>
<option value="action">Action</option>
<option value="horror">Horror</option>
</select>
</form>



<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

<input type='text' onkeydown="liveSearch(this.value)">
<div id="dropDown"> </div>
