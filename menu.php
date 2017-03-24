<!-- menu.php -->

<?php

/* https://osvaldas.info/drop-down-navigation-responsive-and-touch-friendly */
	/*echo "<script type=\"text/javascript\">$(\"document\").ready(function() { $(needPageReload) });</script>";*/
	/*if (needPageReload) {
		echo " need pagereload";
		$class1 = 'not-ajax';
		$class2 = 'not-ajaxClass';
	} else {
		echo "don't need pagereload";
		$class1 = 'ajax';
		$class2 = 'ajaxClass';	
	}*/
	if($page->title=="Calendar"){
		$class1 = 'not-ajax';
		$class2 = 'not-ajaxClass';
	} else {
		$class1 = 'ajax';
		$class2 = 'ajaxClass';	
	}
/*	$class1 = 'ajax';
	$class2 = 'ajaxClass'; */

	echo "<nav id=\"nav\" role=\"navigation\">";
		echo "<a href=\"#nav\" title=\"Show navigation\">Show navigation</a>";
		echo "<a href=\"#\" title=\"Hide navigation\">Hide navigation</a>";
		$home = $config->urls->root;
		echo "<ul>";
			echo "<li><a href=\"$home\">Home</a></li>";
			foreach ($pages->get('/')->children as $level1) {
				echo "<li>";
				if ($level1->template == "node") {
					echo "<a href=\"#\" class='$class1' aria-haspopup=\"true\">$level1->title</a>";
					echo "<ul>";
					foreach ($level1->children as $level2) {
						if ($level2->template == "article") {
							echo "<li><a href=\"$level2->url\" class='$class2'>$level2->title</a></li>";
						} else {
							echo "<li><a href=\"$level2->url\">$level2->title</a></li>";
						}
					}
					echo "</ul>";
				} elseif ($level1->template == "article") {
					echo "<a href=\"$level1->url\" class='$class2'>$level1->title</a>";
				} else {
					echo "<a href=\"$level1->url\">$level1->title</a>";
				}
				
				echo "</li>";
			}
		echo "</ul>";
	echo "</nav>";
?>

<!-- end menu.php -->
