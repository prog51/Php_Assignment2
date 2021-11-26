<?php

   require('includes/header.php');

?>


<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">

         <h1>Make Your Appointment</h1>

         <form action="success.php" method="POST">    
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

                  <button type="submit" name = "register_submit" class="btn-primary btn">SUBMIT</button>
               </fieldset>
          </form>
   </div>

   <div class="col-md-2"></div>
</div>


<?php

   require('includes/footer.php');

?>
