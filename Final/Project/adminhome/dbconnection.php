<!DOCTYPE html>
<html>
<head>
	<title>db connection</title>
</head>
<body>
	<?php

$conn =  mysqli_connect("localhost","omy","omy1122","products");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
</body>
</html>