<?php
	$server = "localhost:3036";
	$db_uname = "vuln-sql"
	$db_pass = "redacted"
	$db_name = "web-vulns"

	$db = mysqli_connect($server, $db_uname, $db_pass, $db_name);

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
?>
