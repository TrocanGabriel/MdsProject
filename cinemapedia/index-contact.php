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
		<li class="home"><a href="./"> Home </a></li>
		<li class="home"><a href="index-search.php"> Search </a></li>
		<li class="home"><a href="index-horror.php"> Horror </a></li>
		<li class="home"><a href="index-action.php"> Action </a></li>
		<li class="home"><a href="index-adventure.php"> Adventure </a></li>
		<li class="home"><a href="index-fantasy.php"> Fantasy </a></li>
		  <li class="home"><a href="index-contact.php"> Contact </a></li>
	  </ul>
	</div>

  <div class="form">
    <div style="font-family:Arial; font-size:16px; color:#ef1f2f; font-weight:bold;">
    <form  method="post" action="acknowledge.php">
    <label for="name">Name:</label><br>
	<input type="text" name="name" id="name"><br>
    <label for="email">Email:</label><br>
	<input type="text" name="email" id="email"><br>
    <label for="message">Message:</label><br>
	<textarea name="message" id="message"></textarea><br>
   <input type="submit" name="submit" value="Submit">
   </form>
  </div>
</div>
</body>
</html>