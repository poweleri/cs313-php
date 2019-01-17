<?php 
echo "<h1>Not Clearly Enough</h1>";
if ($page = "home")
	echo "<a href='home.php'>Home</a>";
elseif ($page = "about-us") 
	echo "<a href='about-us.php'>About Us</a>";
else
	echo "<a href='login.php'>Login</a>";
?>