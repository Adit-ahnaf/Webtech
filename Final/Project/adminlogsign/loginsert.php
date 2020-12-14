<?php
include 'dbconnection.php';
include 'logsign.php';

$Username = $_POST['user'];
$Admincode = $_POST['acode'];
$Password = $_POST['upass'];

$Username = stripcslashes($Username);
$Admincode = stripcslashes($Admincode);
$Password = stripcslashes($Password);
$Username =  mysqli_real_escape_string($conn, $_REQUEST['user']);
$Admincode =  mysqli_real_escape_string($conn, $_REQUEST['acode']);
$Password =  mysqli_real_escape_string($conn, $_REQUEST['upass']);



$result = mysql_query("SELECT * from adminsign where Username = '$Username' and Admincode = '$Admincode' and password = '$Password'") 
or die ("Failed to login".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row ['Username'] == user && $row['Admincode'] == acode && $row['password'] == upass){

	echo "Login done";
	echo "<a href='adminhome.php'>adminhome</a>";
} else{

	echo "loginfailed";
}

mysqli_close($conn);



?>