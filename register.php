<?php

   require('includes/header.php');

?>


<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">

         <h1>Make Your Appointment</h1>

         <form action="success.php" method="POST" enctype="multipart/form-data">    
               <fieldset>
                  <label>Owner's name:</label><br/>
                  <input required type="text" name="owner_name" class="form-control" />

                  <label>Email:</label><br/>
                  <input required type="email" name="email" class="form-control" />

                  <label>Address:</label><br/>
                  <input required type="text" name="address" class="form-control" />

                  <label>phone number:</label><br/>
                  <input required type="text" name="phone" class="form-control" /><br/>
				  
				  <label>password:</label><br/>
                  <input required type="password" name="password" class="form-control" /><br/>
				  
				  <label>Pet's Name</label><br/>
                  <input required type="text" name="pet" class="form-control" /><br/>
				  
				   <label>Pet's Age</label><br/>
                  <input required type="number" name="age" class="form-control" /><br/>
				  
				    <label>Type(Dog,cat etc)</label><br/>
                  <input required type="text" name="typePet" class="form-control" /><br/>
				  
				     <label>Description of pet</label><br/>
                  <textarea required name="desc" class="form-control" rows="4" cols="50"></textarea><br/>
				  
				   <label>Photo of your pet</label><br/>	
				   <input required type="file" name="petPhoto" class="form-control" /><br/>

                  <button type="submit" name = "register_submit" class="btn-primary btn">SUBMIT</button>
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
