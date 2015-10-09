<html>
<?php
session_start();
?>
<head>
<title>Home</title>
<link rel = "stylesheet" type = "text/css" href= "style.css">
</head>

<header class = "banner">
</header>

<nav>
	<ul>
	<li><a href = "home.php">Home</a></li>
		<li><a href = "aboutus.php">About AT</a></li>
		<li><a href = "mainchar.php">Main Characters</a></li>
		<li><a href = "logout.php">Log Out</a></li>

	
	</ul>
</nav>
<?php
		if(isset($_SESSION['user']))

		{
			$_POST['user'] = $_SESSION['user'];
			$username=$_POST['user'];
			include('connect.php');

			$query = "select * from users where username='$username'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
		}
		?>
<body>
	<article class = blurr>
		

		<?php
		if(isset($_SESSION['user']))
		{
			echo"<h3>Welcome:</h3>";}?><?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?>
			
		
<h1>Adventure Time</h1>
<p>Twelve-year-old Finn battles evil in the Land of Ooo. Assisted by his magical dog, Jake, Finn roams the Land of Ooo righting wrongs and battling evil. Usually that evil comes in the form of the Ice King, who is in search of a wife. He's decided he should wed Princess Bubblegum, though she doesn't want to marry him. Still, he persists in trying to steal her away, and Finn and Jake, along with Lady Raincorn (a cross between a unicorn and a rainbow) do their best to keep her from harm.<br><img class ="jake" src="jake2.png"></img></p>
	</article>
</body>

<footer>
	<p>For more information visit us at<br><brs><a href = "http://www.cartoonnetworkasia.com/"><img class = "babyfinn" src ="babyfinn.png">
</img>
								<img class ="cnlogo" src="cnlogo1.png"></img><img class = "babyfinn" src ="babyfinn.png">
</img></a></p>
</footer>
</html>