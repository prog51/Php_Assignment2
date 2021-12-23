

<?php

class owners
{
   private $db;
   
   function __construct($conn)
   {
      $this->db = $conn;   
   }
   
   
   public function getUser($email,$password)
   {
	   
	   
	   try{
		   $query="SELECT * FROM owner WHERE email = :email AND password = :password";

		   $stmt = $this->db->prepare($query);

		   $stmt->bindparam(':email',$email);
		   $stmt->bindparam(':password',$password);	


		   $stmt->execute();

		   $results = $stmt->fetch();


			return $results;
	   }
	   catch(PDOException $err)
	   {
		   echo "ERROR: " . $err->getMessage();
		   return false;
	   }
	   
   }

}

?>