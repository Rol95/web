<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$u_name = $_POST["user_name"]; 
	$u_email = $_POST["user_email"];
	$u_text = $_POST["user_text"];

	print "Üdv " . $u_name . "!</br>Megkaptuk az üzeneted: ". $u_text. "</br> Az e-mail címed: " .$u_email;
	
	print "</br>Köszönjük!";
}
?>



