<?php

   require('includes/header.php');
   require('db/conn.php');
   
   
      if(isset($_POST['log_submit']))
	  {
		 $email =  $_POST['email'];
		 $password =  $_POST['password'];
		 
		 $new_password = 
		 
		 $result = $crud->getOwnerDetails($email,$password);
		 
		 echo $result['ownerId'];
	
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



<?php

   require('includes/footer.php');

?>