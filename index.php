<?php
session_start();
if( isset($_SESSION["user"])) {
echo "<p align=center>"."Welcome ". $_SESSION["user"]."</p>";
//print_r($_SESSION);
}
?>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/clock.css">
<link rel="stylesheet" type="text/css" href="style/main.css">

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

<div class="mainelements">

  <ul>
    <li class="home"><a href="index.php"> Home </a></li>
    <li>
      <div class="dropdownMeniu">
        <button class="dropbtn"><a href="template/horror.html"> Horror</a>
        </button>
           
      </div>
    </li>
    <li>
     <div class="dropdownMeniu">
        <button class="dropbtn"><a href="template/action.html"> Actiune</a>
        </button>
          
      </div>
    </li>
    <li>
    <div class="dropdownMeniu">
        <button class="dropbtn"><a href="template/adventure.html"> Aventura</a>
        </button>
      </div>
    </li>
    <li>
    <div class="dropdownMeniu">
        <button class="dropbtn"><a href="template/fantasy.html"> Fantasy</a>
        </button>
      </div>
    </li>
      <li class="home"><a href="template/contact.html"> Contact </a></li>
  </ul>
</div>
&nbsp;
<div  id="searchForm">
<!-- <form>
<select name="users" onchange="showGenre(this.value)">
<option value="">Select a movie genre:</option>
<option value="adventure">Adventure</option>
<option value="fantasy">Fantasy</option>
<option value="action">Action</option>
<option value="horror">Horror</option>
</select>
</form> -->

<br>
<!--TO DO:  SA ARATE CATE REZULTATE SUNT PENTRU GENUL SELECTAT DE FILM -->
<div id="txtHint"><b>Information will show here!</b></div>
<br>

<input type='text' oninput ="liveSearch(this.value)">
<div id="dropDown"> </div>
</div>

<div class="scene">
  <div class="cube">
    <div class="side back">
      <div class="guides"></div>
      <span><a class="cubeEl" href="template/adventure.html">AVENTURA</a></span>
    </div>
    <div class="side top">
      <div class="guides"></div>
      <span><a class="cubeEl" href="template/fantasy.html">FANTASY</a></span>
    </div>
    <div class="side bottom">
      <div class="guides"></div>
      <span><a class="cubeEl" href="template/action.html">ACTIUNE</a></span>
    </div>
    <div class="side front">
      <div class="guides"></div>
      <span><a class="cubeEl" href="template/horror.html">HORROR</a></span>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#hideRegister").click(function(){
        $(".pb").hide();
        $(".register").hide();

    });
    $("#showRegister").click(function(){
        $(".register").show();
        $(".pb").show();

    });
});

   $(document).ready(function(){
    $("#hideLogin").click(function(){
        $(".pb").hide();
        $(".login").hide();

    });
    $("#showLogin").click(function(){
        $(".login").show();
        $(".pb").show();

    });
});


</script>


<div id="mainReg">

<button id="hideRegister">Hide register</button>
<button id="showRegister">Show register</button>
<br>
<button id="hideLogin">HideLogin</button>
<button id="showLogin">ShowLogin</button>

<div class="register">
<h2 id="register"> Register</h2>
<form action="register.php" method="post">
Name: <input type="text" name="username"><br>
<br>
E-mail: <input type="text" name="email"><br>
<br>
Password: <input type="password" name="password"><br>
<br>
<input type="submit">
</form>
</div>



<div class="login">
<h2 id="login"> Login</h2>
<form  method="post">
Name: <input type="text" name="username"><br>
<br>

Password: <input type="password" name="password"><br>
<br>
<input type="submit" onsubmit="window.location.reload()">
</form>
</div>

</div>

<?php
// TODO : MODIFICA SA ARATE NUMELE FARA ID SI AUTORELOAD LA PAGINA PENTRU WELCOME DE SUS
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



