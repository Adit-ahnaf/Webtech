<?php 
include 'dbconnection.php';

if(isset($_POST['delete_btn']))
{
   $ID = $_POST['delete_id'];
   $query = "DELETE FROM productinfo WHERE ID='$ID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	
   }
   else 
   {
   	echo  "NOt Deleted";
   }

} 

 ?>