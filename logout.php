<html>

<head>
<title>Thank You</title>
<link rel = "stylesheet" type = "text/css" href= "style.css">
</head>

<header class = "banner">
</header>

<nav>
	<ul>
		<li><a href = "index.php">Log in</a></li>
        <li><a href = "login1.php">Sign up</a></li>
	
	</ul>
</nav>

<body>
	<article>
		

		
<?php
session_start();
if(isset($_SESSION['user']))
{
	
echo"<h1>Thank You for visiting!</h1>
<center><p><a href = 'index.php'>Go back</a></p></center>";
session_unset();
session_destroy();
}
?>
	</article>
</body>

<footer>
	<p>For more information visit us at<br><brs><a href = "http://www.cartoonnetworkasia.com/"><img class = "babyfinn" src ="babyfinn.png">
</img>
								<img class ="cnlogo" src="cnlogo1.png"></img><img class = "babyfinn" src ="babyfinn.png">
</img></a></p>
</footer>
</html>