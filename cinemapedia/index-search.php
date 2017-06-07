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
		<hr/>

	<div class="mainelements">
	  <ul>
		<li class="home"><a href="./"> Home </a></li>
		<li class="home"><a href="index-search.php"> Search </a></li>
		<li class="home"><a href="index-horror.php"> Horror </a></li>
		<li class="home"><a href="index-action.php"> Action </a></li>
		<li class="home"><a href="index-adventure.php"> Adventure </a></li>
		<li class="home"><a href="index-fantasy.php"> Fantasy </a></li>
		  <li class="home"><a href="#"> Contact </a></li>
	  </ul>
	</div>

<input type='text' oninput ="liveSearch(this.value)">
<div id="dropDown"> </div>


</body>
</html>