<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cinemapedia</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">

		<h1>Cinemapedia</h1>
		<hr />

			<div class="mainelements">

  <ul>
    <li class="home"><a href="index.php"> Home </a></li>
    <li>
      <div class="dropdownMenu">
        <button class="dropbtn"><a href="template/horror.html"> Horror</a>
        </button>
           
      </div>
    </li>
    <li>
     <div class="dropdownMenu">
        <button class="dropbtn"><a href="template/action.html"> Actiune</a>
        </button>
          
      </div>
    </li>
    <li>
    <div class="dropdownMenu">
        <button class="dropbtn"><a href="template/adventure.html"> Aventura</a>
        </button>
      </div>
    </li>
    <li>
    <div class="dropdownMenu">
        <button class="dropbtn"><a href="template/fantasy.html"> Fantasy</a>
        </button>
      </div>
    </li>
      <li class="home"><a href="template/contact.html"> Contact </a></li>
  </ul>
</div>
  <div class="form">
    <div style="font-family:Arial; font-size:16px; color:#ef1f2f; font-weight:bold;">
    <form  method="post" action="acknowledge.php">
    <label for="name">Name:</label>
	<input type="text" name="name" id="name">
    <label for="email">Email:</label>
	<input type="text" name="email" id="email">
    <label for="message">Message:</label>
	<textarea name="message" id="message"></textarea>
   <input type="submit" name="submit" value="Submit">
   </form>
  </div>
</div>
</body>
</html>