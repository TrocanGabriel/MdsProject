<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cinemapedia - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		  <li class="home"><a href="#"> Contact </a></li>
	  </ul>
	</div>


		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<div id="ratingAll"></div>';
				if(isset($_SESSION['user_id']))
					echo '<div id="ratingUser"></div>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
		<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://cinemapedia.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	</div>
	<script>
	$(function () {

	$("#ratingAll").rateYo({
	rating: <?php
	$stmt = $db->prepare('SELECT ifnull(avg(rating),0) res FROM ratings WHERE movie = :postID');
	$stmt->execute(array(':postID' => $_GET['id']));
	$row = $stmt->fetch();
	echo $row['res'];
	?>,
	numStars: 10,
	maxValue: 10,
	readOnly: true,
	multiColor: {
		"startColor": "#FF0000",
		"endColor"  : "#00FF00"
    }
	});
	
	$("#ratingUser").rateYo({
	rating: <?php
	if(isset($_SESSION['user_id'])){
	$stmt = $db->prepare('SELECT ifnull(rating,0) res FROM ratings WHERE movie = :postID AND user = :userID');
	$stmt->execute(array(':postID' => $_GET['id']));
	$stmt->execute(array(':userID' => $_SESSION['user_id']));
	$row = $stmt->fetch();
	echo $row['res'];
	}
	else{
		echo '0';
	}
	?>,
	numStars: 10,
	maxValue: 10,
	fullStar: true,
	multiColor: {
		"startColor": "#FF0000",
		"endColor"  : "#00FF00"
	},
	onSet: function (rating, rateYoInstance) {
		rateMovie(rating);
		window.location.reload();
    }
	});
	});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
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
                                
		
<script id="dsq-count-scr" src="//cinemapedia.disqus.com/count.js" async></script>
</body>
</html>