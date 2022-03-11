<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	<h1>My website</h1>
	<img src="img.jpg" alt="Image">
	<!-- Comment trong html -->
	<p>This is my website</p>
	<?php 
		$title = "Đây là website tin tức";
		echo $title;
		// Comment trong php
		/* Comment trong PHP */
		$x = 5;
		$y = 10;
		echo "<br/>";
		echo $x + $y;
		$user_name = "chadluong"; // snake
		$userName = "canhluong";  // Camel
		function summary() {
			$z = 111111115;
			echo "Test function $z";
		}
		echo "<br/>";
		summary();

		function total($x = 7, $y = 44) {
			echo $x + $y;
		}
		echo "<br/>";
		total(5, 19);
		echo "<br/>";
		total();
		
		echo "<br/>";
		$x = 88;
		if ($x < 100) {
			echo "x nho hon 100";
		} else {
			echo "x lớn hơn hoặc bằng 100";
		}

	?>
</body>
</html>