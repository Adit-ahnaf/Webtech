<?php
include 'dbconnection.php';
include 'home.php';
$ID = $_POST['ID'];

$Products = $_POST['Products'];
//echo $Username;
$AddingDate = $_POST['AddingDate'];
$SessionDate = $_POST['SessionDate'];
$Price = $_POST['Price'];
$Status = $_POST['Status'];





$sql = "SELECT Username FROM productinfo WHERE ID='".$ID."' AND Products='".$Products."'AND AddingDate= '".$AddingDate."' AND SessionDate= '".$SessionDate."'AND Price= '".$Price."'AND Status= '".$Status."'";





?>