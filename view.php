<?php

   require('includes/header.php');
   require('db/conn.php');


?>

  <div class="container-fluid home-img-below-header" >
  <div class="row">
     <div class="col-md-12 text-white text-center h-100 justify-content-center align-items-center">
	    <h1>
		   SEE OUR PETS
		</h1>
	 </div>
  </div>
</div>

  <div class="row h-100 justify-content-center align-items-center">
  
  
   <?php

		 $result = $crud->SelectAllAccount();
		 
			while($row = $result->fetch(PDO::FETCH_ASSOC))
			{
				 $type = $row['type'];
				 $petName = $row['petName'];
				 $id = $row['ownerID'];
				 $img = $row['pet_img'];
				 $age = $row['age'];
				 $desc = $row['description'];
					 
				 
			
						 
						 
						 echo " 
						 <div class='col-sm-3 m-2'>
						    <div class='card m' style='width: 12rem;'>
							  <img class='card-img-top' src='$img'>
							  <div class='card-body'>
								<h5 class='card-title'>Hi my name is $petName</h5>
								
							  </div>
							  <ul class='list-group list-group-flush'>
								<li class='list-group-item'>
								  <a href='viewDetail.php?id=$id' class='btn btn-primary'>VIEW</a>
								</li>
								
							  </ul>
							  </div>
							</div>";
			 
			}


		  ?>
  
  </div>
  
  <!--<tr>
      <td><img src="<//?php echo $img;  ?>" width="50" height="50"/></td>
      <td><//?php echo  $name;  ?></td>
      <td><//?php echo $address; ?></td>
     
      <td>
        <a href="view.php?id=<//?php echo $id ?>" class="btn btn-primary">VIEW</a>
       
      </td>
  </tr>

</table>-->

<br/><br/><br/><br/><br/><br/><br/>


<?php

   require('includes/footer.php');

?>
