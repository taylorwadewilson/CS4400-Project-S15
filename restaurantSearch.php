<?php

$link = mysqli_connect();

$name = mysqli_escape_string($link, $_POST["restaurantName"]);
$score = mysqli_escape_string($link, $_POST["score"]);
$condition = mysqli_escape_string($link, $_POST["condition"]);
$zipcode = mysqli_escape_string($link, $_POST["zipcode"]);
$cusine = mysqli_escape_string($link, $_POST["cuisine"]);

$query = "SELECT * 
		FROM restaurant JOIN inspection 
		ON rid 
		GROUP BY rid 
		WHERE date = MAX(date)
			AND score $condition $score";

$query . "AND zipcode == $zipcode";

if ($name != null)
	$query . "AND name == $name";

if ($cuisine != null)
	$query . "AND cuisine == $cuisine";

?>