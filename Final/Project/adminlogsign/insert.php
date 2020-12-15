<?php
include 'dbconnection.php';
include 'logsign.php';


$Firstname =  mysqli_real_escape_string($conn, $_REQUEST['Firstname']);
$Lastname =  mysqli_real_escape_string($conn, $_REQUEST['Lastname']);
$Username =  mysqli_real_escape_string($conn, $_REQUEST['Username']);
$Email =  mysqli_real_escape_string($conn, $_REQUEST['Email']);
$Admincode =  mysqli_real_escape_string($conn, $_REQUEST['Admincode']);
$Password =  mysqli_real_escape_string($conn, $_REQUEST['Password']);



 
$sql = "INSERT INTO adminsign (Firstname, Lastname, Username, Email, Admincode, Password) VALUES ('$Firstname', '$Lastname', '$Username', '$Email','$Admincode', '$Password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
   
  
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 


 

mysqli_close($conn);



?>