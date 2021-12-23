<?php $title = 'View Record';
  require('includes/header.php');
  require('db/conn.php');
  
  
  if(isset($_GET['id']))
   {
	  $id = $_GET['id'];
      $pet = $crud->SelectOneAccount($id);
   }
  else
   {
      header('index.php');
   }

  //$name = $result ['firstname'] . ' ' . $result ['lastname'];
  //$image = $result['avatar_path'];

?>


	 
<div class="container">

  <div class ="row h-100 justify-content-center align-items-center ">
  
     <div class="col-md-6 m-3 text-center ">
	 
	      <div class="card" style="width: 24rem;">
			  <img src="<?php echo $pet['pet_img'] ?>" width ="" height="" alt=""/>
			  <div class="card-body">
				<h5 class="card-title">My name is <?php echo $pet['petName'] ?> </h5>
				<p class="card-text"><?php $pet['description'] ?></p>
			  </div>
			  <ul class="list-group list-group-flush">
				<li class="list-group-item">My Owner's Name: <?php echo $pet['Name'];  ?></li>
				<li class="list-group-item">My Owner's Name Contact#: <?php echo $pet['phone']; ?></li>
				<li class="list-group-item">My Owner's Name Email: <?php echo $pet['email']; ?></li>
			  </ul>
			 
           </div>
	 
	   </div>
	 
	</div>
  </div>


<?php

   require('includes/footer.php');

?>