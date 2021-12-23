<?php

   require('includes/header.php');
   
   if(!isset($_SESSION['ID']))
   {
	  header('location:login.php'); 
   }
 
   require('db/conn.php');
   
   
   $ownerDetails = $crud->getDetailsById($_SESSION['ID']);
   
      
?>


<div class="container emp-profile m-5">

  <h1 class="text-primary">
     Welcome Pet Owner
  </h1>

    
            <form action= "updateProfile.php" method="post" enctype="multipart/form-data">
                <div class="row mx-auto">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img class ="mt-5" src="<?php echo $ownerDetails['pet_img'] ?>" width ="300" height="300" alt=""/>
							
                            <div class="file btn btn-sm btn-primary" style="width:300px;">
                                Change Photo
                                <input type="file" name="animalPic"/>
								<input type="hidden" name="petID" value="<?php echo $ownerDetails['id']  ?>"/>
								<input type="hidden" name="phone" value="<?php echo $ownerDetails['phone']  ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="profile-head">
                                    
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Owner'details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pet Description</a>
                                </li>
                            </ul>
                        </div>
						
						
						    <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 
                               		<br/>					 
									<h5>
                                        Owner's Name: <?php echo $ownerDetails['Name'];  ?>
                                    </h5>
									
                                    <span>
                                        Address: <?php echo $ownerDetails['address']; ?>
                                    </span><br/>
									
									<span>
                                        Contact#: <?php echo $ownerDetails['phone']; ?>
                                    </span><br/>
									
									<span>
                                        Email: <?php echo $ownerDetails['email']; ?>
                                    </span><br/> 							
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
									<div class="row mt-3">
                                            <div class="col-md-12">
                                                <p><?php  echo  $ownerDetails['description'];  ?></p>
                                            </div>
                                        </div>
										
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="updateImage" value="Update image"/>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                     
                    </div>
                </div>
            </form>           
        </div>

<a href="delete.php" class="btn button-success">DELETE ACCOUNT</a>
<a href="profileEdit.php" class="btn button-success">EDIT</a>

<?php

   require('includes/footer.php');

?>