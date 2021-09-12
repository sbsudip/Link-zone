<?php




include('connection.php');
      session_start();
      
   
     
        $Name= $_POST['name'];
        $Password= $_POST['password'];
	
        $query="SELECT * FROM `register` WHERE Name='".$Name."'
        and Password='".$Password."'";
        $result=mysqli_query($connect, $query) ;

        if(mysqli_num_rows($result)> 0){
			
		$_SESSION['Name']=$Name;
			
                 
              $row = mysqli_fetch_array($result);


                   $user_id = $row['user_id'];
				    $_SESSION['user_id']=$user_id;
				   
				   $email=$row['Email'];
				   $_SESSION['Email']=$email;
				   
				   $year=$row['Year'];
				   $_SESSION['Year']=$year;
				   
				   $sem=$row['Sem'];
				   $_SESSION['Sem']=$sem;
				   
				   $faculty=$row['Faculty'];
				   $_SESSION['Faculty']=$faculty;
				   
				   $sem=$row['registration_no'];
				   $_SESSION['registration_no']=$sem;
				   
				   $email=$row['Email'];
				   $_SESSION['Email']=$email;
				   
				   $address=$row['Address'];
				   $_SESSION['Address']=$address;
				   
				   $level=$row['Level'];
				   $_SESSION['Level']=$level;
				   
				   $pass=$row['Password'];
				   $_SESSION['Password']=$pass;
				   
				   $photo=$row['Photo'];
				   $_SESSION['Photo']=$photo;

                 
				  
				  
				  //*****
				  $statement = $connect->prepare($query);
	                  $statement->execute(
		               array(
			                  '".$Name."' => $_POST["name"]
		                      )
	                 );
	            
		
			
				

				$sub_query = "INSERT INTO login_details (user_id) VALUES ('$user_id')";

				
				
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				
				$_SESSION['login_details_id'] = rand(9999,111111);
			
	
		
				//*****
				  
				  
				  
				  
			
			
          
        header("location:home.php");
}
       else{
          echo "your password donot match";
        }
      


?>
