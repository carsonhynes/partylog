<?php

$server = "party.database.windows.net,1433";
$db = "partylog";
$user = "party";
$password = "Bacon1234";

try {
	$conn = new PDO ( "sqlsrv:Server=tcp:.$server; Database =.$db; $user, $password" );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

catch ( PDOException $e ) {
	print( "Error connecting to SQL Server." );
	die(print_r($e));
}

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

//header("Location: index.php");