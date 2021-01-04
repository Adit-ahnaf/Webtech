<?php
include 'dbconnection.php';
include 'Addproducts.php';

$ID = mysqli_real_escape_string($conn, $_REQUEST['ID']);
$Products = mysqli_real_escape_string($conn, $_REQUEST['Products']);
$AddingDate = mysqli_real_escape_string($conn, $_REQUEST['AddingDate']);
$SessionDate = mysqli_real_escape_string($conn, $_REQUEST['SessionDate']);
$Price = mysqli_real_escape_string($conn, $_REQUEST['Price']);
$Status = mysqli_real_escape_string($conn, $_REQUEST['Status']);

$sql = "INSERT INTO productinfo (ID, Products, AddingDate, SessionDate, Price, Status ) VALUES ('$ID', '$Products','$AddingDate', '$SessionDate','$Price','$Status')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: home.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 




?>