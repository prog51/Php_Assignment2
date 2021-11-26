<?php
   
   class crud
     {
      
        private $db;


        function __construct($conn)
          {
            $this->db = $conn;
          }

        public function insert($name,$address,$phone,$email,$password)
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
			   
			   $stmt->execute();
			   
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
			$query = "SELECT ownerId FROM owner WHERE email = :email AND password = :password";
			
			$stmt = $this->db->prepare($query);
			
			$stmt->bindparam(':email',$email);
			$stmt->bindparam(':password',$password);
			
			$stmt->execute();
			
			$result = $stmt->fetch();
			
			return $result;
		}

     }


?>