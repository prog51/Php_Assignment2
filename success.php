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

        $new_password = md5($password.$email);		
         
     }
     else
     {
       echo "Unknown error";
	   return 0;
     }

     $result = $crud->insert($ownerName,$email,$address,$phone,$new_password);
	 
	 echo "ID: " . $result['ownerId'];
	 
 
		 
?>



       <div class="container">
				<div class="row">

				  <div class="col-md-2">
				  
				  </div>
				  
				   <div class="col-md-8">
				   
					   <h1>YOUR ACCOUNT HAS BEEN CREATED</h1>

						<p>Click button below to see profile page</p>	
					
						<a href="success.php?n=sn"><button type="button" class="btn btn-success">GO TO ACCOUNT</button></a>
						
				  
				  </div>
			
			 
			   <div class="col-md-2">
		  
			   </div>
			   
		  </div>
    </div>
	
<?php

   require('includes/footer.php');

?>