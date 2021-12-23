<?php

   require('includes/header.php');


?>



<div style = "background-color:#006994; color:#fff;" class="jumbotron home-banner"><!-- -->
   <div class="row">
         <div class="col-md-7 hom-banner p-5">
              <h1 class="display-4">Welcome to Ocean's 8 Pets</h1>
              <p class="lead">If your looking for a friend to adopt we have many kinds of interesting animals.</p>
               <hr class="my-4">
               <p>If you want to give away your pet, you can do that here as well, just register and a free account will be created for you.</p>
               <p class="lead">
                  <a class="btn btn-secondary btn-lg" href="view.php" role="button">FIND A PET</a>
				  
				  <a class="btn btn-warning btn-lg" href="register.php" role="button">GIVE AWAY YOUR PET</a>
               </p>
         </div>
		 
         <div class="col-md-5 mt-5">
		 
                  <img src="images/karsten-winegeart-oU6KZTXhuvk-unsplash.jpg" width="300" height="300"/>
         </div>
   </div>
 
 
</div>


<section class="row home-img-below-header">
   <div class="container">
   
     
          <div class="col-md-3">

         </div>	


          <div class="col-md-6">
		  
		        <div class="card text-center p-5">			  
			  
			   <div class="">
					  
					  <img class="d-block w-100" src="images/sergey-semin-VQPD1fc_Y8g-unsplash.jpg" />
					  <div class="card-body">
						<h3 class="card-title">ADOPT YOUR BEST FRIEND TODAY</h3>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="view.php" class="btn btn-primary">FIND A FRIEND</a>
					  </div>
					
				</div>
			  
			  
		      </div>

         </div>		  


          <div class="col-md-3">

         </div>		  		 
		   
		  
		  
   </div>
  
</section>

<div class = "container">
  <div class="row h-100 justify-content-center align-items-center">
      
	   <div class="col-md-12">
			<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="width:70rem;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/bonnie-kittle-MUcxe_wDurE-unsplash.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>DON'T JUST ADOPT A PET!</h2>
							<p>FIND AN ANIMAL FRIEND</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/chewy-gWzTum_yMCg-unsplash.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/baby-n-dog.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
   </div>
</div>


<?php

   require('includes/footer.php');

?>




