<html>
<?php
session_start();
?>
<head>
<title>About Us</title>
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
			
		
<h1>About Us</h1>
<p class = "about"> American animated television series created by Pendleton Ward for Cartoon Network. The series follows the adventures of Finn (voiced by Jeremy Shada), a human boy, and his best friend and adoptive brother Jake (voiced by John DiMaggio), a dog with the magical power to change shape and size at will. Finn and Jake live in the post-apocalyptic Land of Ooo. Along the way, they interact with the other main characters of the show: Princess Bubblegum (voiced by Hynden Walch), The Ice King (voiced by Tom Kenny), and Marceline the Vampire Queen (voiced by Olivia Olson). The series is based on a short produced for Nicktoons and Frederator Studios' animation incubator series Random! Cartoons. After the short became a viral hit on the Internet, Cartoon Network picked it up for a full-length series that previewed on March 11, 2010, and officially premiered on April 5, 2010.

The series, heavily inspired by the fantasy role-playing game Dungeons & Dragons as well as video games, is produced via hand-drawn animation. Episodes are created through the process of storyboarding, and a single episode takes roughly eight to nine months to complete, although multiple episodes are worked on at the same time. The Adventure Time cast records their lines together in group recordings as opposed to different recording sessions with each voice actor, and the series also regularly employs guest actors and actresses for minor and recurring characters. Each Adventure Time episode is about eleven minutes in length; pairs of episodes are often telecast in order to fill a half-hour program time slot. The series has completed six seasons, and has also been renewed for a seventh season (which will debut on November 2 and contain a special mini-series), as well as an eighth season. A feature-length film is also in the works.

Since its debut, Adventure Time has been a ratings success for Cartoon Network, with the highest-rated episodes scoring over 3 million viewers. The show has received positive reviews from critics and has developed a strong following among teenagers and adults. Among its many accolades, Adventure Time has won four Primetime Emmy Awards, a Peabody Award, two Annie Awards, two British Academy Children's Awards, a Motion Picture Sound Editors Award, a Pixel Award, and a Kerrang! Award. The series has also been nominated for three Critics' Choice Television Awards, two Annecy Festival Awards, and a Sundance Film Festival Award, among others. Its comic book spin-off won an Eisner Award and two Harvey Awards. In addition, the series has also produced various clothing and merchandise, video games, comic books, and DVD compilations.</p>
	</article>
</body>

<footer>
	<p>For more information visit us at<br><brs><a href = "http://www.cartoonnetworkasia.com/"><img class = "babyfinn" src ="babyfinn.png">
</img>
								<img class ="cnlogo" src="cnlogo1.png"></img><img class = "babyfinn" src ="babyfinn.png">
</img></a></p>
</footer>
</html>