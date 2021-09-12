<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();

?>


        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		
    

<body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            
            
        </ul>
       
			
        </div>
		
</body>	

<link rel="stylesheet" href="edit.css">
<div class="container">
	<div class="row">
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="post" action="update.php">
                              
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"> Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="Name" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                             
                             
                              <div class="form-group row">
                                <label for="year" class="col-4 col-form-label">Year</label> 
                                <div class="col-8">
                                  <select id="select" name="year" class="custom-select" required="required">
                                   <option value="First">1</option>
                                   <option value="Second">2</option>
                                   <option value="Third">3</option>
                                   <option value="Fourth">4</option>
                                  </select>
                                </div>
                              </div>
							  
							  <div class="form-group row">
                                <label for="sem" class="col-4 col-form-label">Semester</label> 
                                <div class="col-8">
                                  <select id="select" name="sem" class="custom-select" required="required">
                                   <option value="First">1</option>
                                   <option value="Second">2</option>
                                  </select>
                                </div>
                              </div>
							  
							  <div class="form-group row">
                                <label for="faculty" class="col-4 col-form-label">Faculty</label> 
                                <div class="col-8">
                                  <input id="email" name="faculty" placeholder="Faculty" class="form-control here" required="required" type="text">
                                </div>
                              </div>
							  
							  <div class="form-group row">
                                <label for="registration_no" class="col-4 col-form-label">Registration No</label> 
                                <div class="col-8">
                                  <input id="email" name="registration_no" placeholder="Registration No" class="form-control here" required="required" type="text">
                                </div>
                              </div>
							  
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="email">
                                </div>
                              </div>
							  
							  <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="email" name="address" placeholder="Address" class="form-control here" required="required" type="text">
                                </div>
                              </div>
							  
							  <div class="form-group row">
                                <label for="sem" class="col-4 col-form-label">Level</label> 
                                <div class="col-8">
                                  <select id="select" name="level" class="custom-select" required="required">
                                   <option value="Teacher">Teacher</option>
                                   <option value="Student">Student</option>
								   <option value="Faculty Member">Faculty Member</option>
                                  </select>
                                </div>
                              </div>
							  
							   
                              
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" required="required" type="text">
                                </div>
                              </div> 
							  
							  <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Your Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="pass" placeholder="Password" class="form-control here" required="required" type="text">
                                </div>
                              </div> 
							  
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>

