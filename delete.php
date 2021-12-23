<?php

   require('includes/header.php');
   require('db/conn.php');
   
   if(isset($_SESSION['ID']))
   {

      $id = $_SESSION['ID'];	  
	   
   }
   else
   {
	   header("location:login.php");
   }
   
   $result = $crud->Delete($id);
   
   echo $result;
   
  
	//header("location:profile.php"); 

?>