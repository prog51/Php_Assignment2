  
  
  <?php
  
           require('db/conn.php');  

		   if(isset($_POST['updateImage']))
		   {
			   
			   $petID =  $_POST['petID'];
			   $contact = $_POST['phone'];			   
		   
			   
			 $orig_file = $_FILES["animalPic"]["tmp_name"];
			 $target_dir = "upload/";
			 $ext = pathinfo($_FILES["animalPic"]["name"], PATHINFO_EXTENSION);
			 $image = "$target_dir$contact.$ext";

			 move_uploaded_file($orig_file,$image);
			   $update_Pic = $crud->UdpateImg($image,$petID);
			  
			  header("location:profile.php");
		   }
		   
		  if(isset($_POST['InfoSubmit']))
		   {
			  
			  $id = $_POST['owner_id'];
			   $name = $_POST['name'];
			   $email = $_POST['email'];
			   $phone = $_POST['phone'];
			   $address = $_POST['address'];
			   $age = $_POST['age'];
			   $type= $_POST['type'];
			   $petname = $_POST['petname'];
			   
			   $update = $crud->update($name,$email,$phone,$address,$petname,$age,$type,$id);
			  
			  header("location:profile.php");
		   }
   
   ?>