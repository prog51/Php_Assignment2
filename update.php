<?php
   require('includes/header.php');
   require('db/conn.php');
   
   if(isset($_POST['update_submit']))
   {
	  $name =  $_POST['owner_name'];
	  $email =  $_POST['email'];
	  $phone =  $_POST['phone'];
	  $address =  $_POST['address'];
	  $pet =  $_POST['pet'];
	  $age =  $_POST['age'];
	  $typePet = $_POST['typePet'];

      $id = $_SESSION['ID'];	  
	   
   }
   else
   {
	   echo "ERROR: Data not be received";
   }
   
   $result = $crud->update($name,$email,$phone,$address,$pet,$age,$typePet,$id);
   
  
	header("location:profile.php"); 
 

?>

