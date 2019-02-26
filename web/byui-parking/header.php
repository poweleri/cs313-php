<?php
	session_start();
?>
<br/>
<div class="container-fluid">
	<div class="row">
		<?php
			if (isset($_SESSION["username"])){
				$user = $_SESSION["username"]; 
				echo "<p>$user (<a href=\"logout.php\">Logout</a>)</p>";
			} else {
				echo "<p><a href=\"signIn.php\">Sign In</a><br><a href=\"signUp.html\">Create an Account</a>";
			}
		?>
	</div>
</div>
<br/>