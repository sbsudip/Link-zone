<?php

 session_start();
   include('connection.php');
	
	    $Name=$_SESSION['Name'];
		$Message= $_POST['message'];
        
		
		   $sql = "INSERT INTO comment (name,message) VALUES ('$Name','$Message')";
   
     $result=$connect->query($sql);
	
	
	
		
   
   
   header("location:home.php");

			

			
			
			
?>