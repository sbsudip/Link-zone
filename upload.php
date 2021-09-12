<?php
   


if (isset($_POST['submit']))
{
	$file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$post=['message'];
	
	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));
    
     if ($fileError===0)
	 {
	   if($fileSize<1000000000000000000)
	   {
			 $fileNameNew=uniqid('',true).".".$fileActualExt;
			 $fileDestination='uploads/'.$id.$fileName;
			 move_uploaded_file($fileTmpName,$fileDestination);
			 header("Location:home.php?uploadsuccessful");
	   } 
	 }
	 
	 else
	 {
		 echo "cant upload";
	 
	 }
	 
}	 

