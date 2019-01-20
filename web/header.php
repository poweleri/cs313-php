<div class="container-fluid">
	<div class="row">
		<?php
			echo "<p>$page</p>"
			if ($page == 'about-me.php') {
				echo "<a class=\"col\" href\"index.php\">Homepage</a>
				      <h3 class=\"col\">About Me</h3>
				      <a class=\"col\" href\"assignments.php\">Assignments</a>";
				      
			} elseif ($page == 'assignments.php'){
				echo "<a class=\"col\" href\"index.php\">Homepage</a>
				      <a class=\"col\" href\"about-me.php\">About Me</a>
				      <h3 class=\"col\">Assignments</h3>";
			} else {
				echo "<h3 class=\"col\">Homepage</h3>
				      <a class=\"col\" href\"about-me.php\">About Me</a>
				      <a class=\"col\" href\"assignments.php\">Assignments</a>";
			}

		?>
	</div>
</div>