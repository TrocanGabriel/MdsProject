<?php require('includes/config.php'); ?>
<?php 
if(isset($_Post['submit'])) {
	$to = 'stefan.chituc@my.fmi.unibuc.ro';
    $subject = 'Contact from my site';
	$message =  'Name: ' .$_Post['name']. "\r\n\r\n";
	$message .= 'Email: ' .$_Post['email']. "\r\n\r\n";
	$message .= 'Message: ' .$_Post['message'];
	$succes =mail($to,$subject,$message);
	
}
?>
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
<div>
   <?php if(isset($succes)&& $succes) {?>
   <h1> Thank you </h1>
   Your message has been sent.
   <?php } else { ?>
   <h1>Oops!</h1>
   <p>Sorry, there was a problem sending your message.</p>
   <?php } ?>
</div>
</body>
</html>