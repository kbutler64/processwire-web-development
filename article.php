<!-- article.php -->

	<maincontent>
		<?php include("./includes/article.inc"); ?>	
	</maincontent>
<?php if($config->ajax == false) { ?>
	<sidebar>
		<?php include("./sidebar.php"); ?>
	</sidebar>
<?php } ?>

<!-- end article.php -->
