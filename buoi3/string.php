<?php 
	$myString = "Hello this is my string!";
	echo $myString;
	echo "<br>";
	echo strlen($myString);
	echo "<br>";
	echo str_word_count($myString);
	echo "<br>";
	echo strpos($myString, "o");
	echo "<br>";
	echo strpos($myString, "i");
	echo "<br>";
	echo strpos($myString, "this");
	echo "<br>";
	echo str_replace("is", "are", $myString);
	echo "<br>";
	echo strrpos($myString, "i");
?>