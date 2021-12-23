<?php

   require('includes/header.php');
   require('db/conn.php');
   
   
      if($_SERVER['REQUEST_METHOD'] == "POST")
	  {
		 $email =  strtolower(trim($_POST['email']));
		 $password =  $_POST['password'];
		 
		 $new_password = md5($password.$email);
		 
		 $result = $crud->getOwnerDetails($email,$new_password);
		 
		 
		 	 
		 if($result == true)
		 {
			 $_SESSION['ID'] = $result['ownerId'];
			 
			  header('location:profile.php');
	
		 }
		 else
		 {
			echo "incorrect"; 
		 }
	
	  }
   
?>


<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">

         <h1>LOGIN</h1>

         <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">    
               <fieldset>
                 
                  <label>Email:</label><br/>
                  <input required type="email" name="email" class="form-control" />

                 
				  <label>password:</label><br/>
                  <input required type="password" name="password" class="form-control" /><br/>

                  <button type="submit" name = "log_submit" class="btn-primary btn">SUBMIT</button>
               </fieldset>
          </form>
   </div>

   <div class="col-md-2"></div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<?php

   require('includes/footer.php');

?>