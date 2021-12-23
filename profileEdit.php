  <?php
 
		  require('includes/header.php');
		  
		   require('db/conn.php'); 
		   
		   if(!isset($_SESSION['ID']))
		   {
			  header('location:login.php'); 
		   }
		   

		 
		   $ownerDetails = $crud->getDetailsById($_SESSION['ID']);
		   
		?>
		
     <div class="container">

        <div class="row">

         <div class="col-md-12 p-5">		
				  <h1>Edit My Account</h1>

				   <form method = "post" action="updateProfile.php" class="row g-3">
					<input type="hidden" name = "owner_id" value="<?php echo $_SESSION['ID']; ?>" />
				   <div class="col-md-6">
					<label for="inputfirtName4" class="form-label">Owner Name</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['Name']; ?>" name = "name" id="inputEmail4">
				  </div>

				  <div class="col-md-6">
					<label for="inputLastName4" class="form-label">email</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['email']; ?>" name = "email" id="inputPassword4">
				  </div>

				  <div class="col-md-6">
					<label for="email4" class="form-label">Phone</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['phone']; ?>"  name = "phone" id="inputEmail4">
				  </div>
				  
				  <div class="col-md-6">
					<label for="inputZip" class="form-label">Address</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['address']; ?>" name="address" id="address">
				  </div>

				  <div class="col-md-6">
					<label for="inputZip" class="form-label">Pet Name</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['petName']; ?>" name="petname" id="petname">
				  </div>
				  
				   <div class="col-md-6">
					<label for="inputZip" class="form-label">Pet Age</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['age']; ?>" name="age" id="age">
				  </div>

				  <div class="col-md-6">
					<label for="inputZip" class="form-label">Type</label>
					<input type="text" class="form-control" Value = "<?php  echo $ownerDetails['type']; ?>" name="type" id="type">
				  </div><br/>
				   <div class="col-md-12 mt-5" >
					<button type="submit" name="InfoSubmit" class="btn btn-success">Save Changes</button>
				  </div>
				</form>
			 </div>
	
	    </div>
		
	  </div>
  <?php

  require('includes/footer.php');


?>