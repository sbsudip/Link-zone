
<?php
include('connection.php');
session_start();

  
  ?>

<html>
  <head>
  <title>Link Zone</title>

<center>

<link rel="stylesheet" href="home.css">
<body>

     <div class="top">
	 <h1>Link Zone</h1>
<h2> <hr>
<header>	  

  
    <h3> <form id="name"><h2><?php  echo $_SESSION['Name']; ?></h2></form><form id="chat" action="index.php"><button href> CHAT </button></form> <p><a id="profile" href="profile.php"><button>My Profile</button></a></p><form id="exit" action="exit.php"><button> EXIT </button></form>  </h3>
 
 <hr>
 </h2>
                                      
	</header> 
		 </div>
		 
		 <div id="main">
		 <form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
	<button type="submit" name="submit">Upload</button>
	</form>
	</div>
	<div id="main3">
	<form method="post" action="posts.php">
	     <textarea type="text" name="message" placeholder="Write something"></textarea>
          <input type="submit" name="posts" value="Post">
		  </form>
		  </div>
		
		
		<div id="main1">
		 <h3>All Posts</h3>
		 
		  <?php
		
		 
		 $sql=" SELECT*FROM comment";
		$result=$connect->query($sql);
		while($row=$result->fetch_assoc())
		{ 
	             
	       ?>
		   
		   <hr>
		   <h3>
		   <?php
			echo $row['name']."<br>"; echo"</h3>";
			echo"<div class='commentbox'>";
			
			echo $row['message']."<br>";
			echo "</div>";
			?>
			
			</h3>
			
			
			<?php
			
		}
		 ?>
		
		 
		 </div>
		
		
		 <div id="left">
		 <hr>
		 <h3>Uploaded Files</h3>
		 <hr>
		 <?php
		 
		 $files=scandir("uploads");
		 for($a=2;$a<count($files); $a++)
		 
		 {
		  ?>
		  
		  
		  
		  
		 <p>
             <h4>		 
		    <a href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
			</h4>
			</p>
			
             			
			
			
		     <?php
		 }
		 ?>
		 </div>
		  
		 
		 <div class="container" id="right">
		 <hr>
		 <h3>Your Posts</h3>
		 <hr>
		 <?php
		   
		 
      
		 
		 $sql=" SELECT*FROM comment";
		$result=$connect->query($sql);
		 while($row=$result->fetch_assoc())
		{ 
	       if($row['name']==$_SESSION['Name'])
		   {
	       ?>
		   
		   <hr>
		   <h3>
		   <?php
		   echo $row['name']."<br>";echo"</h3>";
			echo"<div class='commentbox'>";
			
			
			echo $row['message']."<br>";
			echo "</div>";
			
			
			
			
		   
			
		   }
		}
		 ?>
		
		 
		
		 
		 </div>
		 
		 
		 
		 <div id="footer">
		 
		 
		 </div>
		 
		
</body>
</center>
</html>
	  
	  
	  
	  
	  
	  
    


