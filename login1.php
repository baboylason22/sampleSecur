<html>

<head>
<title>Be one of us</title>
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
	<article class = "login">
		
		<h1>Sign Up Form</h1>
		
		<h3>Be one of us!</h3>
		

		<form  method="post" class = "loginform">
		<p><input  required  type = "text" placeholder= "First Name" class = "textbox" name = "fname"></input></p>
		<p><input  required  type = "text" placeholder= "Last Name" class = "textbox"  name = "lname"></input></p>
		<p><input  required  type = "text" placeholder= "Age" class = "textbox"  name = "age"></input></p>
		<p><input  required  type = "text" placeholder= "Username" class = "textbox"  name = "user"></input></p>
		<p><input required type = "password" placeholder= "Password" class = "textbox"  name = "pass"></input></p>
		<button class = "submit" name = "btnsubmit">Submit</button>
		</form>

		<?php

	
				

			if(isset($_POST['btnsubmit']))
			{
				

				include('connect.php');

	

				
				$firstname=$_POST['fname'];
				$lastname=$_POST['lname'];
				$age=$_POST['age'];
				$username=$_POST['user'];
				$password=$_POST['pass'];

	$string=$_POST['pass'];
	$a = ".- ";
    $b = "-... ";
    $c = "-.-. ";
    $d = "-.. ";
    $e = ". ";
    $f = "..-. ";
    $g = "--. ";
    $h = ".... ";
    $i = ".. ";
    $j = ".--- ";
    $k = "-.- ";
    $l = ".-.. ";
    $m = "-- ";
    $n = "-. ";
    $o = "--- ";
    $p = ".--. ";
    $q = "--.- ";
    $r = ".-. ";
    $s = "... ";
    $t = "- ";
    $u = "..- ";
    $v = "...- ";
    $w = ".-- ";
    $x = "-..- ";
    $y = "-.-- ";
    $z = "--.. ";
    $n1 = ".---- ";
    $n2 = "..--- ";
    $n3 = "...-- ";
    $n4 = "....- ";
    $n5 = "..... ";
    $n6 = "-.... ";
    $n7 = "--... ";
    $n8 = "---.. ";
    $n9 = "----. ";
    $n0 = "----- ";
    $stringa = str_replace("a", "$a", $string);
    $stringb = str_replace("b", "$b", $stringa);
    $stringc = str_replace("c", "$c", $stringb);
    $stringd = str_replace("d", "$d", $stringc);
    $stringe = str_replace("e", "$e", $stringd);
    $stringf = str_replace("f", "$f", $stringe);
    $stringg = str_replace("g", "$h", $stringf);
    $stringh = str_replace("h", "$h", $stringg);
    $stringi = str_replace("i", "$i", $stringh);
    $stringj = str_replace("j", "$j", $stringi);
    $stringk = str_replace("k", "$k", $stringj);
    $stringl = str_replace("l", "$l", $stringk);
    $stringm = str_replace("m", "$m", $stringl);
    $stringn = str_replace("n", "$n", $stringm);
    $stringo = str_replace("o", "$o", $stringn);
    $stringp = str_replace("p", "$p", $stringo);
    $stringq = str_replace("q", "$q", $stringp);
    $stringr = str_replace("r", "$r", $stringq);
    $strings = str_replace("s", "$s", $stringr);
    $stringt = str_replace("t", "$y", $strings);
    $stringu = str_replace("u", "$u", $stringt);
    $stringv = str_replace("v", "$v", $stringu);
    $stringw = str_replace("w", "$w", $stringv);
    $stringx = str_replace("x", "$x", $stringw);
    $stringy = str_replace("y", "$y", $stringx);
    $stringz = str_replace("z", "$z", $stringy);
    $string1 = str_replace("1", "$n1", $stringz);
    $string2 = str_replace("2", "$n2", $string1);
    $string3 = str_replace("3", "$n3", $string2);
    $string4 = str_replace("4", "$n4", $string3);
    $string5 = str_replace("5", "$n5", $string4);
    $string6 = str_replace("6", "$n6", $string5);
    $string7 = str_replace("7", "$n7", $string6);
    $string8 = str_replace("8", "$n8", $string7);
    $string9 = str_replace("9", "$n9", $string8);
    $stringfin = str_replace("0", "$n0", $string9);
    json_encode($stringfin);
    strrev($stringfin);
    $password = $stringfin;
				
				$query1 ="select * from users WHERE username='$username'";
				$result=mysql_query($query1) or die ('Unable to run Query:'.mysql_error());
				$count=mysql_num_rows($result);


				if($count==0)
				{
					
					$query = "insert into users values('$firstname','$lastname','$age','$username','$password')";
					mysql_query($query);
					echo "<script type = text/javascript>alert('Registration Successful')</script >";
				}
				else
				{
					echo "<script type = text/javascript>alert('Username Already Exist!')</script >";
				}
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