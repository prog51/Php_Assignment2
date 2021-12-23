<?php

   require('includes/header.php');
   require('db/conn.php');
   $ownerDetails = $crud->getDetailsById($_SESSION['ID']);

?>


<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">

         <h1>Update Account</h1>

         <form action="update.php" method="POST" enctype="multipart/form-data">    
               <fieldset>
                  <label>Owner's name:</label><br/>
                  <input type="text" name="owner_name" value= "<?php echo $ownerDetails['Name'] ?>" class="form-control" />

                  <label>Email:</label><br/>
                  <input type="email" name="email" value= "<?php echo $ownerDetails['email'] ?>" class="form-control" />

                  <label>Address:</label><br/>
                  <input type="text" name="address" value= "<?php echo $ownerDetails['address'] ?>" class="form-control" />

                  <label>phone number:</label><br/>
                  <input type="text" name="phone" value= "<?php echo $ownerDetails['phone'] ?>" class="form-control" /><br/>
				  
				  
				  <label>Pet's Name</label><br/>
                  <input type="text" name="pet" value= "<?php echo $ownerDetails['petName'] ?>" class="form-control" /><br/>
				  
				   <label>Pet's Age</label><br/>
                  <input type="number" name="age" value= "<?php echo $ownerDetails['age'] ?>" class="form-control" /><br/>
				  
				    <label>Type(Dog,cat etc)</label><br/>
                  <input type="text" name="typePet" value= "<?php echo $ownerDetails['petName'] ?>" class="form-control" /><br/>
			
                  <button type="submit" name = "update_submit" class="btn-primary btn">SUBMIT</button>
               </fieldset>
          </form>
   </div>

   <div class="col-md-2"></div>
</div>

<br/>
<br/>


<?php

   require('includes/footer.php');

?>
