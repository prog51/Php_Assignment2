<?php

   require('includes/header.php');


?>



<div class="jumbotron"><!-- -->
   <div class="row">
         <div class="col-md-8">
              <h1 class="display-4">Welcome to Ocean's 8 Pet store</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
               <hr class="my-4">
               <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
               <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
               </p>
         </div>
         <div class="col-md-4">

                  <img src="images/pet-store.jpg" width="300" height="300"/>
         </div>
   </div>
 
 
</div>


<div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6">
         <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>">   
               <fieldset>
                  <label>USERNAME:</label><br/>
                  <input required type="text" name="user" class="form-control"/>

                  <label>PASSWORD:</label><br/>
                  <input required type="text" name="password" class="form-control" />
               </fieldset>
          </form>
   </div>

   <div class="col-md-3"></div>
</div>




<?php

   require('includes/footer.php');

?>




