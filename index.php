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
<form  method="post" action='login.php'>
Name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>




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
