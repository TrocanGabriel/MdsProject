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
		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
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
		?>

	</div>


</body>
</html>