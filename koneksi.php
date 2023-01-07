<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi</title>
</head>
<body>
	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_sasaflorist";
	$koneksi = mysqli_connect($host, $username, $password, $database);
	if ($koneksi) {
		echo "";
	} else {
		echo "Server not connected";
	}
	?>
</body>
</html>