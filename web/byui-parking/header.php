<?php
	session_start();
?>
<br/>
<div class="container-fluid">
	<div class="row">
		<?php
			echo "<div class=\"col\"><a href=\"searchLots.php\">Home</a></div>";
			echo "<div class=\"col\">BYU-Idaho Parking Reviews</div>";
			echo "<div class=\"col\">";
			if (isset($_SESSION["username"])){
				$user = $_SESSION["username"]; 
				echo "<p>$user (<a href=\"logout.php\">Logout</a>)</p>";
			} else {
				echo "<p><a href=\"signIn.php\">Sign In</a><br><a href=\"signUp.php\">Create an Account</a>";
			}
			echo "</div>";
		?>
	</div>
</div>
<br/>