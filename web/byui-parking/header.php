<?php
	session_start();
?>
<br/>
<div class="container-fluid">
	<div class="row">
		<?php
			if (isset($_SESSION["user"])){
				echo "<p>$_SESSION['user'] (<a href=\"logout.php\">Logout</a>)</p>";
			} else {
				echo "<p><a href=\"signin.html\">Sign In</a><br><a href=\"signUp.html\">Create an Accout</a>";
			}
		?>
	</div>
</div>
<br/>