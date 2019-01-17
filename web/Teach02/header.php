<div>
	<?php
		echo "$page"; 
		echo "<h1>Not Clearly Enough</h1>";
		if($page == "/Teach02/home.php") {
			echo "<a href='home.php' style=\"text-weight: bold;\">Home</a>
			      <a href='about-us.php'>About Us</a>
			      <a href='login.php'>Login</a>";
		}
		elseif($page == "/Teach02/about-us.php") {
			echo "<a href='home.php'>Home</a>
			      <a href='about-us.php' style=\"text-weight: bold;\">About Us</a>
			      <a href='login.php'>Login</a>";
		}
		else {
			echo "<a href='home.php'>Home</a>
			      <a href='about-us.php'>About Us</a>
			      <a href='login.php' style=\"text-weight: bold;\">Login</a>";
		}
	?>
</div>