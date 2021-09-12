<?php

session_start();

include('connection.php');
   $user_id=$_SESSION['user_id'];
   $Name =$_POST['name'];
   $Year =$_POST['year'];
   $Sem =$_POST['sem'];
   $Faculty =$_POST['faculty'];
   $Registration =$_POST['registration_no'];
   $Email =$_POST['email'];
   $address =$_POST['address'];
   $level =$_POST['level'];
   $Newpassword =$_POST['newpass'];
   $Password =$_POST['pass'];
   
   
   
   $query="SELECT Password FROM `register` WHERE user_id='".$_SESSION['user_id']."'";
   $result=mysqli_query($connect, $query) ;
   if(mysqli_num_rows($result)> 0){
			
		 $row = mysqli_fetch_array($result);
                  $pass = $row['Password'];
   }
   echo $pass;
   if ($pass==$Password)
   {
	  
	   $sql = "UPDATE register SET Name='$Name',Year='$Year',Sem='$Sem',Faculty='$Faculty',registration_no='$Registration',Email='$Email',Address='$address',Level='$level',Password='$Newpassword' WHERE user_id='$user_id'";

          if (mysqli_query($connect, $sql))
			  {
			  
			    $sql2="UPDATE comment SET name='$Name' WHERE name='".$_SESSION['Name']."'";
			     if (mysqli_query($connect, $sql2))
				 {
                echo "Record updated successfully";
				 header("location:exit.php");
				 }
            } else {
         echo "Error updating record: " . mysqli_error($connect);
}

   }
   
   ?>