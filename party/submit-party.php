<?php

$mysqli = new mysqli("localhost", "root", "bacon", "PKPCastle");


$q = "('";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$q .= test_input($_POST["name"]) . "', '";
$q .= test_input($_POST["fraternity"]) . "', '";
$q .= test_input($_POST["school"]) . "', '";

if (!isset($_POST["over"])) {
	$q .= "Under')";
}

else {
	$q .= "Over')";
}

echo $q;

$result = $mysqli->query("INSERT INTO party (name, fraternity, school, over) VALUES $q");

//header("Location: index.php");