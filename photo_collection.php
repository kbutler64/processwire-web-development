<!-- photo_collection.php -->

<div class="article gallery">
<?php
	echo "<h1>$page->title</h1>";
	echo "<h6>$page->post_date</h6>";
	echo $page->body;
	echo "<hr>";
/*	$j = 1;
	echo "<div id='slideshow'>";
		foreach ($page->images as $image) {
			if ($j == 1) {
				echo "<div class='pic" . $j . " pictures' id='topPic'><img src='$image->url'></div>";
			} else {
				echo "<div class='pic" . $j . " pictures'><img src='$image->url'></div>";
			}
			$j++;
		}
	echo "<ul><li class='prev' onClick='slidePlus(-1);'>&#10094;</li><li class='next' onClick='slidePlus(1);'>&#10095;</li></ul>";
	echo "</div>"; */
	
	echo "<div id='slideshow'>";
		echo "<ul class=\"bxslider\">";
			foreach ($page->images as $image) {
				echo "<li><img src='$image->url' /></li>";
			}
		echo "</ul>";
	echo "</div>";
	
	echo "<div class='thumbs'>";
		foreach ($page->images as $image) {
			$thumbnail = $image->size(150,100);
			echo "<p><a href='{$image->url}'><img src='{$thumbnail->url}' alt='{$thumbnail->description}' ></a></p>";
		}
	echo "</div>";
?>
</div>

<script>
<!-- //	var slideIndex = 1;
	slideshow(slideIndex);
	
	function slidePlus(n) {
		slideshow(slideIndex += n);
	}
	
	function slideshow(n){
		var newTop = document.getElementsByClassName("pic"+n);
		newTop.id = "topPic";
		
		
	} -->
	
	$(document).ready(function(){
		$('.bxslider').bxSlider();
	});
</script>

<!-- end photo_collection.php -->
