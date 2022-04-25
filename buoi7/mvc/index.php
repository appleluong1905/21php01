<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Hello! Welcome to my website</h1>
	<ul>
		<li>
			<a href="index.php?action=home"> Home </a>
		</li>
		<li>
			<a href="index.php?action=news"> News </a>
		</li>
		<li>
			<a href="index.php?action=product"> Product </a>
		</li>
		<li>
			<a href="index.php?action=contact"> Contact </a>
		</li>
	</ul>
	<?php 
		// Ngoài include, còn có: include_once, require, require_once;
		include 'controller/controller.php';
		$controller = new Controller();
		$controller->handleRequest();
	?>
</body>
</html>