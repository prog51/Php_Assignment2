<?php
   
   class crud
     {
      
        private $db;


        function __construct($conn)
          {
            $this->db = $conn;
          }

        public function insert($name,$email,$phone,$address,$password,$pet,$age,$typePet,$petPhoto,$desc)
        {
            try
            {
               $query = "INSERT INTO owner (Name,address,phone,email,password) VALUES (:name,:address,:phone,:email,:password)";
			   
			   $stmt = $this->db->prepare($query);
			   
			   $stmt->bindparam(':name',$name);
			   $stmt->bindparam(':address',$address);
			   $stmt->bindparam(':phone',$phone);
			   $stmt->bindparam(':email',$email);
			   $stmt->bindparam(':password',$password);
			   
			   $result= $stmt->execute();
			   
			   
			   
			   if($result == true)
			     {
				   try{
					   $obj = array();
					   $obj = $this->getOwnerDetails($email,$password);
						
					   $ownerID = $obj['ownerId'];
				   }
				   
				   catch(PDOException $err)
						{
								echo "Error:" . $err->getMessage();
								return false;
						}
				   
				   $query3 = "INSERT INTO pet (petName,type,age,ownerID,pet_img,description) VALUES(:pet,:typePet,:age,:ownerID,:pet_img,:dsc)";
				   $stmt3 = $this->db->prepare($query3);
				   
				   $stmt3->bindparam(':pet',$pet);
				   $stmt3->bindparam(':typePet',$typePet);
				   $stmt3->bindparam(':age',$age);
				   $stmt3->bindparam(':ownerID',$ownerID);
				   $stmt3->bindparam(':pet_img',$petPhoto);
				   $stmt3->bindparam(':dsc',$desc);
				
				   $stmt3->execute();				   			   
				   
			     }
			   else
			    {
				  echo "wine"; 
			    }	   
					   
			   
			   return $result;
            }
            catch(PDOException $err)
            {
                    echo "Error:" . $err->getMessage();
					return false;
            }
        }
		
		public function getOwnerDetails($email,$password)
		{
			try {
				
				$query = "SELECT * FROM owner WHERE email = :email AND password = :pass";
			
			    $stmt = $this->db->prepare($query);
			
				$stmt->bindparam(':email',$email);
				$stmt->bindparam(':pass',$password);
			
				$stmt->execute();
			
				$results = $stmt->fetch();
			
				return $results;
			}
			catch(PDOException $error)
			{
				echo "ERROR: " . $error->getMessage();
			}

		}
		
		
		public function getDetailsById($id)
		  {
			 $query = "SELECT * FROM owner o INNER JOIN pet p ON o.ownerId = p.ownerID WHERE o.ownerId = :id";
			 $stmt = $this->db->prepare($query);
			 $stmt->bindparam(':id',$id);
			 
			 $stmt->execute();
			 
			 $result = $stmt->fetch();
			 
			 return $result;
			 
		  }
		  
		  
      public function update($name,$email,$phone,$address,$pet,$age,$typePet,$id)
         {
		 
             $query = "UPDATE owner AS o JOIN pet AS p ON o.ownerId = p.ownerID SET o.Name = :owner, o.address = :address, o.phone = :phone, o.email = :email, p.type = :type, p.petName = :pet, age = :age WHERE o.ownerId = :id";
			 $stmt = $this->db->prepare($query);
			 $stmt->bindparam(':id',$id);
			 $stmt->bindparam(':owner',$name);
			 $stmt->bindparam(':email',$email);
			 $stmt->bindparam(':phone',$phone);
			 $stmt->bindparam(':address',$address);
			 $stmt->bindparam(':pet',$pet);
			 $stmt->bindparam(':age',$age);
			 $stmt->bindparam(':type',$typePet);
			 
			 $result = $stmt->execute();
			 
			 return $result;    			
       }
	   
	   public function UdpateImg($image, $id)
	     {
		     $query = "UPDATE pet SET pet_img = :img WHERE id = :id";
			 
			 $stmt = $this->db->prepare($query);
			 
			 $stmt->bindparam(':img',$image);
			 $stmt->bindparam(':id',$id);
			 
			 $result = $stmt->execute();
			 
			 return $result;   
	     }


     public function Delete($id)
	   {
           try
            {
				$query = "DELETE o.*, p.* FROM owner o INNER JOIN pet p ON o.ownerId = p.ownerID WHERE o.ownerId = :id";
			
		    	$stmt = $this->db->prepare($query);
			
			    $stmt->bindparam(":id",$id);
			
			    $result = $stmt->execute();
			
			}
			catch(PDOException $error)
			{
				echo "ERROR: " . $error->getMessage();
			}
			
			session_destroy();
			header("location:index.php");			
	   }

     public function SelectOneAccount($id)
	   {
		   
		   if(!isset($id))
		   {
			  echo"not set";
			  exit();
		   }
		 
		   
             $query = "SELECT o.*,p.* FROM owner o INNER JOIN pet p ON o.ownerId = p.ownerID WHERE o.ownerId = :id";
			 $stmt = $this->db->prepare($query);
			 $stmt->bindparam(':id',$id);
			 
			 $stmt->execute();
			 
			 $result = $stmt->fetch();
			 
			 return $result;     
	    }

   public function SelectAllAccount()
	   {
             /*$query = "SELECT * FROM owner o INNER JOIN pet p ON o.ownerId = p.ownerID";
			 $result = $this->db->prepare($query);
			 
			 return $result; */    
			 
			 
		   $query = "SELECT * FROM pet";
           $result = $this->db->query($query);
           return $result;
	    }		
		  

   }


?>