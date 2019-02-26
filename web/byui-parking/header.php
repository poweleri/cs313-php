<?php
	session_start();
?>
<br/>
<div class="container-fluid">
	<div class="row">
		<?php
			echo "<a href=\"searchLots.php\">Home</a>";
			if (isset($_SESSION["username"])){
				$user = $_SESSION["username"]; 
				echo "<p>$user (<a href=\"logout.php\">Logout</a>)</p>";
			} else {
				echo "<p><a href=\"signIn.php\">Sign In</a><br><a href=\"signUp.php\">Create an Account</a>";
			}
		?>
	</div>
</div>
<br/>