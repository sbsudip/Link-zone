<?php
include('connection.php');
   $user_id = rand(0000,9999);
   $Name =$_POST['name'];
   $Year =$_POST['year'];
   $Sem =$_POST['sem'];
   $Faculty =$_POST['faculty'];
   $Registration =$_POST['registration_no'];
   $Email =$_POST['email'];
   $address =$_POST['address'];
   $level =$_POST['level'];
   $Password =$_POST['password'];
   $Reppass =$_POST['passwordrepeat'];
   
    



if( preg_match( "(^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$)i", $Email))
    { 

   
   if($Password==$Reppass)
   {
   $sql = "INSERT INTO register (user_id,Name,Year,Sem,Faculty,registration_no,Email,Address,Level,Password) VALUES ('$user_id','$Name','$Year','$Sem','$Faculty','$Registration','$Email','$address','$level','$Password')";
   $query=mysqli_query($connect,$sql);
   
   
   
   header("refresh:1; url=front.php");
   }
   else
   {
	   echo "Repeat password doesn't matches with your password  ";
	   echo "<br>";
	   echo"Please try again";
   }
}
   else {   
    echo "Invalid email address."; 
}  
  ?>