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
		  <li class="home"><a href="index-contact.php"> Contact </a></li>
	  </ul>
	</div>
	<h1>Search</h1>
	<form action='' method='post'>
		<input type='text' name='postSearch' value='<?php if(isset($error)){ echo $_POST['postSearch'];}?>'>
		<p><input type='submit' name='submit' value='Submit' style="display: none"></p>
		</form>
	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){
		if(isset($_POST['postSearch'])) 
			$postSearch=$_POST['postSearch'];
			try {
				echo $postSearch;
				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts WHERE postTitle LIKE lower(\'%'.$postSearch.'%\') ORDER BY postID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';				
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
	}
	?>
	</div>


</body>
</html>