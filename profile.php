<?php
session_start();

?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        
        
        <link rel="stylesheet" type="text/css" href="css1/style1.css" />
		
    

<body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
			 <li><span>Image 05</span><div></div></li>
			  <li><span>Image 06</span><div></div></li>
            
        </ul>
       
			
        </div>
    

<link rel="stylesheet" href="profile.css">
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="lz.png" alt=""/>
                            <div >
                                <form action="photo.php" method="post" enctype="multipart/form-data">
							
									
							</form>
							
							   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
									      <?php  echo $_SESSION['Name']; ?>
                                    </h5>
                                    <h6>
                                        <?php  echo $_SESSION['Level']; ?>
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="home.php" role="tab" aria-controls="profile" aria-selected="false">HOME</a>
                                </li>
								 <li class="nav-item">
                                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="edit.php" role="tab" aria-controls="profile" aria-selected="false">EDIT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['user_id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Name']; ?></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Faculty</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Faculty']; ?></p>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Registration No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['registration_no']; ?></p>
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Year</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Year']; ?></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Semester</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Sem']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Address']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  echo $_SESSION['Level']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
		</body>
		</head>
		</html>
		