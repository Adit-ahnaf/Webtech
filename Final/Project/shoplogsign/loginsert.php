<?php
include 'dbconnection.php';
include 'logsign.php';

$Username = $_POST['user'];
//echo $Username;
$Shopname = $_POST['scode'];
$Password = $_POST['upass'];

/*$Username = stripcslashes($Username);
$Admincode = stripcslashes($Admincode);
$Password = stripcslashes($Password);
$Username =  mysqli_real_escape_string($conn, $_REQUEST['user']);
$Admincode =  mysqli_real_escape_string($conn, $_REQUEST['acode']);
$Password =  mysqli_real_escape_string($conn, $_REQUEST['upass']);*/



/*$result = mysqli_query("SELECT * from adminsign where Username = '$Username' and Admincode = '$Admincode' and password = '$Password'") 
or die ("Failed to login".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row ['Username'] == user && $row['Admincode'] == acode && $row['password'] == upass){

	echo "Login done";
	echo "<a href='adminhome.php'>adminhome</a>";
} else{

	echo "loginfailed";
}

mysqli_close($conn)



$servername = "localhost";
$username = "omy";
$pass = "omy1122";
$dbname = "admin";

 // Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}*/




$sql = "SELECT Username FROM shopsignlog WHERE Username='".$Username."'AND Shopcode= '".$Shopcode."' AND password= '".$Password."'";



 if ($result = $conn->query($sql)) {
// output data of each row
$conn->close();
//echo "Login done";
	echo "<script> window.location.assign('adminhome.php'); </script>";

}
else {
$conn->close();
echo "Login Failed";

}




?>