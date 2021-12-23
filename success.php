<?php
   require('includes/header.php');
 ?>

<?php
   
   if(isset($_GET['n']))
   {
	  header('location:profile.php');
   }

   require('db/conn.php');
   
   if(isset($_POST['register_submit']))
     {
        $ownerName = $_POST['owner_name'];
        $email = $_POST['email'];
		$address = $_POST['address'];  
        $phone = $_POST['phone'];	
        $password = $_POST['password'];
		$pet = $_POST['pet'];
		$age = $_POST['age'];
		$typePet = $_POST['typePet'];
		$petPhoto = $_FILES["petPhoto"]["tmp_name"];
		$desc = $_POST['desc'];
	
		
		//exit();
		           
		
		$ext = pathinfo($_FILES["petPhoto"]["name"],PATHINFO_EXTENSION);
		$target_dir = 'upload/';
		
		$destination = "$target_dir$phone.$ext"; 
		
		move_uploaded_file($petPhoto,$destination);
		
		

        $new_password = md5($password.$email);		
         
     }
     else
     {
       echo "Unknown error";
	   return 0;
     }

     $result = $crud->insert($ownerName,$email,$phone,$address,$new_password,$pet,$age,$typePet,$destination,$desc);
	 
	  $_SESSION['ID'] = $result['ownerId'];
	 
 
		 
?>



       <div class="container">
				<div class="row">

				  <div class="col-md-2">
				  
				  </div>
				  
				   <div class="col-md-8">
				   
				       <br/><br/><br/>
					   
					   <h1>YOUR ACCOUNT HAS BEEN CREATED</h1>

						<p>Click button below to see profile page</p>	
					
						<a href="success.php?n=sn"><button type="button" class="btn btn-success">GO TO ACCOUNT</button></a>
						
				  
				  </div>
			
			 
			   <div class="col-md-2">
		  
			   </div>
			   
		  </div>
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
<?php

   require('includes/footer.php');

?>